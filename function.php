<?php
require_once "class/Person.php";

$wahyu = new Person();
$wahyu->nama = "wahyu";
$wahyu->sayHello("april");

$zaki = new Person();
$zaki->nama = "sakti";
$zaki->sayHello(null);

$zaki->info();
$wahyu->info();

/*This keyword
- saat kita membuat kode di dalam function di dalam class, kita bisa menggunakan kata kunci this
  untuk mengakses object saat ini
- misal kadang kita butuh mengakses properties atau function lain di class yang sama
*/