<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';

// Override cache paths to /tmp so Laravel doesn't use the frozen build-time absolute paths!
$_ENV['APP_SERVICES_CACHE'] = '/tmp/storage/bootstrap/cache/services.php';
$_ENV['APP_PACKAGES_CACHE'] = '/tmp/storage/bootstrap/cache/packages.php';
$_ENV['APP_CONFIG_CACHE'] = '/tmp/storage/bootstrap/cache/config.php';
$_ENV['APP_ROUTES_CACHE'] = '/tmp/storage/bootstrap/cache/routes-v7.php';
$_ENV['APP_EVENTS_CACHE'] = '/tmp/storage/bootstrap/cache/events.php';

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
    "$storagePath/bootstrap/cache",
];

foreach ($directories as $directory) {
    if (!is_dir($directory)) {
        mkdir($directory, 0755, true);
    }
}

$app->handleRequest(Request::capture());
