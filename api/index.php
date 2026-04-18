<?php

require __DIR__ . '/../vendor/autoload.php';

// Vercel fix: writable storage in /tmp
$storagePath = '/tmp/storage';
$dirs = [
    $storagePath . '/framework/views',
    $storagePath . '/framework/cache',
    $storagePath . '/framework/sessions',
    $storagePath . '/logs',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

/** @var \Illuminate\Foundation\Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Force storage path to /tmp
$app->useStoragePath($storagePath);

$app->handleRequest(\Illuminate\Http\Request::capture());
