<?php

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? ''
);

$publicPath = __DIR__ . '/public';

if ($uri !== '/' && is_file($publicPath . $uri)) {
    $ext = strtolower(pathinfo($uri, PATHINFO_EXTENSION));
    $mimes = [
        'jpg'   => 'image/jpeg',  'jpeg' => 'image/jpeg',
        'png'   => 'image/png',   'gif'  => 'image/gif',
        'svg'   => 'image/svg+xml', 'ico' => 'image/x-icon',
        'webp'  => 'image/webp',
        'css'   => 'text/css',
        'js'    => 'application/javascript',
        'woff'  => 'font/woff',   'woff2' => 'font/woff2',
        'ttf'   => 'font/ttf',    'otf'   => 'font/otf',
        'mp4'   => 'video/mp4',   'webm'  => 'video/webm',
        'pdf'   => 'application/pdf',
        'json'  => 'application/json',
    ];
    if (isset($mimes[$ext])) {
        header('Content-Type: ' . $mimes[$ext]);
    }
    header('Content-Length: ' . filesize($publicPath . $uri));
    readfile($publicPath . $uri);
    return;
}

require_once $publicPath . '/index.php';
