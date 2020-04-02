<?php

abstract class Myabs
{
    function hi(){
        return " hi";
    }
}

class myClass extends Myabs
{
    function hello()
    {
        return " jeloo";
    }
}

$m = new myClass;
echo $m->hello();
echo $m->hi();