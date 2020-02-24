<?php

//use php closer

function c($x){
    return function ($y) use ($x){
        return str_repeat($y,$x);
    };
}


$a = c(2);
$b = c(3);

echo $a(3).$b(2); //33222

class Foo Implements ArrayAccess {
    function offsetExists($k) { return true;}
    function offsetGet($k) {return 'a';}
    function offsetSet($k, $v) {}
    function offsetUnset($k) {return true;}
}
$x = new Foo();
echo array_key_exists('foo', $x)?'true':'false';



