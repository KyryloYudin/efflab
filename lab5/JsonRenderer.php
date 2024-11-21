<?php
require_once 'Renderer.php';

class JsonRenderer implements Renderer
{
    public function render(string $title, string $content): string
    {
        return json_encode(['title' => $title, 'content' => $content]);
    }
}
