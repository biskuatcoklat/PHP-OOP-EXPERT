<?php

namespace Data;

interface Car extends HasBrand
{
    function getDrive(): void;
    function getTire(): int;
}
interface HasBrand
{
    function getBrand(): string;
}
interface isMaintanence
{
    function isMaintanence(): bool;
}

class Avanza implements Car, isMaintanence
{
    public function getDrive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }
    public function getBrand(): string
    {
        return "toyota" . PHP_EOL;
    }
    public function isMaintanence(): bool
    {
        return false;
    }
}
