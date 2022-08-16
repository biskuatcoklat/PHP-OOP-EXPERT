<?php
class SosialMedia
{
    public string $name;
}

// final class facebook extends SosialMedia
// {
// }

class facebook extends SosialMedia
{
    final public function login(string $username, string $password): bool
    {
        return true;
    }
}

class fakefacebook extends SosialMedia
{
    public function login(string $username, string $password): bool
    {
        return false;
    }
}
