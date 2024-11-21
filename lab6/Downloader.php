<?php
interface Downloader
{
    /**
     * Завантажує файл за вказаним URL.
     * @param string $url URL файлу.
     * @return string Дані файлу.
     */
    public function download(string $url): string;
}
