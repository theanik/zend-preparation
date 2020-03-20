<?php

class Planet{
    static function echoName(){
        // echo self::getName(); //when we use sefl that's return base class name
        echo static::getName(); 
        //যখন আমরা static ব্যবহার করবো তখন যদি extends করা ক্লাসে mehtod override না করা হয় তাহলে সেটি baseclass এর method টি কল করবে। যদি childclass এ method টি override করা হয় তাহলে সেটি চাইল্ড ক্লাস এর টা পাবে। 
    }

    static function getName(){
        return __CLASS__;
    }
}

class Earth extends Planet{
    // if here getName() are not override - result Planet
    static function getName()
    {
        return __CLASS__;
    }
}

Earth::echoName();