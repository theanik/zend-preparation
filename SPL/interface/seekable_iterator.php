<?php

/**
 * SeekableIterator 
 * all Iterator interface have few common method
 * they are :-
 * rewind()
 * key()
 * valid()
 * current()
 * seek()
 * next()
 */
class myClass implements SeekableIterator{
    private $position;
    private $arr;
    function __construct(){
        $this->arr = array(
            '00','1st','2nd','3rd','4th','5th',
        );
    }
    public function seek($position){
        if(!isset($this->arr[$position])){
            throw new OutOfBoundsException("Invalid seek posinton " .$position);
        }
        $this->position = $position;
    }

    function current(){
        return $this->arr[$this->position];
    }

    function rewind(){
        $this->position = 1;
    }

    function next(){
        ++$this->position;
    }

    function previous(){
        if($this->position > 1){
            --$this->position;
        }else{
            $this->position;
        }
        
    }

    function valid(){
        return isset($this->arr[$this->position]);
    }

    function key(){
       $key = array_keys($this->arr,$this->arr[$this->position]);
        $p = "Current Key : ";
       foreach($key as $k){
        $p .= $k." ";
       }
       echo $p;
    
    }



}


try{
    $m = new myClass;
    $m->rewind();
    echo $m->current() . "\n";
    var_dump($m->valid());

    $m->seek(3);
    echo $m->current()."\n"; // 3rd
    $m->key()."\n";

    echo $m->previous()."\n";
    echo $m->current()."\n";  //2rd
    var_dump($m->valid());
    $m->key()."\n";
    echo $m->next()."\n";
    echo $m->current()."\n";  //3th
    $m->key()."\n";


}catch(OutOfBoundsException $e){
    echo $e.getMessage() . " : " .$e.getCode();
}
