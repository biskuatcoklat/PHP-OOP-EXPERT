<?php

namespace Helper;

class MainHelper
{
    static public string $name = "mathelper";
    static public function sum(int ...$numbers): int
    {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }
}
