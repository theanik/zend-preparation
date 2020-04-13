<?php

/**
 * boolen
 */

 $foo = True;

 if($foo){
     echo "Yes!! \n";
 }else{
     echo "Noo !! \n";
 }

 $arr = array('data'); // true

 if($arr){
     echo "True \n";
 }else{
     echo "False \n";
 }

 $arr = array(); // false

 if($arr){
    echo "True \n";
}else{
    echo "False \n";
}


$str = "data";

if($str){
    echo "True \n";
}else{
    echo "False \n";
}


$str = "";

if($str){
    echo "True \n";
}else{
    echo "False \n";
}

$str = "0";

if($str){
    echo "True \n";
}else{
    echo "False \n";
}

$int = 0;

if($int){
    echo "True \n";
}else{
    echo "False \n";
}

$int = 1;

if($int){
    echo "True \n";
}else{
    echo "False \n";
}

$float = 0.0;

if($float){
    echo "True \n";
}else{
    echo "False \n";
}

$float = 0.1;

if($float){
    echo "True \n";
}else{
    echo "False \n";
}


$n = null;

if($n){
    echo "True \n";
}else{
    echo "False \n";
}

$false = "flase";

if($false){
    echo "True \n";
}else{
    echo "False \n";
}


echo "\n";
echo "\n";
echo "\n";
echo "\n";



/**
 * Integer
 * 
 */

$a = 0123; // octal number (equivalent to 83 decimal)
echo $a . "\n";
$a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
echo $a . "\n";
$a = 0b0111; // binary number (equivalent to 255 decimal)
echo $a . "\n";
// $a = 1_234_567; // decimal number (as of PHP 7.4.0)


$int_range = 2147483647;
var_dump($int_range);

$int_range_overflow = 2147283648333; // in 32 bit op it wiill float
var_dump($int_range_overflow);


$million = 1000000;

$large_range = 20000000444444444444 * $million;

var_dump($large_range);

var_dump(number_format(27/7,2));
var_dump(27/7);
var_dump((int) (27/7));
var_dump(round(27/7));

echo "intval \n";
var_dump(intval(-4));
var_dump(intval(4.4));
var_dump(intval("4.4"));
var_dump(intval("4"));
var_dump(intval("four"));


echo (int) ((0.1 + 0.7) * 10); /// 7sss



/**
 * Floating point number
 */

$a = 1.234; 
$b = 1.2e3;
print($b . PHP_EOL); 
$c = 7E-9;
print($c);

echo "\n";

echo abs(4 - 7.6); // abs function not return - value


/**
 * string
 */
$planet = "jupither";
$s1 = 'hello \n world';
echo $s1;
echo "\n";
$s2 = "hello \n world";
echo $s2;
echo "\n";
$s3 = <<<M
heello $planet 
M;
echo $s3;
echo "\n";

$s4 = <<<'M'
heello $planet
M;
echo $s4;
echo "\n";



/**
 * Array
 */

$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
    0 => "e",
    false => "f",
    0.5 => "h"
);
var_dump($array);


$array = [
    100 => 100,
    -100 => -100,
    "foo" => "data1",
    "foo" => "data2",
    1 => "1",
    -1 => -1
];


var_dump($array);

$array = array(
    "a",
    "b",
6 => "c",
    "d",
2 => "e",
    "f",
    "g"
);
var_dump($array);


function getArray() {
    return array(1, 2, 3);
}

// on PHP 5.4
echo $secondElement = getArray()[1];

list(,,$rd3) = getArray();

echo $rd3;


$array = range(1,5);
print_r($array);

// Now delete every item, but leave the array itself intact:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);

echo ini_get('display_errors');
// $foo[bar] = 'enemy';
// echo $foo[bar];
// $foo['bar'] = 'enemy';
// echo $foo['bar'];

$error_descriptions[E_ERROR]   = "A fatal error has occurred";
$error_descriptions[E_WARNING] = "PHP issued a warning";
$error_descriptions[E_NOTICE]  = "This is just an informal notice";

echo $error_descriptions[E_ERROR];

class A {
    private $A; // This will become '\0A\0A'
}

class B extends A {
    private $A; // This will become '\0B\0A'
    public $AA; // This will become 'AA'
}

var_dump((array) new B());

$switching = array(         10, // key = 0
                    5    =>  6,
                    3    =>  7, 
                    'a'  =>  4,
                            11, // key = 6 (maximum of integer-indices was 5)
                    '8'  =>  2, // key = 8 (integer!)
                    '02' => 77, // key = '02'
                    0    => 12,  // the value 10 will be overwritten by 12
                    '2' => 22,
                    2 => 222
                  );
print_r($switching);


$colors = array('red', 'blue', 'green', 'yellow');

foreach ($colors as &$color) {
    $color = strtoupper($color);
}
unset($color); /* ensure that following writes to
$color will not modify the last array element */

print_r($colors);