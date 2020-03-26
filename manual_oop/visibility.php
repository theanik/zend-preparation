<?php

require_once("lb.php");

class MyClass{
    public $public;
    private $private = "Pridate Data";
    protected $protected;
    function __construct($data="anonymous \n"){
        $this->public = $data;
    }
}
$mc = new MyClass("Public \n");
print $mc->public;
// print $mc->private; // Fatal error
// print $mc->protected; // Fatal error

class MyClass2 extends MyClass{
   
    
}

$mc2 = new MyClass2;
print $mc2->public;


class MyClass3
{
    public const MY_PUBLIC = 'public';

    // Declare a protected constant
    protected const MY_PROTECTED = 'protected';

    // Declare a private constant
    private const MY_PRIVATE = 'private';

    public function foo()
    {
        echo self::MY_PUBLIC;
        echo self::MY_PROTECTED;
        echo self::MY_PRIVATE;
    }
}

// $mc3 = new MyClass3;
// $mc3->foo();

class MyClass4 extends MyClass3{
    public function foo2()
    {
        echo self::MY_PUBLIC;
        echo self::MY_PROTECTED;
        // echo self::MY_PRIVATE;
    }
}

echo MyClass4::MY_PUBLIC;
echo (new MyClass4)->foo2();


a(2);


/**
 * Object visility
 */


class MyClass5{
    private $name;

    private function bar(){
        echo "from private function \n";
    }

    function baz(MyClass5 $other){
        $other->name = "Jekllo";
        var_dump($other->name);

        $other->bar();
    }
}

$test = new MyClass5;
$test->baz(new MyClass5);



class Object1{
    function __construct($outer){
        var_dump($outer);
        $outer->name = "anik";
        var_dump($outer);
    }
}

class Outer{
    public $name = "mona";
}

$outer = new Outer;
$obj = new Object1($outer);
// print $outer->name;

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;




class TestClass{
    protected $name = "HI World \n";
}

class TestClass2 extends TestClass{
    public $data;
    function __construct(){
        $this->data = $this->name;;
    }
}


$t = new TestClass2;

echo $t->data;
