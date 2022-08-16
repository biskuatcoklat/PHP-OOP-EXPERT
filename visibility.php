<?php
require_once "class/product.php";

$product = new product("Apple", 200000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new productdummy("dummy", 2000);
$dummy->info();
