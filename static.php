<?php

require_once "Helper/MathHelper.php";

use Helper\MainHelper;

echo MainHelper::$name . PHP_EOL;

MainHelper::$name = "wahyu";
echo MainHelper::$name . PHP_EOL;

$result = MainHelper::sum(10, 10, 10, 10);
echo "result :$result" . PHP_EOL;
