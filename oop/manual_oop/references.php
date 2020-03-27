<?php
require_once("lb.php");

class A {
    public $foo = 1;
}

$a = new A;
echo $a->foo;
a();
$b = $a;

$b->foo = 2;

echo $a->foo;
a();
$a = null;
echo $b->foo;
a();

$c = new A;
// echo $c->foo;
a();
$d = &$c;
$d->foo = 3;
// echo $c->foo;
// a();
// echo $d->foo;
echo $c->foo;
a();
$c = null;
echo $d->foo;
$d->foo = 10;
a();
echo $d->foo;
a();

$e = new A;

function bar($obj){
    $obj->foo = 5;
}

bar($e);

echo $e->foo;

// class A {
//     public $foo = 1;
//     // public $foo2 = 1;
// } 

// class B {
//     public function foo(A $bar)
//     {
//         $bar->foo = 42;
//         // $bar->foo2 = 43;
//     }
   
//     public function bar(A &$bar)
//     {
//         $bar = new A;
//     }
// }

// $f = new A;
// $g = new B;
// echo $f->foo . "\n";

// $g->foo($f);
// echo $f->foo . "\n";
// // echo $f->foo2 . "\n";
// // now $f->foo == 42 . we pass to bar 42, but we want to pass $f address


// $g->bar($f);
// echo $f->foo . "\n";


// class A {
//     public $foo = 1;
// } 

// $a = new A;
// $b = $a;
// $a->foo = 2;
// $a = NULL; /// a er memory address alada , b er memory address alada
// echo $b->foo."\n"; // 2

// $c = new A;
// $d = &$c;
// $d->foo = 2;
// $c = NULL; // d == c(address) , when c(address) are null d aslo null
// echo $d->foo."\n"; // Notice:  Trying to get property of non-object...


// $a = 5;
// $b = $a;
// $c = &$a;

// echo $a . PHP_EOL;
// echo $b . PHP_EOL;
// echo $c . PHP_EOL;

// $a = null;
// echo "A = null" . PHP_EOL;

// var_dump($a);
// var_dump($b);
// var_dump($c);


// $a = 10;
// echo "A = 10" . PHP_EOL;

// var_dump($a);
// var_dump($b);
// var_dump($c);


// $a = 20;
// echo "C= 10" . PHP_EOL;

// var_dump($a);
// var_dump($b);
// var_dump($c);