<?php
require_once 'Page.php';

class SimplePage extends Page
{
    private string $title;
    private string $content;

    public function __construct(Renderer $renderer, string $title, string $content)
    {
        parent::__construct($renderer);
        $this->title = $title;
        $this->content = $content;
    }

    public function render(): string
    {
        return $this->renderer->render($this->title, $this->content);
    }
}
