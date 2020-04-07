<?php

# taits : method precendence order 1


trait sayHi{
    function hello(){
        echo parent::hello();
        echo " world \n";
    }
}

class Base{
    function hello(){
        echo " Hello";
    }
}

class Child extends Base{
    use sayHi;
}

$obj = new Child;
$obj->hello();


# taits : method precendence order 1

class Base1{
    use sayhi;

    function hello(){
        echo "from base class \n";
    }
}

$b = new base1;
$b->hello();


# confict resulation

trait A {
    public function sayHello()
    {
        echo 'Hello from A';
    }

    public function sayWorld()
    {
        echo 'World from A';
    }
}

trait B {
    public function sayHello()
    {
        echo 'Hello from B';
    }

    public function sayWorld()
    {
        echo 'World from B';
    }
}

class Talker {
    use A, B {
        A::sayHello insteadOf B; // return from A
        B::sayWorld insteadOf A; // return form B
        // B::sayHello insteadOf A;
        A::sayHello as asayhello;
        B::sayHello as bsayhello;
    }
}

$talker = new Talker();
echo $talker->sayHello().PHP_EOL;
echo $talker->sayWorld().PHP_EOL;
echo $talker->bsayhello().PHP_EOL;
echo $talker->asayhello().PHP_EOL;


# Changing Method Visibility


trait VisibalTrait{
    
    private function sayHello(){
        echo "Hello!! I am actully prrivate method from trait \n";
    }

    protected function sayHi(){
        echo "Hi!! I am actully protectd method from trait \n";
    }

}


class VisibalClass{
    // use VisibalTrait; // error can;t acccess protected
    use VisibalTrait{
        VisibalTrait::sayHello as public;
        VisibalTrait::sayHi as public sh;
    }
}

$vc = new VisibalClass;
$vc->sayHello();
$vc->sh();




/**
 * trait property value and class property value mustbe always same
 */

trait PropertiesTrait {
    public $same = "anik";
    public $different = false;
}

class PropertiesExample {
    use PropertiesTrait;
    public $same = "anik"; // Allowed as of PHP 7.0.0; E_STRICT notice formerly
    // public $different = true; // Fatal error
}


trait aaa{
    function sayHI(){
        echo "JIs";
    }
}

trait bbb{
    use aaa;
}

class ttt{
    use bbb;


}

(new ttt)->sayHI();