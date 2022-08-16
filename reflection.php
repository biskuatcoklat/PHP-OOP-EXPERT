<?php
require_once "exeception/validationexeception.php";
require_once "class/loginrequest.php";
require_once "Helper/validationutil.php";

$request = new loginrequest();
//validationutil::validate($request);

validationutil::validatereflection(($request));

class registeruserrequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new registeruserrequest();
$register->name = "wahyu";
$register->address = "medan";
$register->email = "wahyu@gmail.com";

validationutil::validatereflection($register);
