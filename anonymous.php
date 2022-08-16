<?php
interface HelloWorld
{
    function sayHello(): void;
}

$helloworld = new class("wahyu") implements HelloWorld
{
    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function sayHello(): void
    {
        echo "hello $this->name" . PHP_EOL;
    }
};
$helloworld->sayHello();
