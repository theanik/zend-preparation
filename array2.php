<?php
/**
 * masud sir class
 */

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

$count = count($age);
reset($age);
for($i = 0; $i < $count ; $i++){
    echo key($age)." = ". current($age) . PHP_EOL;
    next($age);
}


/**
 * Array refarance . 
 *  This reafarance will change the main array element
 */

 // A program for add name title

 $name = ["Anwar","Amir","Arif","Dalware"];
//we will add "Hossain title after those name

foreach($name as &$val) {
    $val = "$val Hossain";
}

print_r($name);

// it will change the main $name[] Array ... cool!!

$number = [2,3,4,5,6,7,8,9,10];

foreach($number as &$num) {
    $num = $num * $num;
}

print_r($number);
