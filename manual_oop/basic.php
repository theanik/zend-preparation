<?php

function lb1(){
    echo PHP_EOL;
}
function lb2(){
    echo PHP_EOL;
    echo PHP_EOL;
}


class A{
    function foo(){
        if(!isset($this)){
            return "no instance are create \n";
        }
        return get_class($this);
    }
}

$a = new A;
echo $a->foo();

//echo A::foo(); // whit out create instance we can not get the class name || this method are deprecated form php 5.
lb2();

class SimpleClass1{
    // public $var;
    function getData(){
        echo "this is data \n";
    }
}

$instance = new SimpleClass1;

$assigned = $instance; // $assigned 
var_dump($assigned === $instance); // true
$assigned->getData();
$instance->getData();

$referance = &$instance;

$instance->var1 = "this a property \n";
$referance = null;
// $referance->var1 = "this a property \n";

// $instance = null;
var_dump($instance);
var_dump($referance);
// echo $assigned->var1;
var_dump($assigned);


lb2();

$sc11 = new SimpleClass1;
$sc12 = new SimpleClass1;

var_dump($sc11 == $sc12);
var_dump($sc11 === $sc12);

lb1();

class Test{
    public $hi;
    function __construct(){
        $this->hi = "hekii";
    }
    static public function getIt(){
        return new static;
        // return "okk";
    }
}

class Child extends Test{

}

$t = new Test;
$t->getIt(); // true
// $t = $t->getIt(); // false 
lb1();
var_dump($t instanceof Test);

$c = Child::getIt();
var_dump($c instanceof Child); //ture
var_dump($c instanceof Test); //true

lb2();
echo (new DateTime())->format('Y-m-d');
lb1();
#Example #8 Calling an anonymous function stored in a property

class Foo{
    public $bar;
    function __construct(){
        $this->bar = function (){
            echo "Anonymous func \n";
        };
    }
}

$f = new foo; // class name are caseinsansitive
($f->bar)();

$func = $f->bar;
$func();