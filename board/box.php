<?php

require_once("lb.php");

// class my_class{
//     var $foo = array();
//     function my_class($val){
//         $this->foo[] = $val;
//     }

//     function store($val){
//         print_r($this->foo);
//         $this->foo = $val;
//     }
// }

// $m = new my_class("mona");
// $m->foo[] = "anik";
// $m->store("kotha");
// // $m->my_class("d");
// echo gettype($m->foo);
// print_r($m->foo);


//  $global_obj = null;
// class my_class
// {
//     var $value;
//     function my_class()
//     {
//         global $global_obj;
//         $global_obj = &$this;
//     }
// }

// $a = new my_class;
// $a->my_value = 5;

// $global_obj->my_value = 10;
// echo $a->my_value; 

function gcd($a, $b) {
    return ($b > 0) ? gcd($b, $a % $b) : $a;
} 

function reduce_fraction($a,$b) {
    $gcd = gcd($a,$b);

    $a /= $gcd; /// $a = $a / $gcd
    $b /= $gcd;
    
    $p = <<<EOT
   
    A    {$a}
    - =  -
    B    {$b}

EOT;

echo $p;
} 

reduce_fraction(25,55);

// $a = 12;
// $a /= 2;
// echo $a;
$a = 55;
$b = 25;
echo $a%$b;

function lcm($a,$b){
    return ($a*$b) / gcd($a,$b);
}

echo lcm(4,8);

// function modifyArray (&$array) 
// {
//     foreach ($array as &$value)
//     {
//         echo "Entry : " .$value . PHP_EOL; // 1,2,3
        
//          $value = $value + 2; //1+2 = 3, 2+2=4,3+2 =5
         
//         echo "After sum : " . $value . PHP_EOL; //3,4,5
//     } 
//     //$value = $value + 3; 
//  } 
// $array = array (1, 2, 3); 
// modifyArray($array); 
// print_r($array);

$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
    echo $value . PHP_EOL;
}
// $value = $value + 3;
$value = 22;
// $arr is now array(2, 4, 6, 8)
print_r($arr);
print($value);

echo PHP_EOL;
echo PHP_EOL;

class A {
    public static function foo() {
    echo static::who();
    }
    public static function who() {
    return 'A';
    }
   }
   class B extends A {
    public static function test() {
    A::foo();
    parent::foo();
    self::foo();
    }
   }
   class C extends B {
    public static function who() {
    echo 'C';
    }
   }
   C::test();


   class SleepyHead {
    protected $name = "Dozy";
    public function __sleep() {
    $this->name = "Asleep";
    }
    public function __wakeup() {
    $this->name = "Rested";
    }
   }
   $obj = unserialize(serialize(new SleepyHead()));

   var_dump($obj);




   interface foo{
    function d();
}

interface bar{
    function d();
}

abstract class FooBar{
    function do(){
        return strrev(9);
    }
}

class w extends FooBar implements foo,bar{
    function d(){

    }
    function __destruct(){
        var_dump($this->do());
    }
}

new w;



class CkClass
{

}

$ck = new CkClass;
var_dump(is_object($ck));
if(is_a($ck, 'CkClass')){
    echo '$ck is instance of CkClass' .PHP_EOL;
}

$a = false;

echo is_bool($a) ? "true" : "false";

echo "\n";
echo "\n";
echo "\n";
class Hay
{

}


$h = new Hay;
var_dump(!($h instanceof stdClass));
a(2);
echo "------------------------------\n";
a();

class Test
{
    function __call($func,$arg){
        $tmp = "{$func} called!! \n";
        $tmp .= print_r($arg,true);

        return $tmp;
    }
}

$t = new Test;
print $t->array("anik","mona","rumahan");

a();

class boy {
    public function __toString() {
    return "This is a boy\n";
   }
}
$toby = new boy;
print $toby;

a();


class X {
    static $word = "hello";
    static function hello() {print static::$word;}
}
class Y extends X {
    static $word = "bye";

    static function hello(){
        print static::$word;
    }
}
Y::hello();
a(2);

class P {};
class B1 extends P {};
class_alias('P', 'B2');
$b2 = new B2; echo get_class($b2); // P


echo "\n";
echo "\n";

class Object1 {
    function __construct( $entity ) {
        // print_r($entity);
        $entity->name="John";
    }
 }
 class Entity1 {
      public $name = "Maria";
      public $name2 = "Mia";
 }
 $entity = new Entity1();
 $obj = new Object1( $entity );
 print $entity->name;
 print $entity->name2;

 class SleepyHead1 {
    public $name = "Dozy";
    public $data = array('anik','mona','antu');
    public $arr = [];
        public function __sleep() {
        
        // $this->name = "Asleep";
        return array("data");
    }
        public function __wakeup() {
        $this->name = "Rested";
    }
}
$obj = unserialize(serialize(new SleepyHead1()));
print_r($obj->name);

$star = new StdClass;
// replace this line
$twin = clone($star);
$star->name = "Castor";
$twin->name = "Pollux";
echo $star->name; // must be Castor
echo $twin->name; // must be Castor
echo $star->name; // must be Castor