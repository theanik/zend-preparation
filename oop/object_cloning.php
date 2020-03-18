<?php

//compairing object

class Person{
    public $name;
    function __construct($name){
        $this->name = $name;
    }
}

$p = new Person("Anik");
$p1 = new Person("Anik");

var_dump($p == $p1);
var_dump($p === $p1);

$p = $p1;

var_dump($p === $p1);
