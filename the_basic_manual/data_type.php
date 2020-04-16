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

echo "this in a \v string\n";

echo "hello\t";
echo "\tEarth \n";

echo "thiss is \r test  sring";
/**
 * Array
 */
echo "\v";
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



/**
 * Logical Ope memorable
 */

$x=TRUE;
$y=FALSE;
$z=$y OR $x;

var_dump($z);


var_dump((bool) array());
var_dump((bool) "false");

$s = !"testing";

var_dump(!$s);

var_dump(0);

$a = 0x1A;
var_dump($a);

var_dump(round(15/4));


$x = 8 - 6.4;
var_dump($x);
$y = 1.6;

var_dump($x == $y);
var_dump(round($x,2) == $y);

var_dump(NAN == NAN);
var_dump(NAN);
var_dump((bool) NAN);
var_dump(NAN === TRUE); // here nan a float
var_dump((bool) NAN === TRUE); // here nan a float

/**
 * string
 */
print "abcdefghijklmnopqurstvwx\ey\ez\n"; // erese y z
print "abcdefghijklmnopqurstv\rwxyz"; //  wzyzefghijklmnopqurstv
print "abcdefghijklmnopqurstv\fwxyz"; //  
echo "\n\n";

// var_dump("the test \r string");

class foo {
    var $bar = 'I am bar.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo "{$foo->$bar}\n";
echo "{$foo->{$baz[1]}}\n";


class beers {
    const softdrink = 'rootbeer';
    public static $ale = 'ipa';
    public $name = "name";
}

$b = new beers;

$rootbeer = 'A & W';
$ipa = 'Alexander Keith\'s';

// This works; outputs: I'd like an A & W
echo "I'd like an {${beers::softdrink}}\n";

// This works too; outputs: I'd like an Alexander Keith's
echo "I'd like an {${beers::$ale}}\n";

echo "my name is $b->name \n";
echo "her name is {${beers::$ale}} \n";

$name = "myName";
$s = <<<'NOW'
	My name is {$name}
NOW;
echo $s;


$str = "abc";

var_dump($str['x']);
var_dump(isset($str['x']));

echo PHP_INT_MAX;
echo "\n";
echo PHP_INT_MIN;


$a = 10 + "10.10 hello";
var_dump($a);


$foo = 1 + "10 Small Pigs"; 

echo "\$foo == $foo ; type is ".gettype($foo)." \n";

$fruit=array(
    'a'=>'apple',
    'b'=>'banana',
);
echo $fruit['a'];
// echo "This is $fruit[\"a\"] \n";
echo "This is {$fruit['a']} \n";
echo "This is ${fruit['a']} \n";
echo "This is {{$fruit['a']}} \n";

var_dump('1.22.00' > '01.23.00');
var_dump('1' > '01');
var_dump('22' > '23');
var_dump('00' > '00');
// var_dump('1.22.00' > '01.23.00');



$arr = [0,1,2];

list(,$third) = $arr;

var_dump($third);


// error_reporting(E_ALL);

$arr = array('fruit' => 'apple', 'veggie' => 'carrot');

// Correct
print $arr['fruit'];  // apple
print $arr['veggie']; // carrot
// print $arr[fruit];


$switching = array(         10,
                    5    =>  6,
                    3    =>  7, 
                    'a'  =>  4,
                            11,
                    '8'  =>  2,
                    '02' => 77,
                    0    => 12 
                  );
    
// print $switching[0];
var_dump($switching);


$arr1 = array(1,3);

$arr2 = &$arr1;

$arr2[] = 4;

var_dump($arr1);
var_dump($arr2);


/*
Iterable

*/

function bar() : iterable {
    return [3,4,5,6,"anik"];
}

function gen(): iterable {
    yield 1;
    yield 2;
    yield 3;
}
$data = [1,5,6,7];
$str = "asdfhjkl";
function foo(iterable $data){
    foreach ($data as $el)
        echo $el . " ";
}

foo(gen());

echo "\n";
echo "\n";
echo "\n";

/**
 * object
 */

 $arr = ["1",'2','3','data4'=>'dart4','5'];

 $obj = (object) $arr;

 var_dump(key($obj));
 var_dump($obj);
 print $obj->{'3'};
//  print $obj->data4;


/*
NULL

*/
$arr = array();
$str = 0;
$a = NULL;
$b = null;
var_dump(is_null($a));
var_dump(is_null($str));
var_dump(is_null($a) === is_null($str));