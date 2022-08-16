<?php
//array menjadi objek
$array = [
    "firstname" => "wahyu",
    "lastname" => "aprilliandhika"
];

$object = (object) $array;
var_dump($object);

echo "firstname $object->firstname" . PHP_EOL;
echo "lastname $object->lastname" . PHP_EOL;
