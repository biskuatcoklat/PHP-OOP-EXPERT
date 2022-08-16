<?php

use Data\catshellter;
use Data\dogshellter;

require_once "class/food.php";
require_once "class/Animal.php";
require_once "class/animalshelter.php";

$catshelter = new catshellter();
$cat = $catshelter->adopt("anto");
$cat->eat(new \Data\animalfood());

$dogshelter = new dogshellter();
$dog = $dogshelter->adopt("doggy");
$dog->eat(new \Data\Food());
