<?php
require_once "class/Programmer.php";

$company = new Company();
$company->Programmer = new Programmer("wahyu");

$company->programmer = new Backend("wahyu");

$company->programmer = new Frontend("zaki");

sayHelloSE(new Programmer("wahyu"));
sayHelloSE(new Backend("wahyu"));
sayHelloSE(new Frontend("zaki"));
