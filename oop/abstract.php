<?php


abstract class Shape{
    protected $name;
    protected $area;
    function __construct($name){
        $this->name = $name;
        $this->calculateArea();
    }

    abstract function calculateArea();
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

// class Sqrt extends Shape{
//     private $a;
//     function __construct($a){
//         $this->a = $a;

//         parent::__construct("Rectangle");
//     }
//     function calculateArea(){
//         $this->area = $this->a * $this->a;
//     }
// }
$r = new Rectangle(2,4);
$r->getArea();

// $s = new Sqrt(2);
// $s->getArea();

// echo 4+6+"5";
