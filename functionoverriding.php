<?php 
require_once "class/Manager.php";

$manager = new Manager();
$manager->nama="wahyu";
$manager->sayHello("zaki");

$vp= new VicePresident();
$vp->nama="sakti";
$vp->sayHello("riski");
