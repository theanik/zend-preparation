<?php

$a = 2;
$b = 9;
$b = &$a;
var_dump($a + $b);


$foo = "data";

// unset($foo);

print($foo);

$a = "aa";
$aa = "bb";
$bb = "CC";

echo $$aa;


