<?php
require_once("lb.php");

class TestClass{
    private static $type;
    public static function setData($t="Static frunction"){
        self::$type = $t;
    }
    public static function myFunc(){
        echo "form ".self::$type . PHP_EOL;
    }
}

// new TestClass("static function");
TestClass::setData();
TestClass::myFunc();


class BaseClass{
   
    protected static $name = "Mona ";
    protected static function myFunc(){
        echo "Base Class static method \n";
       echo self::$name . "hrer \n";
    }


    public static $name1 = "Anik ";
    public static function myFunc1(){
       echo self::$name1 . "hrer \n";
    }
}

class ChildClass extends BaseClass{
    public static function myFunc(){
        parent::myFunc();

        echo parent::$name . "there \n";
    }
}

ChildClass::myFunc();

a(2);

$className = 'BaseClass';
echo $className::$name1;
a();
$obj = new BaseClass();
$obj->myfunc1();