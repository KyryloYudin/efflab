<?php
interface Renderer
{
    public function render(string $title, string $content): string;
}
