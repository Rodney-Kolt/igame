<?php

// Handle Vercel PHP routing
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$filePath = __DIR__ . '/public' . $path;

if (file_exists($filePath) && is_file($filePath)) {
    return false; // Let Vercel handle static files
}

// Route everything else to Laravel
require __DIR__ . '/../public/index.php';
