<?php

class Person
{
    /* fields/properties/attribute adalah data yang bisa kita arsipkan di dalam object
    - namun sebelum kita bisa memasukkan data fields, kita harus mendeklarasikan data apa aja yang dimiliki object tersebut di dalam deklarasi class
    - membuat field sama seperti membuat variable, namun ditempatkan di block class, namun diawali kata kunci var
    */

    const AUTHOR = "Wahyu Aprilliandhika";

    var string $nama;
    var string $address;
    var string $country;

    function __construct(string $nama, ?string $address)
    {
        $this->nama = $nama;
        $this->address = $address;
    }

    function sayHello(?string $nama)
    {
        if (is_null($nama)) {
            echo " hai, nama saya $this->nama" . PHP_EOL;
        } else {
            echo " hi $nama, my name is $this->nama" . PHP_EOL;
        }
    }

    function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }

    function __destruct()
    {
        echo "Object Person $this->nama is destroyed" . PHP_EOL;
    }
}
