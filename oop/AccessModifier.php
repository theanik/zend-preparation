<?php

class Bank{
    private $balance;

    function __construct($balance = 0){
        $this->balance = $balance;
    }

    public function addBanace($balance){
        $this->balance += $balance;
    }
    public function deductBanace($balance){
        $this->balance -= $balance;
    }
    
    public function getBalance(){
        echo "Balance $this->balance \n";
    }
}

$user1 = new Bank(100);
// if i want to directly add value to balance propartie it give a fatel error
// $user1->balance = 100000000;
$user1->addBanace(100);
$user1->deductBanace(50);
$user1->getBalance();