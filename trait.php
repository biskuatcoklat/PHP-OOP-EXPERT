<?php
require_once "class/SayGoodBye.php";

use Data\traits\{Person, SayGoodBye, SayHello};

$person = new Person;
$person->GoodBye("anto");
$person->Hello("ika");
$person->name = "sasa";
var_dump($person);
$person->run();
