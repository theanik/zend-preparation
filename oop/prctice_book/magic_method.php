<?php

class Mul
{
    function __invoke($a,$b){
        return $a*$b;
    }
}

$mul = new Mul;
echo $mul(3,4); // objece execute as a function

class BazarList1
{
    public $cha = "Chal";
    public $dal = "Dal";
    protected $glass = "Class";
    private $condom = "Condom";
}
$b1 = new BazarList1;
var_dump($b1);

//

class BazarList2
{
    public $chal = "Chal";
    public $dal = "Dal";
    protected $glass = "Class";
    private $condom = "Condom";

    function __debuginfo(){
        return [
            'chal' => $this->chal,
            'glass' => $this->glass,
            'balun' => $this->condom
        ];
    }    


}
$b2 = new BazarList2;
var_dump($b2);


class collection implements Iterator{

}