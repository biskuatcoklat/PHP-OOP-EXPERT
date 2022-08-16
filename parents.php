<?php
require_once "class/shape.php";

use Data\{Shape, rectangel};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$rectangel = new rectangel();
echo $rectangel->getCorner() . PHP_EOL;
echo $rectangel->getParentCorner() . PHP_EOL;
