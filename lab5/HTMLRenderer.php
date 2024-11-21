<?php
require_once 'Renderer.php';

class HTMLRenderer implements Renderer
{
    public function render(string $title, string $content): string
    {
        return "<html><head><title>$title</title></head><body>$content</body></html>";
    }
}
