<?php

namespace Data;

require_once "food.php";



abstract class Animal
{
    public string $name;
    abstract public function run(): void;
    abstract public function eat(animalfood $animalfood): void;
}

class cat extends Animal
{
    public function run(): void
    {
        echo "cat $this->name is Running" . PHP_EOL;
    }
    public function cat(animalfood $animalfood): void
    {
        echo "cat is eating" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name is Running" . PHP_EOL;
    }
    public function dog(Food $animalfood): void
    {
        echo "dog is eating" . PHP_EOL;
    }
}
