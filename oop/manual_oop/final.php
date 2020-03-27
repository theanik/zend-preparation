<?php

class BaseClass{
    public $a = "a";

    final public function myfuc(){
        return "that's final";
    }
}


class Child extends BaseClass{
    function __construct(){
        $this->a = "aa";
    }

    // public function myfuc(){
        //Fatal error: Cannot override final method BaseClass::myfuc() 
    // }
    
}


final class B1{

}

// class C1 extends B1{
//     // Fatal error: Class C1 may not inherit from final class (B1) in 
// }