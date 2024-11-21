<?php
require_once 'Renderer.php';
require_once 'HTMLRenderer.php';
require_once 'JsonRenderer.php';
require_once 'XmlRenderer.php';
require_once 'Page.php';
require_once 'SimplePage.php';
require_once 'ProductPage.php';

$htmlRenderer = new HTMLRenderer();
$simplePage = new SimplePage($htmlRenderer, "Welcome", "This is the home page.");
echo $simplePage->render();
echo "\n\n";

$jsonRenderer = new JsonRenderer();
$product = new Product("1", "Laptop", "A high-end gaming laptop.", "/images/laptop.jpg");
$productPage = new ProductPage($jsonRenderer, $product);
echo $productPage->render();
echo "\n\n";

$xmlRenderer = new XmlRenderer();
$productPageWithXml = new ProductPage($xmlRenderer, $product);
echo $productPageWithXml->render();
