<?php

class Person{
    public $name;
    public $age;

    function __construct($name,$age=0)
    {
        $this->name = $name;
        $this->age = $age;
        $this->greetings();
    }

    function greetings(){
        echo "Salam \n";
        $this->sayName();
    }

    function sayName(){
        if($this->age){
            echo "I'm $this->name , running $this->age year's old \n";
        }else{
            echo "I'm $this->name \n";
        }
        
    }
}

new Person("anik",21);
new Person("Mona");