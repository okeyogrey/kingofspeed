<?php

$publicPath = getcwd();

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? ''
);

// Log request details
$formattedDateTime = date('D M j H:i:s Y');
$requestMethod = $_SERVER['REQUEST_METHOD'];
$remoteAddress = $_SERVER['REMOTE_ADDR'].':'.$_SERVER['REMOTE_PORT'];
$logMessage = "[$formattedDateTime] $remoteAddress [$requestMethod] URI: $uri\n";

// Append log to storage/logs/laravel.log for better debugging
file_put_contents(__DIR__ . '/storage/logs/laravel.log', $logMessage, FILE_APPEND);

// Emulate Apache mod_rewrite behavior
if ($uri !== '/' && file_exists($publicPath . $uri)) {
    return false;
}

// Ensure Laravel public index.php is loaded correctly
require_once $publicPath . '/index.php';

