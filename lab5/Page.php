<?php
abstract class Page
{
    protected Renderer $renderer;

    public function __construct(Renderer $renderer)
    {
        $this->renderer = $renderer;
    }

    abstract public function render(): string;
}
