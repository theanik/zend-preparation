<?php

class myClass{
    public $name = "ANik";

    public function getName() {
        echo $this->name;
    }
}

$obj = new myClass;
$obj->getName();