<?php

trait FuncGroup{
    public function a(){
        echo "function a \n";
    }
    private function b(){ // visibility are be same
        echo "Private function b \n";
    }
    public function c(){
        $this->a();
        $this->b();
    }
}

trait FuncGroup2{
    protected function d(){
        echo "protectrd function d \n";
    }
}



class MyClass{
    use FuncGroup,FuncGroup2; //use multiple traits

    function e(){
        $this->d();
    }

}

$mc = new MyClass;
$mc->a();
$mc->c();
$mc->e();


/**
 *  method precendence
 */




 class MyClass2{
     use FuncGroup;
     function a(){ //override precendence : true
         echo "From class \n";
     }
 }



 $mc2 = new MyClass2;
 $mc2->a();


 class MyClass3 extends Myclass2{
     use funcGroup;
 }

$mc3 = new MyClass3;
$mc3->a();


/**
 * ট্রেইটের মেথড গুলোর কনফ্লিক্ট রেজোল্যুশন 
 */

trait funcGroup4{
    function common(){
        echo "from function group 4 \n";
    }
}

trait funcGroup5{
    private $name = "Anik";
    function common(){
        echo "from function group 5 \n";
    }

    function getName(){
        echo "Name set as {$this->name} \n";
    }
}


$a = PHP_EOL;
echo $a;


class testClass{
    use FuncGroup4,FuncGroup5{
        FuncGroup4::common as common4;
        FuncGroup5::common as common5;
    }

    function common(){
        echo "from test class \n";
    }
}

$tc = new TestClass;
$tc->common();
$tc->common4();
$tc->common5();
$tc->getName();

echo $a;
echo $a;
echo $a;

/**
 * ট্রেইটের অ্যাবস্ট্রাক্ট এবং স্ট্যাটিক মেথডস এবং প্রোপার্টিজ
 */


trait myTrait{
    static $n,$g;

    function inc(){
        self::$n += 1;
        echo self::$n . $GLOBALS['a'];
    }

    abstract protected function mustbe();
    abstract public function printd();


    static public function mystatic(){
        echo "static function from trait \n";
    }
}


class testClass1{
    use mytrait;

    public function mustbe(){
        return "You should must me implemnet this method \n";
    }

    function printd(){
        echo $this->mustbe();
    }

}

class testClass2{
    use mytrait;


    function mustbe(){
        return 0;
    }
    function printd(){

    }
}

$obj = new testclass1;
$obj->inc();
$obj->inc();
$obj->inc();
$obj->inc();
$obj->inc();
$obj->printd();


testclass1::$g = 10;
echo testclass1::$g;
echo $a;
testclass1::mystatic();

echo $a;

testclass1::$g = 30;
echo testclass1::$g;

echo $a;echo $a;echo $a;

echo testClass2::$g;
testClass2::$g = 20;
echo testClass2::$g;