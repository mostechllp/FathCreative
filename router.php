<?php
// Local router script for PHP built-in server (php -S localhost:8000 router.php)
// Emulates Apache .htaccess rewrite rules locally

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// 1. Serve existing static files (CSS, JS, images, fonts) directly
$filePath = __DIR__ . $uri;
if ($uri !== '/' && file_exists($filePath) && !is_dir($filePath)) {
    return false; // Let PHP built-in server serve the static file directly
}

// 2. Blog routes: /blogs/{slug} -> exhibition-stand-design-process.php or blogs/{slug}.php
if (preg_match('#^/blogs/([^/]+)/?$#', $uri, $matches)) {
    $slug = $matches[1];
    if (file_exists(__DIR__ . '/' . $slug . '.php')) {
        include __DIR__ . '/' . $slug . '.php';
        exit();
    }
    if (file_exists(__DIR__ . '/blogs/' . $slug . '.php')) {
        include __DIR__ . '/blogs/' . $slug . '.php';
        exit();
    }
}

// 3. Blog listing: /blogs or /blogs/ -> blogs.php
if ($uri === '/blogs' || $uri === '/blogs/') {
    include __DIR__ . '/blogs.php';
    exit();
}

// 4. Project dynamic routes: /projects/{slug} -> project-details.php?slug={slug}
if (preg_match('#^/projects/([^/]+)/?$#', $uri, $matches)) {
    $_GET['slug'] = $matches[1];
    include __DIR__ . '/project-details.php';
    exit();
}

// 5. Clean extensionless pages: /about -> about.php, /projects -> projects.php, etc.
$clean = trim($uri, '/');
if (!empty($clean) && file_exists(__DIR__ . '/' . $clean . '.php')) {
    include __DIR__ . '/' . $clean . '.php';
    exit();
}

// 6. Root directory -> index.php
if ($uri === '/' || $uri === '') {
    include __DIR__ . '/index.php';
    exit();
}

// 7. Fallback: let PHP serve or 404
return false;
