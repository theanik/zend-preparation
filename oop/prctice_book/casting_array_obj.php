<?php

$arr = [
    'key' => "val\0ue",
    'nested_arr' => [
        'anik' => 'mona',
        'anik1' => 'mona',
    ],
];

$object = $arr;

var_dump($object);

$object = (object)$arr;

var_dump($object);

echo $object->nested_arr['anik']; // not convert as full object

// assert((array)$object === $arr);
$obj = json_decode(json_encode($arr));
// $object = json_decode($object,true);
var_dump($obj);

echo $obj->nested_arr->anik;
echo $obj->nested_arr->anik;
echo $obj->nested_arr->anik;
echo $obj->nested_arr->anik;
echo PHP_EOL;


$a = 8;
$b = 8;
assert($a == $b);
echo "kiii";

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
/**
 * Custing object to string
 * php will call the __toString method and return reuslt when try to cast an object as a string.
 */

 class User{
     private $name,$email;

     function __construct(){
         $this->name = "ANik";
         $this->email = "anik@aa.aa";
     }

     function doNouthing(){
         return "some data";
     }

     function reAssigne(){
        $this->name = "Anik Anwar";
    }


    function __toString(){
        return "You try to call an object as a string \n"; //valid because it is return string data
        // return $this->name; //vaid because it is return string data
        // return $this->doNouthing(); //valid because it is return string data
        // return $this->reAssigne(); // invalid - because it's not return any string type data

    }



 }

 $user = new User;

 echo $user; // whit out __toString method this give a Recoeravle fatal error.



