<?php
function lb(){
    echo PHP_EOL;
}
class MathCalculator{
    private $number;
    static $mathName; // we can access static properties with self keyword
    static function fibonacci($n){
        self::$mathName = "Fibonacci\n";
        echo self::$mathName;
        echo "fibonacci $n \n";
        self::seriesAddition($n);
    }

    static function seriesAddition($n){
        self::$mathName = "Additon \n";
        echo self::$mathName;
        echo "Additon of this serise $n \n";
    }

    static function action(){
        echo "this is an action \n";
    }

    function factorial($n){
        // it not-static method we can access static method using both $this and self::
        $this->action();
        self::action();
        echo "factorial $n \n";
        // we can not access static property using $this in non-static method but we can use self::
        // $this->mathName = "Factorial"; // this give an error
        self::$mathName = "Factorial - cool!! \n";
        echo self::$mathName;
    }
}


// we can access static method with out instantiated class object
MathCalculator::fibonacci(10);
echo MathCalculator::$mathName; // this return last assigned element

lb();
lb();
lb();

$mc = new MathCalculator();
$mc->fibonacci(20);
// $mc->mathName; // we can't acess static property using object

lb();
lb();
lb();
// MathCalculator::factorial(30); // it is deprected - we get an warning

$mc2 = new MathCalculator();
$mc2->factorial(50);


/**
 * We can't override static method 
 * to override use static keyword
 */
lb();
lb();
lb();

class A{
    static function greet(){
        echo "Hi... form A \n";
    }
}
class B extends A{
    static function greet(){
        echo "Hello... from B \n";
        parent::greet();
    }
}

$a = new B;
$a->greet();

lb();
lb();
lb();

/**
 *  Static scope - ppublic private proctected
 */

 class C{
    protected static $name;
    
    static function sayHi(){
        self::$name = "anik";
        echo "Hello " . self::$name . PHP_EOL;
    }
 }

 class D extends C{
     static function sayHi(){
         parent::$name = "Anik";
         echo parent::$name."\n";
         parent::sayHi();
     }
     
 }

 D::sayHi();