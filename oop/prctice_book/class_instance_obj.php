<?php

$a = new stdClass();
$a->property = "Hello World";
// object assignment is by reference
$b = $a;
$b->property = "Assigned by reference";
// $a has also changed because $b is a pointer to $a
var_dump($a);
/*
object(stdClass)#1 (1) {
 ["property"]=>
 string(21) "Assigned by reference"
}
*/


/**
 * Properties
 */


 class Test{
     // valid
     public static $var1 = 2 > 4 ? "Hi" : "Hello";
     public $var2 = array();
     public $var3 = array();
     public $var4 = array();
     static $element = "World";

     //invalid

    //  public $var3 = time();

    public static function sayHello(){
        echo "Hello ".self::$element."!!" . PHP_EOL;
    }

    function doSomething(){
        self::sayHello();
    }

 }

//  echo (new Test)->var1;
//  echo Test::$var1;

Test::sayHello();
$t = new Test;
$t->sayHello();
$t->sayHello();

$td = $t;
$ts = clone $t;


var_dump($t == $td);
var_dump($t === $td);
var_dump($t == $ts);
var_dump($t === $ts);


// $str = serialize($t);
// var_dump(file_put_contents('store.txt',$str));


class A{
    public $data = "some data";
    // public function __sleep(){
    //     echo "Good night \n";
    // }

    public function __wakeup(){
        echo "Good morning \n";
    }

    public function pd(){
        echo "{$this->data} \n";
    }
}


class B{

}

$a = new A;

$store = serialize($a);
unset($a);
file_put_contents('store.txt',$store);


echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

class ParentClass{
    static function sayHello(){
        echo __CLASS__;
    }
}

class ChildClass extends ParentClass{
    
}

$c = new ChildClass;
$c->sayHello();


echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

final class Employee
{
    final public function calculateWage(float $hourlyRate, int $numHoursWorked)
    {
        return $hourlyRate * $numHoursWorked;
    }
}

// can't extents final class
// class Office extends Employee{
    // can't override final method
//     public function calculateWage(){

//     }
// }



$emp = new Employee;
echo $emp->calculateWage(100.5,2);

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

/**
 * Overrinding
 */


// class Employee1
// {
//  public function calculateWage(float $hourlyRate, int $numHoursWorked)
//     {
//         return $hourlyRate * $numHoursWorked;
//     }
// }
// class Oops extends Employee1 {
//     // public function calculateWage(int $test) 
//     // {
//     //     return $test;
//     // }
// }


// $oop = new Oops;
// echo $oop->calculateWage("10").PHP_EOL;

// echo $oop->calculateWage(100.5,3).PHP_EOL; // here we can not get the parenet class method -- this override :(



class AA{
    function a(){
        echo "AA \n";
    }
}

class BB extends AA{
    function a(){
        parent::a();
    }
}


$b = new BB;
$b->a();






abstract class MyAbs{
    function __construct(){
        echo "construct by child \n";
    }
}

class mychild extends MyAbs{
    function __construct()
    {
        parent::__construct();
    }
}
new mychild;


// Anonymous class

$ins = new class('arg1'){
    public $name = "anik";
    static $count = 1;
    function __construct(string $data1){
        echo $data1;
    }

    function __toString(){
        return "problem \n";
    }

    function getName(){
        return $this->name;
    }
};


echo $ins;

echo $ins->getName();


interface PaymentProvider
{
    // public $name;
 const A = "Data \n";
 public function showPaymentPage();
 public function contactGateway(array $messageParameters);
 static function notify(string $email);
}


class Payment implements PaymentProvider{
    public $name = "anik";
    public static $counter = 79;

    public function showPaymentPage(){

    }
    public function contactGateway(array $messageParameters){

    }
    static function notify(string $email){
        return self::A;
    }

}

echo Payment::A;
echo Payment::notify("fasdfsa");



/**
 * reflication
 * ReflectionClass('ClassName')
 * ReflectionMethod('ClassName','MethodName')
 * ReflectionFunction(FunctionName')
 * ReflectionFunction(FunctionName')
 * ReflectionProperty()
 */


// Reflection::export(new ReflectionClass('Exception'));
$reflectionObject = new ReflectionClass('Payment');
print_r($reflectionObject->getMethods());
 
echo PHP_EOL;
echo PHP_EOL;

print_r($reflectionObject->getProperty('name'));
print_r($reflectionObject->getEndLine());
print_r($reflectionObject->getExtension());
print_r($reflectionObject->getProperty('name')->getValue(new Payment));
print_r($reflectionObject->getProperty('counter')->getValue());
print_r($reflectionObject->hasConstant('A'));
print_r($reflectionObject->hasConstant('B'));
// print_r($reflectionObject->getProperty('counter')->getType()->getName());


echo PHP_EOL;
echo PHP_EOL;

Reflection::export(new ReflectionClass('payment'));


echo PHP_EOL;
echo PHP_EOL;

print_r($reflectionObject->getConstants());
print_r($reflectionObject->getConstant('A'));



function getName($f_name, $l_name){
    return "{$f_name} {$l_name}\n";
}

$reflectionMethod = new ReflectionFunction('getName');
print_r($reflectionMethod);


echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;


class User
{
    public  $name;
}

$rp = new ReflectionProperty('User', 'name');
// echo $rp->hasType();


echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

/**
 * Type hinitng
 */


//  function nouthing(null $data = null){
//      return "passed a {$data} . \n";
//  }

//  echo nouthing("not null");

function foo(AA1 $data){
    print_r($data->name);
}

class AA1 {
    public $name = "Anik \n";
    function __toString(){
        echo "Problem \n";
    }
}
class D{

}
class AAA extends AA1 {}
class C extends AAA {}

$a = new AA1;

foo($a); // that's work

$c = new C;

foo($c); // that's work too . cooool!!

$d = new  D;
//foo($d); // that's produce an error


/**
 * class constant 
 * A constant contain a value that is immutable
 */

 class P{
     const TITLE = "Constant Anik \n";

     function __construct(){
         echo self::TITLE;
     }
 }

 class C1 extends P{
    const TITLE = "Constant Mona \n";
     function __construct(){
         echo parent::TITLE;
     }
 }

 echo P::TITLE;
 echo C1::TITLE;

 new P;
 new C1;

 echo "-------------------------------------\n";

 class CKm
 {
     public function me1()
     {

     }

     public function me2()
     {
         
     }
     private function me4()
     {
         
     }
     protected function me3()
     {
         
     }
 }

 class ckm2 extends ckm{
     public function cm33(){

     }
 }

 $ckm = new ckm2;
 
var_dump(get_parent_class($ckm));
print_r(get_class_methods($ckm)); // get only pulic method
var_dump(method_exists($ckm,'me3'));



function myFunc(){

}


var_dump(is_callable(array($ckm,'me3'),true,$cal_name));

var_dump($cal_name);

echo "\n";
echo "\n";
echo "\n";
class foo0{

}

trait myTrait{
    function hi(){
        echo "hi\n";
    }
}
trait newTreait{
    use myTrait;
}

interface bar1{}
interface bar2{}
class foo1 extends foo0 implements bar1, bar2{
    use newTreait;
    function __construct(){
        $this->hi();
    }
}

$foo1 = new foo1;

var_dump(class_implements($foo1));
var_dump(is_subclass_of($foo1,'foo0'));
var_dump(class_parents($foo1));
var_dump(class_uses($foo1));


