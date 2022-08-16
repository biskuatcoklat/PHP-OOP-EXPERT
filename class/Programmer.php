<?php
class Programmer
{
    public string $nama;
    public function __construct(string $nama)
    {
        $this->nama = $nama;
    }
}

class Backend extends Programmer
{
}
class Frontend extends Programmer
{
}

class Company
{
    public Programmer $programmer;
}

function sayHelloSE(Programmer $programmer)
{
    if ($programmer instanceof Backend) {
        echo "halo Programmer Backend $programmer->nama" . PHP_EOL;
    } elseif ($programmer instanceof Frontend) {
        echo "halo Front End $programmer->nama" . PHP_EOL;
    } elseif ($programmer instanceof Programmer) {
        echo "halo Software Engineer $programmer->nama" . PHP_EOL;
    }
}
