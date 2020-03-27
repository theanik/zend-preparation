<?php

class Flag
{
    public $flag;

    function __construct($flag = true) {
        $this->flag = $flag;
    }
}

class OtherFlag
{
    public $flag;

    function __construct($flag = true) {
        $this->flag = $flag;
    }
}


$f = new Flag;
$f1 = new Flag;

var_dump($f == $f1);
var_dump($f === $f1);
$f = $f1;
var_dump($f == $f1);
var_dump($f === $f1);

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

$of = new OtherFlag;
var_dump($f == $of);
var_dump($f === $of);

