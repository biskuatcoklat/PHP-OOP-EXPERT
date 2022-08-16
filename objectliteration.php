<?php

class Data implements IteratorAggregate
{
    var string $first = "first";
    public string $second = "second";
    private string $third = "third";
    protected string $fourth = "fourth";

    public function getIterator(): Traversable
    {
        $array = [
            "first" => "$this->first",
            "second" => "$this->second",
            "third" => "$this->third",
            "fourth" => "$this->fourth"

        ];
        return new ArrayIterator($array);
    }
}

$data = new Data();

foreach ($data as $properties => $value) {
    echo "$properties : $value" . PHP_EOL;
}
