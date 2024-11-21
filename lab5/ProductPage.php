<?php
require_once 'Page.php';

class Product
{
    public string $id;
    public string $name;
    public string $description;
    public string $image;

    public function __construct(string $id, string $name, string $description, string $image)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
    }
}

class ProductPage extends Page
{
    private Product $product;

    public function __construct(Renderer $renderer, Product $product)
    {
        parent::__construct($renderer);
        $this->product = $product;
    }

    public function render(): string
    {
        $content = "Name: {$this->product->name}\n"
                 . "Description: {$this->product->description}\n"
                 . "Image: {$this->product->image}\n"
                 . "ID: {$this->product->id}";
        return $this->renderer->render("Product: {$this->product->name}", $content);
    }
}
