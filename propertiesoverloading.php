<?php
class zero
{
    private array $properties = [];
    public function __get($name)
    {
        return $this->properties[$name];
    }
    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }
    public function __isset($name)
    {
        return isset($this->properties[$name]);
    }
    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "call static function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "call static function $name with arguments $join" . PHP_EOL;
    }
}

$zero = new zero;
$zero->firstname = "wahyu";
$zero->lastname = "aprilliandhika";

echo "first name : $zero->firstname" . PHP_EOL;
echo "last name : $zero->lastname" . PHP_EOL;

$zero->sayhello("wahyu", "aprilliandhika");
$zero::sayhello("zaki", "sakti");
