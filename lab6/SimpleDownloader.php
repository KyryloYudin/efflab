<?php
require_once 'Downloader.php';

class SimpleDownloader implements Downloader
{
    public function download(string $url): string
    {
        echo "Downloading file from: $url\n";
        return "Data from $url";
    }
}
