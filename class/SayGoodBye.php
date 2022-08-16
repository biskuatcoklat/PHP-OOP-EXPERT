<?php

namespace Data\traits;

trait SayGoodBye
{
    public function GoodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "good bye" . PHP_EOL;
        } else {
            echo "good bye $name" . PHP_EOL;
        }
    }
}
trait SayHello
{
    public function Hello(?string $name): void
    {
        if (is_null($name)) {
            echo "hello" . PHP_EOL;
        } else {
            echo "hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}
trait CanRun
{
    public abstract function run(): void;
}

trait all
{
    use SayGoodBye, SayHello, HasName, CanRun;
}

class ParentPerson
{
    public function GoodBye(?string $name): void
    {
        echo "good bye in person" . PHP_EOL;
    }
    public function Hello(?string $name): void
    {
        echo "Hello in Person" . PHP_EOL;
    }
}

class Person extends ParentPerson
{
    use all;
    public function run(): void
    {
        echo " person $this->name is running" . PHP_EOL;
    }
}
