<?php
/**
 * Static build script for Netlify deployment.
 * Usage: php build.php
 */

$root = __DIR__;
$dist = $root . '/dist';
error_reporting(E_ERROR | E_PARSE);

/* ---------- helpers ---------- */
function rrmdir(string $dir): void {
    if (!is_dir($dir)) return;
    foreach (scandir($dir) as $entry) {
        if ($entry === '.' || $entry === '..') continue;
        $path = $dir . '/' . $entry;
        is_dir($path) ? rrmdir($path) : unlink($path);
    }
    rmdir($dir);
}

function rcopy(string $src, string $dst): void {
    if (!is_dir($dst)) mkdir($dst, 0777, true);
    foreach (scandir($src) as $entry) {
        if ($entry === '.' || $entry === '..') continue;
        $s = $src . '/' . $entry;
        $d = $dst . '/' . $entry;
        is_dir($s) ? rcopy($s, $d) : copy($s, $d);
    }
}

function getPhpFiles(string $dir, string $base = ''): array {
    $files = [];
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') continue;
        if ($item === 'build.php' || $item === 'includes' || $item === 'dist') continue;
        $path = $dir . '/' . $item;
        if (is_dir($path)) {
            $files = array_merge($files, getPhpFiles($path, $base . $item . '/'));
        } elseif (pathinfo($path, PATHINFO_EXTENSION) === 'php') {
            // Skip layout files
            if (strpos($item, 'layout') !== false) continue;
            $files[] = ['path' => $path, 'name' => $base . $item];
        }
    }
    return $files;
}

function getPageBody(string $content): string {
    // Remove all require/include lines
    $lines = explode("\n", $content);
    $lines = array_filter($lines, fn($line) => !preg_match('/require/i', $line));
    $content = implode("\n", $lines);

    // Remove PHP tags
    $content = preg_replace('/^<\?php\s*/', '', $content);
    $content = str_replace('?>', '', $content);
    $content = preg_replace('/^\s*\$[a-z_]+\s*=.*$/m', '', $content);

    return trim($content);
}

/* ---------- 1. clean dist ---------- */
echo "🧹 Cleaning $dist\n";
rrmdir($dist);
mkdir($dist, 0777, true);

/* ---------- 2. copy assets ---------- */
if (is_dir($root . '/assets')) {
    echo "📁 Copying assets/\n";
    rcopy($root . '/assets', $dist . '/assets');
}

/* ---------- 3. render pages ---------- */
echo "🔍 Scanning for PHP files...\n";
$phpFiles = getPhpFiles($root);
$built = 0;

foreach ($phpFiles as $file) {
    $htmlName = preg_replace('/\.php$/i', '', $file['name']);

    // Special handling for index.php - output directly as index.html, not index/index.html
    if ($htmlName === 'index') {
        $htmlOutput = 'index.html';
        $outPath = $dist . '/' . $htmlOutput;
        $prefix = '';
        if (!is_dir(dirname($outPath))) {
            mkdir(dirname($outPath), 0777, true);
        }
    } else {
        $htmlOutput = $htmlName . '/index.html';
        $outPath = $dist . '/' . $htmlOutput;
        $pathDepth = substr_count($file['name'], '/');
        $prefix = $pathDepth > 0 ? str_repeat('../', $pathDepth) : './';

        if (!is_dir(dirname($outPath))) {
            mkdir(dirname($outPath), 0777, true);
        }
    }

    echo "  Building $htmlOutput...\n";

    // Get page body content (without require lines)
    $pageBody = getPageBody(file_get_contents($file['path']));

    // Create a complete HTML file using header/footer includes
    ob_start();

    // Set up environment
    $_SERVER['DOCUMENT_ROOT'] = $root;
    $_SERVER['PHP_SELF'] = basename($file['path']);

    // Load config (need to reset variables between pages)
    $site = $nav = $herniaConditions = $treatments = $stats = null;
    require $root . '/includes/config.php';

    // Load header (outputs DOCTYPE, <html>, <head>, opening <body>)
    require $root . '/includes/header.php';

    // Output page content
    echo $pageBody;

    // Load footer (closes <body>, <html>)
    require $root . '/includes/footer.php';

    $fullHtml = ob_get_clean();

    // Fix relative asset paths - use preg_replace to catch all patterns
    $fullHtml = preg_replace('/(href|src)="assets\//', '$1="' . $prefix . 'assets/', $fullHtml);

    // Fix .php href links to clean URLs
    $fullHtml = preg_replace('/href="([^"]*)\.php"/', 'href="$1/"', $fullHtml);

    file_put_contents($outPath, $fullHtml);
    echo "  ✅ Built $htmlOutput\n";
    $built++;
}

echo "\n📄 Built $built pages successfully.\n";

/* ---------- 4. sitemap ---------- */
echo "🗺️  Writing sitemap.xml\n";
$xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
$xml .= "<url><loc>https://surgeondrkumar.com/</loc><changefreq>weekly</changefreq><priority>1.0</priority></url>\n";
foreach ($phpFiles as $f) {
    $name = preg_replace('/\.php$/i', '', $f['name']);
    if ($name === 'index') continue;
    $loc = 'https://surgeondrkumar.com/' . $name . '/';
    $xml .= "<url><loc>$loc</loc><changefreq>monthly</changefreq><priority>0.7</priority></url>\n";
}
$xml .= '</urlset>';
file_put_contents($dist . '/sitemap.xml', $xml);

/* ---------- 5. robots ---------- */
echo "🤖 Writing robots.txt\n";
file_put_contents($dist . '/robots.txt', "User-agent: *\nAllow: /\nSitemap: https://surgeondrkumar.com/sitemap.xml\n");

/* ---------- 6. _redirects ---------- */
echo "🔀 Writing _redirects\n";
file_put_contents($dist . '/_redirects', "@fallback\n");

/* ---------- 7. 404 ---------- */
echo "📄 Writing 404.html\n";
file_put_contents($dist . '/404.html', <<<'HTML'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - Dr. Kumar</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>body{font-family:Inter,sans-serif}.font-display{font-family:Georgia,serif}</style>
</head>
<body class="bg-slate-50 min-h-screen flex items-center justify-center">
    <div class="text-center px-6">
        <h1 class="text-8xl font-bold text-cyan-700 mb-4">404</h1>
        <h2 class="text-2xl font-bold text-slate-800 mb-3">Page Not Found</h2>
        <p class="text-slate-600 mb-8">The page you're looking for doesn't exist.</p>
        <a href="/" class="inline-flex items-center gap-2 bg-cyan-700 text-white font-semibold px-6 py-3 rounded-full hover:bg-cyan-800 transition">Back to Home</a>
    </div>
</body>
</html>
HTML
);

echo "\n✨ Build complete!\n";
echo "📦 Output: $dist\n";
echo "📄 Pages: $built\n";
