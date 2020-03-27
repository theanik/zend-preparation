<?php

// an interface is a collection of absrct mehhod.If a class implemnts an interface it inharite all the abstrct methods of the interface

// interface extends interface
// class implemnents interface

interface BaseAnimal{
    function isAlive();
    function eat();
    function type($t1,$t2);
}

interface BaseHuman extends BaseAnimal{
    function canTalk($language);
}
class Human implements BaseHuman{
    // notice : whit out passing the interface mehod this program give error
    public function isAlive(){
        echo "Live \n";
    }

    public function eat(){
        echo "Eating \n";
    }

    function type($a,$b){ 
        //with out passing both argumanet it give an
    }

    function canTalk($spanish){

    }
}

$anik = new Human();

var_dump($anik instanceof BaseHuman);
var_dump($anik instanceof Human);
var_dump($anik instanceof BaseAnimal);

/**
 * Abstrct class can implements inferface
 */

 abstract class JoxxHuman implements BaseHuman{
     
 }


 /**
  * Iterface example
  */

  class BookCollection implements IteratorAggregate,Countable{
      private $books = array();

      function add($book){
          array_push($this->books,$book);
      }

      function getIterator(){
          return new ArrayIterator($this->books);
      }
      
      function count(){
          return count($this->books);
      }
  }

  $b = new BookCollection;
  $b->add("Aordobitto");
  $b->add("Kalbela");
  $b->add("Caprash");

  foreach($b as $book){
      echo $book . PHP_EOL;
  }
  echo count($b);