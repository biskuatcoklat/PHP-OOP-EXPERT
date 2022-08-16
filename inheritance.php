<!-- <?php
        require_once "class/Manager.php";

        $manager = new Manager;
        $manager->nama = "wahyu";
        $manager->sayHello("zaki");

        $vp = new VicePresident();
        $vp->nama = "sakti";
        $vp->sayHello("zaki");
        ?> -->
<?php

class demo
{
    public function modif()
    {
        echo "ini adalah cara menggunakan";
    }
}

class demo1 extends demo
{
    public function edit()
    {
        echo " inheritance di PHP";
    }
}

$object = new demo1();
$object->modif();
$object->edit();

?>