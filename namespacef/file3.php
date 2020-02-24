<?php
namespace App\User;

class Profile{
    private $name = "Anik";
    private $age = 21;

    public function get_data(){
        echo "I am $this->name . I am $this->age years old";
    }
}