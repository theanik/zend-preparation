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


/**
 * Properties
 * Class member variables are called Properties
 */


 class PropertiesTest{
     private $var1 = 'hello'." world";
     private $var2 = <<<EOD
     ore 
     gelam re
EOD;
    private $var3 = <<<'EOT'
    this it
    nowdoc
EOT;

    private $var4 = 3+5;
    
    const myconst = 10;

    private $var5 = self::myconst; //cool
    private $vara = array(true,false,true);

    function displayProperties(){
        echo $this->var1 . PHP_EOL;
        echo $this->var2 . PHP_EOL;
        echo $this->var3 . PHP_EOL;
        echo $this->var4 . PHP_EOL;
        echo $this->var5 . PHP_EOL;
        print_r($this->vara);
    }
 }

 $p = new PropertiesTest();
 $p->displayProperties();


/**
 * we can define properties data type
 * from php 7.4
 */
// class User
// {
//     public int $id;
//     public string $name;

//     public function __construct(int $id, string $name)
//     {
//         $this->id = $id;
//         $this->name = $name;
//     }
// }

// $user = new User(1234, "php");
// echo "ID: " . $user->id;
// echo "\n";
// echo "Name: " . $user->name;


/**
 * Class Constant
 * by default const are public
 */

 

 class Constant{
    const CONST1 = "Anik";
    private $var = self::CONST1;

    function getData(){
        echo "$this->var \n";
    }
 }

 echo Constant::CONST1; a();



$con = new Constant();
$con->getData(); a();
echo $con::CONST1;
a();



const ONE = 1;

class Foo1 {
    // As of PHP 5.6.0
    private const TWO = ONE * 2;
    private const THREE = ONE + self::TWO;
    public const SENTENCE = 'The value of THREE is '.self::THREE;
}

// echo Foo1::TWO; this give an eorror
echo Foo1::SENTENCE;

a();
class AA{
    const DATA = 10;

    function getDataSelf(){
        return self::DATA;
    }

    
}

class BB extends AA{
    const DATA = 20;
    function getDataSelf(){
        return parent::getDataSelf();
    }
    
}

$bb = new BB();
echo $bb->getDataSelf();
