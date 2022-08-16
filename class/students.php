<?php
class students
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    public function __clone()
    {
        unset($this->sample);
    }

    public function __toString()
    {
        return "students id: $this->id, name: $this->name, Value: $this->value";
    }

    public function __invoke(...$arguments): void
    {
        $join = join(",", $arguments);
        echo "Invoke students with arguments $join" . PHP_EOL;
    }

    public function __debugInfo()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "wahyu",
            "version" => "1.0.0"
        ];
    }
}
