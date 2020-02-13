<?php

$h = "hello ";
$h .= "world";
// echo $h;


$bar = "hello";
$foo = "bar";
$coo = "foo";
$doo = "coo";

// echo $$$coo > PHP_EOL;

$x = 5;

function myFunc(){
    global $x;
    return  $x;
}
// echo myFunc();

function inc(){
    static $z = 0;
    echo $z . PHP_EOL;
    $z++; //in normal case after complite this function $z will 0. but in this case it store last value of z

}

inc();
inc();
inc();
inc();

// recursive function

function reCursiv(){
    static $x = 0;
    $x++;
    echo $x;

    if($x<10){
        reCursiv();
    }
    $x--;
}

reCursiv();
