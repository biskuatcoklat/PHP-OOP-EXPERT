<?php

require_once "class/Person.php";

$person = new Person("wahyu", "jakarta");
$person->nama = "wahyu";
$person->address = "Jakarta";
$person->country = "indonesia";
var_dump($person);

echo "Nama   : $person->nama" .PHP_EOL;
echo "Alamat : $person->address" .PHP_EOL;
echo "Negara : $person->country" .PHP_EOL;

$person2 = new Person("zaki", "medan");
$person2->nama   = "zaki";
$person2->address = "Medan";
$person2->country = "indonesia";
var_dump($person2);