<?php
$uri = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
$pathInfo = $_SERVER['PATH_INFO'] ?? '';

$slug = trim($pathInfo, '/');
if (empty($slug) && preg_match('#^/blogs/([^/]+)/?$#i', $uri, $m)) {
    $slug = $m[1];
}

chdir(__DIR__ . '/..');

if (!empty($slug) && $slug !== 'index' && $slug !== 'index.php') {
    if (file_exists(__DIR__ . '/../' . $slug . '.php')) {
        include(__DIR__ . '/../' . $slug . '.php');
        exit();
    }
    if (file_exists(__DIR__ . '/' . $slug . '.php')) {
        include(__DIR__ . '/' . $slug . '.php');
        exit();
    }
}

include('blogs.php');
