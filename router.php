<?php
// Local development router for PHP built-in web server (php -S)
// Emulates the URL rewriting rules from .htaccess

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = urldecode($uri);

// 1. Direct static file: if file exists and is not a directory, serve directly
if ($uri !== '/' && file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
    return false;
}

// 2. Normalize URI
$cleanUri = rtrim($uri, '/');

// 3. Root request -> index.php
if ($cleanUri === '' || $cleanUri === '/index') {
    $_SERVER['SCRIPT_NAME'] = '/index.php';
    $_SERVER['PHP_SELF'] = '/index.php';
    require __DIR__ . '/index.php';
    return;
}

// 4. Exact PHP file match without extension (e.g., /projects -> projects.php, /about -> about.php)
if (file_exists(__DIR__ . $cleanUri . '.php')) {
    $_SERVER['SCRIPT_NAME'] = $cleanUri . '.php';
    $_SERVER['PHP_SELF'] = $cleanUri . '.php';
    require __DIR__ . $cleanUri . '.php';
    return;
}

// 5. Dynamic project route: /projects/{slug} -> project-details.php?slug={slug}
if (preg_match('#^/projects/([^/]+)$#', $cleanUri, $matches)) {
    $_GET['slug'] = $matches[1];
    $_SERVER['SCRIPT_NAME'] = '/project-details.php';
    $_SERVER['PHP_SELF'] = '/project-details.php';
    require __DIR__ . '/project-details.php';
    return;
}

// 6. Dynamic blog route: /blogs/{slug} -> blogs/{slug}.php or {slug}.php
if (preg_match('#^/blogs/([^/]+)$#', $cleanUri, $matches)) {
    $slug = $matches[1];
    if (file_exists(__DIR__ . '/blogs/' . $slug . '.php')) {
        $_SERVER['SCRIPT_NAME'] = '/blogs/' . $slug . '.php';
        $_SERVER['PHP_SELF'] = '/blogs/' . $slug . '.php';
        require __DIR__ . '/blogs/' . $slug . '.php';
        return;
    } elseif (file_exists(__DIR__ . '/' . $slug . '.php')) {
        $_SERVER['SCRIPT_NAME'] = '/' . $slug . '.php';
        $_SERVER['PHP_SELF'] = '/' . $slug . '.php';
        require __DIR__ . '/' . $slug . '.php';
        return;
    }
}

// 7. Directory index fallback
if (is_dir(__DIR__ . $uri) && file_exists(__DIR__ . $uri . '/index.php')) {
    $_SERVER['SCRIPT_NAME'] = $uri . '/index.php';
    $_SERVER['PHP_SELF'] = $uri . '/index.php';
    require __DIR__ . $uri . '/index.php';
    return;
}

// 8. 404 Fallback
http_response_code(404);
if (file_exists(__DIR__ . '/404.php')) {
    require __DIR__ . '/404.php';
} else {
    echo "404 Not Found";
}
