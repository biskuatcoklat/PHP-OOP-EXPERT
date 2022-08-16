<?php

$date = new DateTime();
$date->setDate(2022, 8, 12);
$date->setTime(12, 40, 34, 0);
//cara menambah tahun
$date->add(new DateInterval("P1Y"));

//cara mengurangi bulan
$minusbulan = new DateInterval("P1M");
$minusbulan->invert = true;
$date->add($minusbulan);
var_dump($date);

//mengubah zona waktu
$saiki = new DateTime();
$saiki->setTimeZone(new DateTimeZone("asia/tokyo"));
var_dump($saiki);

//format date time
$string = $saiki->format("Y-m-d H:i:s");
echo "waktu saat ini $string" . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2022-08-12 10:10:10", new DateTimeZone("asia/jakarta"));
if ($date) {
    var_dump($date);
} else {
    echo "format salah";
}
