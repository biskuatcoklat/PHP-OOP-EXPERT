<?php
require_once "class/Category.php";

$category = new Category();
$category->setName("HP");
$category->setExpensive("bool");
$category->setName("     ");

echo "Nama: {$category->getName()}" . PHP_EOL;
echo "Expensive: {$category->isExpensive()}" . PHP_EOL;
