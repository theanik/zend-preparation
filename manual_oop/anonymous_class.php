<?php

class Base{
    public $data = "20";

}

var_dump(new class(10) extends Base{
    public $num;

     function __construct($n){
         $this->num = $n;
     }
});




class Outer
{
    private $prop = 1;
    protected $prop2 = 2;

    protected function func1(){
        return 3;
    }

    function func2(){
        return new class($this->prop) extends Outer{
            private $prop3;

            function __construct($n){
                $this->prop3 = $n;
            }
            
            function func3(){
                return $this->prop2 + $this->prop3 + $this->func1();
            }

        };
    }
}

$out = new Outer;
echo $out->func2()->func3();


function anonymous_class(){
    return new class{
        
    };
}


if(get_class(anonymous_class()) === get_class(anonymous_class())){
    echo "same \n";
}else{
    echo "different's \n";
}


$a = new class{ };


if(get_class($a) === get_class($a)){
    echo "same \n";
}else{
    echo "different's \n";
}



$c = new class("anik","mona"){
    public $data1;
    public $data2;
    function __construct($prop1,$prop2){
        $this->data1 = $prop1;
        $this->data2 = $prop2;
    }
};

var_dump($c);
var_dump($c->data1);