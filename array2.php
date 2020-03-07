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

echo PHP_EOL;
/**
 * array_diff()
 * array_diff_assoc()
 * array_diff_key()
 */


$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("a"=>"red","f"=>"green","g"=>"blue");

print_r(array_diff($a1,$a2));
print_r(array_diff_assoc($a1,$a3));

$arr1 = ['a'=>'what','b'=>'what','c'=>'what'];
$arr2 = ['a'=>'what','e'=>'what','f'=>'what','g'=>'what'];

// print_r(array_diff_key($arr2,$arr1));

$a1=array("a"=>"red","b"=>"Green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","g"=>"blue");

function myDiff($a,$b)
{
    if($a === $b){
        return 0;
    }
    return $a < $b ? 1 : -1;
}

// print_r(array_diff_uassoc($a1,$a2,"myDiff"));
// print_r(array_udiff_assoc($a1,$a2,"mydiff"));
// print_r(array_udiff_assoc($a1,$a2,"myDiff"));
// print_r(array_diff_ukey($a1,$a2,"myDiff")); //blue,yellow
// print_r(array_udiff_uassoc($a1,$a2,"mydiff","mydiff"));

// print_r(array_udiff($a1,$a2,"mydiff")); //yellow

$a1=array("a"=>"Red","b"=>"green","c"=>"blue","d"=>"yellow");
$a11=array("a"=>"red","b"=>"green","C"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"Green","g"=>"blue");
$a3=array("e"=>"red","f"=>"green","c"=>"blue");

// print_r(array_intersect($a1,$a2));
// print_r(array_intersect_assoc($a1,$a11));
// print_r(array_intersect_key($a1,$a11));
// print_r(array_intersect_uassoc($a1,$a2,"mydiff")); // it check key and value
// print_r(array_uintersect($a1,$a2,"mydiff")); // ist check only value
// print_r(array_uintersect_assoc($a3,$a2,"mydiff"));
// print_r(array_uintersect_uassoc($a1,$a11,"mydiff","mydiff"));




