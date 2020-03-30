<?php

// $data = file_get_contents('store.txt');
// echo $data;
// $obj = unserialize($data);

// print_r($obj);

$stored = file_get_contents('store.txt');
$a = unserialize($stored, ['allowed_classes' => [A::class]]);
$b = unserialize($stored, ['allowed_classes' => [B::class]]);

var_dump($a);
var_dump($b);