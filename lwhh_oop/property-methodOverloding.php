<?php

/**
 * __set
 * __get
 * __isset
 * __unset
 * __call
 * __callStatic
 */

class Student{
    // private $name,$roll,$email;
    private $students = array();

    function __set($prop, $value){
        $this->students[$prop] = $value;
    }
    function __get($prop){
        return $this->students[$prop];
    }

    function __isset($name){
        if(isset($this->students[$name])){
            return true;            
        }else{
        echo ucfirst($name)." not define";
        }
    }

    function __unset($name){
        print_r($this->students);
        unset($this->students[$name]);
        print_r($this->students);
    }
}



$anik = new Student;

$anik->name = "anik \n";
$anik->age = "21 \n";
$anik->roll = "123456\n";
$anik->email = "anik@aa.aa\n";
echo $anik->name;
echo $anik->age;
echo $anik->roll;

if(isset($anik->email)){
    echo $anik->email;
}

if(isset($anik->subject)){
    echo $anik->subject;
}


echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

$mona = new Student;
$mona->name = "Tusu \n";
$mona->age = "20 \n";
$mona->roll = "205454 \n";
$mona->phone = "01644******* \n";

echo $mona->name;
echo $mona->age;
echo $mona->roll;
echo $mona->phone;
unset($mona->age);
unset($mona->dis);


class Person{

    function __call($name, $arguments){
      if('run' == $name){
          if($arguments){
              echo "I am running on {$arguments[0]} as {$arguments[1]}\n";
          }else{
            echo "I am running \n";
          }
          
      }

      if('eat' == $name){
          if($arguments){
              echo "I'm eating {$arguments[0]} \n";
          }else{
              echo "I am eating \n";
          }
      }
    // echo "non static \n";
        
    }

    static function __callStatic($name,$arguments){
        echo "static call \n";
    }

}


Person::work();
$p = new Person;
$p->run("Field","Fast");
$p->eat();