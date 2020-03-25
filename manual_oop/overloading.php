<?php

require_once("lb.php");


class Person{
    public $a = "anik \n";
   function __isset($name){
       echo "not found \n";
   }

   function __set($offset,$value){
        $this->$offset = $value;
    }

    function __get($name){
        return $this->$name;
    }


}


$p = new Person;

if(isset($p->a)){
    echo $p->a;
}

if(isset($p->b)){
    echo $p->b;
}

$p->newoffset = "new data";
if(isset($p->newoffset)){
    echo $p->newoffset;
}

if(isset($p->newoffset)){
    echo $p->newoffset;
}



a(3);

class PropetryTest{
    private $data = [];

    private $hidden = 2; 

    function __set($offset,$value){
        $this->data[$offset] = $value;
    }

    function __get($offset){
        if(array_key_exists($offset, $this->data)){
            return $this->data[$offset];
        }
        return $this->$offset;
    }

    function __isset($offset){
        if(!isset($this->data[$offset])){
            echo "{$offset} are not set \n";
            return false;
        }
        return true;
    }


    function __unset($offset){
        echo "Unset {$offset} \n";
       unset($this->data[$offset]);
        
    }


}


$p = new PropetryTest;

$p->a = 1;
$p->b = 2;
$p->a = 3;

echo $p->hidden; // we can acccess the private propery using the __get() method
a();
echo $p->a;a();
echo $p->b;a();
echo $p->a;a();

echo $p->d; // this give a notice

if(isset($p->d)){ // but this thing working smotholly with a message -- cool!!!
    echo $p->d;
}


$p->e = 5;
if(isset($p->e)){
    echo $p->e;
}
a();
unset($p->e);


if(isset($p->e)){
    echo $p->e;
}


a(3);

class MethodTest{
    function __call($name, $arguments){
        echo "Calling object method '$name' " . implode(', ', $arguments). "\n";
    }

    function __callStatic($name,$arguments){
        echo "Calling object stauic method '$name' "
             . implode(', ', $arguments). "\n";
             foreach($arguments as $arg){
                echo $arg . PHP_EOL;
             }
             
    }
}


$m = new MethodTest;
$m->f__k("hi","helloo");

MethodTest::f__k("hi","helloo");