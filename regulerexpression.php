<?php
$matches = [];
$result = preg_match_all("/wahyu|april|ika", "wahyu aprilliandhika", $matches);
var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing dan bangsat");
var_dump($result);

$result = preg_split("/[\s,-]/", "wahyu aprilliandhika");
var_dump($result);
