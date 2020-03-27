<?php
function a($n=1){
    while(0 < $n){
        echo PHP_EOL;
        $n--;
    }
}

class BaseClass{
    function __construct(){
        echo "Base Class constructor. \n";
    }
}

class ChildClass extends BaseClass{
    function __construct(){
        parent::__construct();
        echo "Child Class constructor \n";
    }
}

class GrandChildClass extends ChildClass{
    function __construct(){
        parent::__construct(); // got child class constrctor
    }
}

(new baseclass);
a();
(new ChildClass);
a(2);
(new GrandChildClass);
a(3);


/**
 * deprecated from 5.3
 */
// class Bar{
//     function Bar(){
//         echo "if CLass name and function name are same that's fntion teate as constructor \n";
//     }
// }

// (new Bar);

class MyClass{
    private $name;
    function __destruct(){
        print "Destroying " . __CLASS__ . "\n";
    }

    function __construct($name="Anonymous"){
        $this->name = $name;
        print "Starting ". __CLASS__ ."\n";
    }

    function me(){
        print "I'm {$this->name} \n";
    }
}

$me = new MyClass;
$me->me();

