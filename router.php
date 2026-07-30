<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
$queryString = $query ? '?' . $query : '';

// 1. Force 301 redirect for direct requests ending with .php
if ($uri && str_ends_with(strtolower($uri), '.php') && $uri !== '/build.php') {
    $cleanPath = preg_replace('/\.php$/i', '', $uri);
    if ($cleanPath === '/index') {
        $cleanPath = '/';
    }
    header("Location: " . $cleanPath . $queryString, true, 301);
    exit;
}

$path = __DIR__ . $uri;

// 2. Serve static assets directly (css, js, images, etc.)
if ($uri !== '/' && file_exists($path) && !is_dir($path)) {
    return false;
}

// 3. Clean PHP URLs (e.g. /treatment/hernia-surgeon-in-annanagar -> treatment/hernia-surgeon-in-annanagar.php)
if (file_exists($path . '.php')) {
    require $path . '.php';
    return true;
}

// 4. Directory index
if (is_dir($path) && file_exists(rtrim($path, '/') . '/index.php')) {
    require rtrim($path, '/') . '/index.php';
    return true;
}

return false;
