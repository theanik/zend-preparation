<?php
require_once("lb.php");
class Printer{
     public static $name;
    static function printdata(){
        // echo self::$name; // no output
        echo static::$name; // get name which provide from class
    }
}

class Food extends Printer{
     public static $name = "Kacci";

}

class Electronics extends Food{
    public static $name = "Laptop";
}


(new Electronics)->printdata();

a(2);

class A{
    private static function who(){
        echo __CLASS__;
    }
    public static function test(){
        // static::who();
        self::who();
    }
}

class B extends A{
    protected static function who(){
        echo __CLASS__;
    }
}

B::test();
a();
A::test();


a(2);


class AA{
    private function success(){
        echo "success \n";
    }

    function test(){
        self::success();
        $this->success();
        static::success();
    }
}

class BB extends AA{

}

class CC extends AA{
    // private function success(){
        //Fatal error: Uncaught Error: Call to private method CC::success() from context 'AA' in 
    // }

    function success(){
        echo "success from cc \n";
    }
}

$bb = new BB();
$bb->test();
a();
$cc = new CC();
$cc->test();


a(2);


class AAA {
    public static function foo() {
        static::who();
    }

    public static function who() {
        echo __CLASS__."\n";
    }
}

class BBB extends AAA {
    public static function test() {
        AAA::foo();
        parent::foo();
        self::foo();
        static::foo();
    }
}
class CCC extends BBB {
    public static function who() {
        echo __CLASS__."\n";
    }

}

CCC::test();


a(3);

class Test{
    static function who(){
        echo __CLASS__."\n";
    }

    static function foo(){
        static::who();
    }

   

    
}

// class midchild extends test{
//     function test(){
//         test::foo();
//         parent::foo();
//         static::foo();
//     }
// }

class childtest extends test{
    function test(){
        test::foo();
        parent::foo();
        static::foo();
    }
    static function who(){
        echo __CLASS__."\n";
    }

}


$t = new childtest;
$t->test();



a(3);


class c1{
    static function foo(){
        echo "base class \n";
    }

    static function bar(){
        static::foo();
    }
}

class c2 extends c1{
    static function foo(){
        echo "child class \n";
    }

    function test(){
        parent::bar();
        static::bar();
        self::bar();
    }
}

$c2 = new c2;
$c2->test();