<?php

abstract class AbstractClass{
    abstract protected function setName();
    abstract protected function addPrefix($prefix);

    function showDetails(){
        print $this->setName() . PHP_EOL;
    }
}



class Class1 extends AbstractClass{
    private $title;
    public function setName(){
        return $this->title . "Anik";
    }

    function addPrefix($prefix){
        $this->title = $prefix;
    }
}


$c1 = new Class1;
$c1->addPrefix("MR .");
$c1->showDetails();



abstract class MyAbstract{
    abstract protected function getName($name);
}

class Name extends MyAbstract{
    function getName($name,$gander=""){ // immpotant
        if(strtolower($gander) == "male"){
            echo "Mr . {$name} \n";
        }elseif(strtolower($gander) == "female"){
            echo "Mrs . {$name} \n";
        }else{
            echo "{$name} \n";
        }
    }
}

$name = new Name;
$name->getName("Mona","feMale");