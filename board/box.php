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



interface Interface1{
    public function getFoo();
    public function setFoo($value);
}
interface Interface2{
    public function getFoo();
    public function setBar($v);
}
class Baz implements Interface1,Interface2 {
    public function getFoo(){
        return 'foo';
    }
    public function setFoo($value){
        $this->foo = $value;
    }
    public function setBar($value){
        $this->bar = $value;
    }
}

$baz = new Baz();
$baz->getFoo();




a(4);
abstract class astc{
    abstract static function myabsss();
}
class stc extends astc
{
    public $name="anik";
    static $age=20;

    private static function getDataStatic(){
        // echo self::$name."\n"; // static mathod can't access not static proterties
        echo self::$age."\n";
    }

    function getData(){
        self::getDataStatic();
    }

    static function myabsss(){
        echo __CLASS__."\n";
    }
}

stc::myabsss();
(new stc)->getData();



/**
 * Typehinted parameters can default to NULL
 * A typehint class does not have to be defined when a function definition is parsed
 * 
 */

function cktypeHint(XXX $a,$b=null){

}

echo "\n";
echo "\n";
echo "\n";

class Magic {
    public $a = "A";
    protected $b = ['a'=>'A','b'=>'B','c'=>'C'];
    protected $c = array(1,2,3);

    public function __get($v) {
        echo "$v,";
        return $this->b[$v];
    }

    // public function __set($var, $val){
    //     echo "$var: $val,";
    //     $this->$var = $val;
    // }
}
$m = new Magic();
echo $m->a."\n";
echo $m->b."\n";
echo $m->c."\n";
// echo $m->s."\n";
echo "\n";
echo $m->a.",".$m->b.",".$m->c.",";
// $m->c = "CC";
// echo $m->a.",".$m->b.",".$m->c;

echo "\n";
echo "\n";

// $a = 'a';
// $A = 'A';
// $b = 'b';
// $B = 'B';
// $c = 'c';
// $C = 'C';

// echo $A.",".$a.",".$B.",".$b.",".$C.",".$c.",";


class m2{
    public $a = "A";

    function __get($var){
        return "not set";
    }
}

$m2 = new m2;
echo $m2->a."\n";
echo $m2->b."\n";


echo "\n";
echo "\n";


function mysum(){
    return 10;
}

//  class mynclass{
//     public $mysum;
//     function __construct(){
//         $this->mysum = mysum();
//     }
//  }

//  echo (new mynclass)->mysum();

echo "\n";
echo "\n";
echo "\n";

 class myClassCk{

 }


 $obj1 = new myClassCk;
 $obj2 = new myClassCk;


 var_dump($obj1 == $obj2);
 var_dump($obj1 === $obj2); //কারণ দুইটা অবজেক্ট এর মেমরি এড্রেস ভিন্ন

 /**
  * কারণ দুইটা অবজেক্ট এর মেমরি এড্রেস ভিন্ন
  *  অবজেক্ট পাস্ বাই রেফারেন্স। 
  */



  class Ax
  {
   public $name = '0'; // same null == false == 0 == '0'
   private $surname = '0';
   public function __isset($property)
   {
   return true;
   }
  }
  $a = new Ax;
  $empty = empty($a->name);
  $set = isset($a->surname);
  var_dump($a->name);
//   var_dump($a->surname);
  var_dump($empty);
  var_dump($set);
  if ($empty === $set) {
   echo "Yes";
  } else {
   echo "No";
  }


$x = '0';
var_dump(empty($x));


/**
 * i am able to instance a class before it declaraction
 */


 $foo = new DownClass;
  echo $foo->name;

  class downclass{
      public $name = "anik \n";
      private $name2 = "anik \n";

      private function getName(){
          return $this->name;
      }
  }

  $ref = new ReflectionClass('DownClass');
 
  print_r($ref->getMethods());
  print_r($ref->getProperties());


  class SetMissing {
    public function __set($name, $value) {
    $this->$name = filter_var($value, FILTER_SANITIZE_STRING);
    }
   }
   $obj = new SetMissing();
   $obj->example = "<strong>hello</strong>";
   echo $obj->example . PHP_EOL; // hello
   //এখন তো example ভ্যারিয়েবল টা সেট হই গেছে।
   //পরেরবার তাই আর __set ফাঙ্কশন টায় যাবে না।
   //এবার example টা override করবে  
   $obj->example = "<strong>hello</strong>"; //<strong>hello</strong>
   echo $obj->example;



   echo "\n";
   echo "\n";


   trait Dog {
    public function makeNoise() {
        echo "Woof";
    }
     public function wantWalkies() {
        echo "Yes please!";
    }
}
trait Cat {
    public function makeNoise() {
        echo "Purr";
     }
    public function wantWalkies() {
        echo "No thanks!";
    }
}
class DomesticPet
{
    use Dog, Cat {
        Cat::makeNoise insteadof Dog;
        Cat::wantWalkies as kittyWalk;
        Dog::wantWalkies insteadof Cat;
    }
}
$obj = new DomesticPet();
$obj->kittyWalk();
$obj->makeNoise();
$obj->wantWalkies();




echo "\n";
echo "\n";

/**
 * একটি ইন্টারফেস থেকে ইমপ্লিমেন্ট করা মেথডকে আমি কখনো private বা proctected করতে পারবো না।
 *  এগুলো সবসময় public 
 *  * ইন্টারফেস এ শুধু মাত্র public মেথড থাকতে পারে। 
 */
interface myinter{
    public function my1();
    public function my2();
}


class myinter1 implements myinter{
    function my1(){}
    // private function my2(){}
    function my2(){}
}

new myinter1;




function HelloWorld() {
    echo HELLO;
}
//const HELLO = "Hello World!"; // work as fine
// HelloWorld(); 
//const HELLO = "Hello World!"; // error



/**
 * Class constants can not omit initialization !(not default to NULL)
 */

 class ckcl{
    //  const NAME; //error
    const NAME = "ANIK";
 }

 new ckcl;



 class aaa
{
    public $val;
}

function renderVal (aaa $a)
{
    if ($a) {
        echo $a->val;
    }
}
$aaa = new aaa;
// renderVal (null);


interface myinter2{
    public function my3();
    public function my2();
}

interface myinter3 extends myinter,myinter2{

}


class u implements myinter3{
    public function my3(){}
    public function my2(){}
    public function my1(){}
    
}



class M {
    public function identify() {
       echo self::myName(); // Mike
    //    echo static::myName(); // November
    }
    public function myName() {
       return "Mike";
    }
 }
 class N extends M {
    public function myName() {
       return "November";
    }
 }
 function m(N $n) {
    $n->identify();
 }
 $m = new N();
 m($m);