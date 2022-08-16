<?php
require_once "class/konflik.php";
require_once "class/tolong.php";

use Data\one\Mobil as mobil1;
use Data\two\motor as motor1;
use function helpme\woi as help;
use const helpme\APPLICATION as APP;

$konflik1 = new mobil1();
$konflik2 = new motor1();

help();

echo APP . PHP_EOL;
