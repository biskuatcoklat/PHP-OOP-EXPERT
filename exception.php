<?php
// require_once "exeception/validationexeception.php";
require_once "Helper/validation.php";
require_once "class/loginrequest.php";

$loginrequest = new LoginRequest();
$loginrequest->username = "wahyu";
$loginrequest->password = "wahyu";

// validateloginrequest($loginrequest);

try {
    validateloginrequest($loginrequest);
    echo "valid" . PHP_EOL;
} catch (validationexeception | Exception $exception) {
    echo "validation error: {$exception->getmessage()}" . PHP_EOL;
    var_dump($exception->getTrace());
} finally {
    echo "error atau nggk akan dieksekusi";
}
echo "valid" . PHP_EOL;
