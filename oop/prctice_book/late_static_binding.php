<?php

class A{
    public static function foo(){
        echo static::who();
    }

    static function who(){
        return __CLASS__;
    }
}

class B extends A{
    // static function foo(){
    //     echo __CLASS__; // B -- jokhon ai te foo() thake na aita forwoard call hisabe A te jay . ekhon foo() er vitor jeheto who() staic vabe call kora ase sahatu oita khujbe aita asole kon class thake (in this case that C) call kora hoise. tai sai call er who() metod ta run hobe
    //     }
    static function test(){
        A::foo();
        parent::foo();
        self::foo();
        static::foo();
    }
}

class C extends B{
    static function who(){
        return __CLASS__;
    }
}

C::test();