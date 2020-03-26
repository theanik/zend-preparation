<?php

//use php closer

// function c($x){
//     return function ($y) use ($x){
//         return str_repeat($y,$x);
//     };
// }


// $a = c(2);
// $b = c(3);

// echo $a(3).$b(2); //33222

// class Foo Implements ArrayAccess {
//     function offsetExists($k) { return true;}
//     function offsetGet($k) {return 'a';}
//     function offsetSet($k, $v) {}
//     function offsetUnset($k) {return true;}
// }
// $x = new Foo();
// echo array_key_exists('foo', $x)?'true':'false';


// $array = array ('1', '1');
// foreach ($array as $k => $v) {
//     $v = 2;
// } 

// print_r($array);

// $array = array ('a1', 'a3', 'a5', 'a10', 'a20');

/**
 * The ArrayAccess interface to provide accessing object as Array
 */


//  class HiWorld implements ArrayAccess {
//     function offsetExists($x){
//         return true;
//     }

//     function offsetGet(){

//     }

//     function offsetSet(){
        
//     }
//     function offsetUnset(){
        
//     }
//  }

//  $hi = new HiWorld();

// // asort ($array);
// // print_r ($array); 

// // $_1 = [ true => 'b',1 => 'c'];

// // var_dump($_1);
// $array = array (1, 2, 3, 5, 8, 13, 21, 34, 55);
// $sum = 0;
// for ($i = 0; $i < 5; $i++) {
// echo $array[$array[$i]].PHP_EOL;
// }
// // echo $sum; 

class demoSleepWakeup {
    public $resourceM;
    public $arrayM;

    public function __construct() {
        $this->resourceM = fopen("demo.txt", "w");
        $this->arrayM = array(1, 2, 3, 4); // Enter code here
    }

    public function __sleep() {
        return array('arrayM');
    }

    public function __wakeup() {
        $this->resourceM = fopen("demo.txt", "w");
    }
}

$obj = new demoSleepWakeup();
$serializedStr = serialize($obj);
var_dump($obj);
var_dump($serializedStr);
var_dump(unserialize($serializedStr));


class A {
    static $word = "hello";
    static function hello() {print static::$word;}
   }
   class B extends A {
    static $word = "bye";
   }
   B::hello();