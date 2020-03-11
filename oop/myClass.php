<?php

class MyClass{
    public $name = "ANik";

    public function getName() {
        echo $this->name;
    }
}

$obj = new MyClass;
$obj->getName();