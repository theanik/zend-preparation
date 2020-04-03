<?php

abstract class myparent{
    public $foo;
    private $bar;
    const ANIK = "me";
    const MONA = "you";
    static $name = "anik static";

    static function staticFunc(){

    }
    function __construct($aa){

    }
    public function foo($bar="") {
        // do stuff
    }

    private function bar($foo){
        // something
    }

    abstract function myabs();
}
   
class mychild extends myparent {
    public $val;
   
    private function bar(myparent &$baz) {
    // do stuff
    }
    public function __construct($val) {
    $this->val = $val;
    }

    function myabs(){
        return "this is inherited abstruct method \n";
    }
}
$p_reflect = new ReflectionClass('myparent');
// echo $p_reflect;
$child = new mychild('hello world');
$child->foo('test');
$reflect = new ReflectionClass('mychild');
echo $reflect;