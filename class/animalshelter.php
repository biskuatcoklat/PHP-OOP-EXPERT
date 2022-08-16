<?php

namespace Data;

require_once "Animal.php";

interface AnimalShelter
{
    function adopt(string $name): animal;
}
class catshellter implements AnimalShelter
{
    public function adopt(string $name): cat
    {
        $cat = new cat;
        $cat->name = $name;
        return $cat;
    }
}
class dogshellter implements AnimalShelter
{
    public function adopt(string $name): dog
    {
        $dog = new dog;
        $dog->name = $name;
        return $dog;
    }
}
