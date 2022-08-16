<?php
require_once "class/students.php";

$students1 = new students();
$students1->id = "1";
$students1->name = "wahyu";
$students1->value = 1;

var_dump($students1);

$students2 = clone $students1;
