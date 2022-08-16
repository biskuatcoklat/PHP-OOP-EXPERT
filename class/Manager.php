<?php
class Manager
{
    var string $nama;
    var string $title;
    public function __construct(string $nama = "", string $title = "manager")
    {
        $this->nama = $nama;
        $this->title = $title;
    }

    function sayHello(string $nama)
    {
        echo "Hi $nama, saya adalah manager $this->nama " . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    var string $nama;



    function sayHello(string $nama): void
    {
        echo "hi $nama, my name is VicePresident $this->nama" . PHP_EOL;
    }
}
