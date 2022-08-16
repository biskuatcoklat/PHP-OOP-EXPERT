<?php
require_once "class/students.php";

$students3 = new students();
$students3->id = "1";
$students3->name = "wahyu";
$students3->value = 100;
$students3->setSample("SAMPLE");

var_dump($students3);
