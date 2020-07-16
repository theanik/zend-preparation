<?php
namespace Board\Lets;
$a;

echo gettype($a);

echo 1;
print 1;

$b = 'r';
$b = (unset)$b;
print gettype($b);
var_dump($b);


$i = 123;
$i = strval($i);
var_dump($i);

echo intdiv(4,3);
echo intdiv(4,5);

$j = '123';
print gettype($j);
settype($j, "integer");
print gettype($j);

$boo = (string)true;
print $boo;

$foo = '1';
$foo *= 2;

echo $foo;

$hoo = 5.3 * "10 duck here";

var_dump($hoo);

$d = ( integer )'99';
echo gettype($d);

$str = "this is string";
$binary = (binary)$str;

$binary = (binary) $string;
$binary = b"binary string";

var_dump($binary);


$a = '0';
var_dump(empty($a));
var_dump(!is_null($a) and is_numeric($a));
var_dump($a === ' ');

$n = (bool)'0';

var_dump($n);

$t = 0 + "56.77";
var_dump($t);


echo PHP_INT_SIZE;
echo PHP_INT_MAX;
echo PHP_INT_MIN;
echo strlen((string) PHP_INT_MIN);


echo "\n\n\n";

// echo (int)((0.1 + 0.7) * 10);
// echo (int)((0.1 + 0.1) * 10);

$a = (float)((0.1 + 0.7) * 10);

// debug_zval_dump($a);

$arr = [
    'name' => 'anik'
];

// echo toString();

$pi = 3.14159625;
$indiana = 3.2;
$epsilon = 0.00001;
$sub = abs($indiana - $pi);

var_dump($sub > $epsilon);
unset($a);


$is = null;

if(isset($is)){
    echo "SET";
}

if(empty($is)){
    echo "EMPTY";
}

echo pi();

define('NAME', 'Anik', true);




class Test{
    public const NAME = 'ANIK';

    public function __construct()
    {
        echo self::NAME;
    }
}

new test;



const DATA = "IMPORTANT DATA";

define('PI', 3.1416);

namespace Foo\Bar;

echo \Board\Lets\DATA;
// echo \Board\Lets\PI; fatal errir

$_ENV["USER"] = 'Anik';
$_ENV["USER"] = 'Mona';


echo "My name is ". $_ENV['USER'];

echo "\n\n";

var_dump(getenv('USER'));


unset($fafsd);


class A {
    private $A = "anik"; // This will become '\0A\0A'
}

class B extends A {
    private $A = "hehho"; // This will become '\0B\0A'
    public $AA = "anikanik"; // This will become 'AA'
}

var_dump((array) new B());


class Student11{
    public $roll1 = "World";
    private $roll2 = "Jupiter";
    protected $roll3 = "Marce";
}

class NewStudent extends Student11{
    public $roll1 = "HAHAHAH";
    private $roll2 = "Jupiter 123";
}

$arr = (array) new NewStudent;

print_r($arr);

echo __NAMESPACE__;
echo "\n";
echo __LINE__;
echo "\n";
echo __FILE__;
echo "\n";
echo __TRAIT__;
echo "\n";

echo __DIR__;
echo "\n";
const MILES_CONVERSION = 1.6;
echo 'There are ' . constant('Foo\Bar\MILES_CONVERSION') . ' miles in a kilometer';
echo "\n\n";

echo constant('Foo\Bar\MILES_CONVERSION');