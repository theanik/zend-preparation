<?php

class SubObject
{
    static $instances = 0;
    public $instance;

    public function __construct() {
        $this->instance = ++self::$instances;
    }

    public function __clone() {
        $this->instance = ++self::$instances;
    }
}


$s = new SubObject();
$s1 = clone $s;
$s2 = clone $s;

var_dump($s);
var_dump($s1);
var_dump($s2);