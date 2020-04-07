<?php

// A final class may be instantiated
// A class with a final function may be derived.
// Static functions can be final

class BaseClass{
    // final public $f = "f**k"; // property can't be final
    public $a = "a";

    final public function myfuc(){
        return "that's final";
    }

    final static function fsfmy(){ // Static functions can be final

    }
}


class Child extends BaseClass{  // A class with a final function may be derived.
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


$b = new BaseClass; // A final class may be instantiated