<?php

class Person{
    // private $name;
    // private $email;
    // private $phone;

  
    function __set($prop, $value){
        return $this->$prop = $value;
    }

    function __get($prop){
        return $this->$prop;
    }
}

$p = new Person;
$p->name = "Anik111 \n";
$p->email = "anik@aa.aa \n";
$p->ag = "0183543434 \n";
$p->ag3 = "f php \n";


echo $p->name;
echo $p->email;
echo $p->ag;
echo $p->ag3;

/**
 * toString()
 */
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

 class Color{
     public $color;
     function __construct($color){
        $this->color = $color;
     }

    function __toString(){
        return "corlor is  $this->color .\n";
    }
 }

 $c = new Color("Red");
echo $c;
