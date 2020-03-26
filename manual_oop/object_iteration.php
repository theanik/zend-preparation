<?php

class myclass{
    public $var1 = 'value 1';
    public $var2 = 'value 2';
    public $var3 = 'value 3';

    protected $protected = 'protected var';
    private   $private   = 'private var';
}

$mc = new myclass;
foreach($mc as $key => $value){
    print " {$key} : {$value} \n"; // only get tha public property
}





class MyIterator implements Iterator
{
    private $arr = array();

    function __construct(array $arr){
        $this->arr = $arr;
    }

    function rewind(){
        reset($this->arr);
    }

    function current()
    {
        $data = current($this->arr);
        echo "Current : {$data} \n";
        return $data;
    }

    function next(){
        $data = next($this->arr);
        echo "neext : {$data} \n";
        return $data;
    }

    function key()
    {
        $key = key($this->arr);
        echo "Current Key: {$key} \n";
        return $key;
    }

    function valid()
    {
        $key = key($this->arr);
        if($key !== false && $key !== null){
            echo "Valid \n";
        }
        else{
            echo "InValid \n";
        }
    }



}


$data = array("anik","mona","0709");
$mi = new MyIterator($data);

$mi->rewind();

$mi->current();
$mi->key();
$mi->valid();

$mi->next();
$mi->key();
$mi->valid();

$mi->next();
$mi->key();
$mi->valid();

$mi->next();
$mi->key();
$mi->valid();

$mi->next();
$mi->key();
$mi->valid();


// restart 
$mi->rewind();

$mi->current();
$mi->key();
$mi->valid();

$mi->next();
$mi->key();
$mi->valid();


var_dump(123 == "123sgfdg");

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;


class mycollection implements IteratorAggregate{
    // public $d4 = "new11";
    // public $d3 = "new11";
    // public $d2 = "new11";
    // public $d1 = "new11";
    private $arr = array();

    function add($new){
        array_push($this->arr,$new);
    }

    function getIterator(){
        return new ArrayIterator($this->arr);
    }
    



}


$my_Coll = new mycollection;
$my_Coll->add("anik");
$my_Coll->add("anik");
$my_Coll->add("anik");
$my_Coll->add("anik");


foreach($my_Coll as $k => $d){
    $k++;
    echo "{$k} : {$d} \n";
}



