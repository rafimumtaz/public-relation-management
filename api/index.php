<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

// Configure for Vercel's read-only filesystem
$storagePath = $_ENV['APP_STORAGE'] ?? '/tmp/storage';
$app->useStoragePath($storagePath);

// Ensure necessary storage directories exist in /tmp
$directories = [
    "$storagePath/app",
    "$storagePath/framework/cache",
    "$storagePath/framework/sessions",
    "$storagePath/framework/views",
    "$storagePath/logs",
];

foreach ($directories as $directory) {
    if (!is_dir($directory)) {
        mkdir($directory, 0755, true);
    }
}

$app->handleRequest(Request::capture());
