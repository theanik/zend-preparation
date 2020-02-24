<?php

$h = "hello ";
$h .= "world";
// echo $h;


$bar = "hello";
$foo = "bar";
$coo = "foo";
$doo = "coo";

// echo $$$coo > PHP_EOL;

<<<<<<< HEAD
$n1 = "Anik";
$n2 = "Anwar";

echo "$n1 $n2"; // in single ' ' variable will parse

=======
$x = 5;
>>>>>>> f4d81d4ec68d034383671945769c3939d9f0cd48

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
