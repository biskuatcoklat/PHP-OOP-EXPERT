<?php
require_once "class/students.php";

$students1 = new students();
$students1->id = "1";
$students1->name = "wahyu";
$students1->value = 100;

$students2 = new students();
$students2->id = "1";
$students2->name = "wahyu";
$students2->value = 100;

var_dump($students1 == $students2);
var_dump($students1 === $students2);
var_dump($students1 === $students1);
