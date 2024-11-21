<?php
require_once 'Renderer.php';

class XmlRenderer implements Renderer
{
    public function render(string $title, string $content): string
    {
        return "<page><title>$title</title><content>$content</content></page>";
    }
}
