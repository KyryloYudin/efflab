<?php
require_once 'SimpleDownloader.php';
require_once 'ProxyDownloader.php';

$simpleDownloader = new SimpleDownloader();

$proxyDownloader = new ProxyDownloader($simpleDownloader);

echo $proxyDownloader->download("http://example.com/file1") . PHP_EOL;
echo $proxyDownloader->download("http://example.com/file2") . PHP_EOL;
echo $proxyDownloader->download("http://example.com/file1") . PHP_EOL; // Повторний запит (кеш)
