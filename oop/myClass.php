<?php

function a(){
    echo PHP_EOL;
}
function aa(){
    echo PHP_EOL;
    echo PHP_EOL;
}
class Person{
    public $name;
    public $age;

    function __construct($name,$age=0)
    {
        $this->name = $name;
        $this->age = $age;
        $this->greetings();
    }

    function greetings(){
        echo "Salam \n";
        $this->sayName();
    }

    function sayName(){
        if($this->age){
            echo "I'm $this->name , running $this->age year's old \n";
        }else{
            echo "I'm $this->name \n";
        }
        
    }
}

new Person("anik",21);
new Person("Mona");

echo "\n";
echo "\n";
echo "\n";

// class A{
//     function foo(){
//         if(isset($this)){
//             echo get_class($this)."\n";
//             echo gettype($this);
//         }else{
//             echo '$this is no define'.PHP_EOL;
//         }
//     }
// }

// class B{
//     function bar(){
//         A::foo();
//     }
// }

// $a = new A();
// $a->foo();


// $b = new B();
// $b->bar();


/**
 * Object assignment
 * refarance object
 */

class SimpleClass{
    function displayVarSimple(){
        echo "this is from simple class \n";
    }
}
 $obj = new SimpleClass();

 $assigne = $obj;
 $refarance = &$obj;

 $obj->bar = 'new bar';
 $refarance->var2 = "var2";
//  $obj = "hi";
$obj = null;

//  $obj->var = "new";

 var_dump($obj);
 var_dump($refarance);
 var_dump($assigne);


class Test
{
    static public function getNew()
    {
        return new static;
    }

    public $sayName = "amr sorom kore";

    function sayName(){
        echo "Anik";
    }
}

$obj1 = new Test();
$obj2 = new $obj1;

// var_dump($obj1);
// var_dump($obj2);
var_dump($obj1 !== $obj2);

$obj3 = Test::getNew();

var_dump($obj3 instanceof Test);
var_dump($obj2 instanceof Test);

class Child extends Test{

}

$obj4 = new Child();
a();
var_dump($obj4 instanceof Test);
var_dump($obj4 instanceof Child);


/**
 * PHP 5.4.0 introduced the possibility to access a member of a newly created object in a single expression:
 * Example #6 Access member of newly created object
 */

echo (new Test())->sayName();
a();
 //coool!!

 echo $obj1->sayName, a(),$obj1->sayName(),a();

class Foo{
    public $bar;

    function __construct(){
        $this->bar = function(){
            return 21;
        };
    }
}

$foo = new Foo();

$fnc = $foo->bar;
echo $fnc();
a();
// in php 7 ++

echo ($foo->bar)();
a();
$var = ($foo->bar)(); // ()()
echo $var;

a();

/**
 * inharitance 
 * extends a class
 */
Class C extends SimpleClass{
    function displayC(){
        echo "from displayC method \n";
    }
    function displayvar(){
        echo "extending class \n";
        // parent::displayvar();
        parent::displayVarSimple(); // this method declare in SimpleClass ^
        $this->displayVarSimple();
        self::displayC();
    }
}
a();
$c = new C();
$c->displayvar();



class ClassName1{
    
}

echo ClassName2::class;

