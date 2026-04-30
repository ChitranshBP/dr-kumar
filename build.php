<?php
/**
 * Static build for Netlify.
 *
 * Renders each PHP page to HTML and copies the assets folder into ./dist.
 * Run locally with `php build.php`. Netlify runs the same via netlify.toml.
 */

$root = __DIR__;
$dist = $root . '/dist';

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

function render(string $file): string {
    ob_start();
    include $file;
    return ob_get_clean();
}

/* ---------- 1. clean dist ---------- */
echo "Cleaning $dist\n";
rrmdir($dist);
mkdir($dist, 0777, true);

/* ---------- 2. copy static assets ---------- */
if (is_dir($root . '/assets')) {
    echo "Copying assets/\n";
    rcopy($root . '/assets', $dist . '/assets');
}

/* ---------- 3. render pages ---------- */
$pages = [
    'index.php' => 'index.html',
    // add more page mappings here as the site grows:
    // 'about.php' => 'about/index.html',
];

foreach ($pages as $source => $output) {
    $sourcePath = $root . '/' . $source;
    if (!file_exists($sourcePath)) {
        echo "  SKIP: $source (not found)\n";
        continue;
    }

    $outPath = $dist . '/' . $output;
    if (!is_dir(dirname($outPath))) mkdir(dirname($outPath), 0777, true);

    file_put_contents($outPath, render($sourcePath));
    echo "  Built $output\n";
}

/* ---------- 4. write a basic 404 ---------- */
file_put_contents(
    $dist . '/404.html',
    "<!doctype html><meta charset=utf-8><title>Not found</title>"
    . "<style>body{font-family:system-ui;display:grid;place-items:center;min-height:100vh;margin:0;color:#0e7490}</style>"
    . "<div style='text-align:center'><h1>404</h1><p>Page not found. <a href='/'>Go home</a></p></div>"
);

echo "\nBuild complete - " . $dist . "\n";
