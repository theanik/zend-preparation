<?php

class Animal{
    protected $name;
    function __construct($name){
        $this->name = $name;
    }
    public function eat(){
        echo "$this->name Can eating \n";
    }

    public function run(){
        echo "$this->name Can eating \n";
    }

    public function greet(){

    }
    protected function addTitle($title){
        $this->name = $title." ".$this->name;
    }

}

class Human extends Animal{
    public function greet(){
        $this->addTitle("Mr.");
        echo "$this->name ,Say Hi...". PHP_EOL;
    }
}

$anik = new Human("Anik");
$anik->greet();
$anik->eat();


class ParentClass{
    protected $name;
    function __construct($name){
        $this->name = $name;
        $this->sayHi();
    }

    function sayHi(){
        echo "Hello $this->name \n";
    }
}

class ChildClass extends ParentClass{
    function sayHi(){
        parent::sayHi();
        echo "hello \n";
    }
}

$cc = new ChildClass("Anik");

class Shape{
    protected $name;
    protected $area;
    function __construct($name){
        $this->name = $name;
        $this->calculateArea();
    }

    // function calculateArea(){}
    function getArea(){
        echo "This $this->name ares is $this->area \n";
    }
}

class Rectangle extends Shape{
    private $a;
    private $b;
    function __construct($a,$b){
        $this->a = $a;
        $this->b = $b;

        parent::__construct("Rectangle");
    }
    function calculateArea(){
        $this->area = $this->a * $this->b;
    }
}

class Sqrt extends Shape{
    private $a;
    function __construct($a){
        $this->a = $a;

        parent::__construct("Rectangle");
    }
    function calculateArea(){
        $this->area = $this->a * $this->a;
    }
}
$r = new Rectangle(2,4);
$r->getArea();

$s = new Sqrt(2);
$s->getArea();


class ProjectManger{
    final function auth(){
        echo "You can't overwrite auth() method \n";
    }
}

class Developer extends ProjectManger{
    // function auth(){
    //     echo "I am trying to overwrite this mehotd \n";
    // }
    function devAuth(){
        echo "dev auth \n";
    }
}

$dev = new Developer;
$dev->auth();
$dev->devAuth();

/**
 * Force Code 
 */

 class S{

 }

 class Shapes{
     public $shape;
     function __construct(){
         $this->shapes = [];
     }

     function addShape(S $shape){ // this method only except this object which extends S class
         array_push($this->shapes, $shape);
     }

     function countShape(){
         return count($this->shapes);
     }
 }

 class Shape1 extends S{

 }

 class Shape2 extends S{

 }

 class NotShape{

 }

 $ss = new Shapes();

$ss->addShape(new Shape1);
$ss->addShape(new Shape2);
// $ss->addShape(new NotShape); // this line throw an error. besacuse this class not extends S class
echo $ss->countShape();
