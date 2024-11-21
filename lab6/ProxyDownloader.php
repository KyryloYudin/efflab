<?php
require_once 'Downloader.php';

class ProxyDownloader implements Downloader
{
    private Downloader $downloader;
    private array $cache = [];

    public function __construct(Downloader $downloader)
    {
        $this->downloader = $downloader;
    }

    public function download(string $url): string
    {
        if (isset($this->cache[$url])) {
            echo "Returning cached data for: $url\n";
            return $this->cache[$url];
        }

        echo "Cache miss for: $url. Forwarding request to the real downloader.\n";
        $data = $this->downloader->download($url);
        $this->cache[$url] = $data;
        return $data;
    }
}
