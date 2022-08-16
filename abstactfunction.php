<?php 
require_once "class/Animal.php";
use Data\{Animal, cat, Dog};

$cat = new cat();
$cat->name = "boy";
$cat->run();

$dog = new Dog();
$dog->name="ajo";
$dog->run();
