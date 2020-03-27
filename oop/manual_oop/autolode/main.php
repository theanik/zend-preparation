<?php

// spl_autoload_register( function ($className){
//     include $className . ".php";
// });


// $c1 = new MyClass1;
// $c2 = new MyClass2;

// spl_autoload_register(function($name){
//     var_dump($name);
//     // include $name . ".php";
// });

// class MyClass3 extends MyClass1{

// }

// spl_autoload_register(function($name){
//     echo "we want to lode {$name} \n";
//     include $name . ".php";
// });

// $c1 = new MyClass1();
// $c2 = new MyClass2();

spl_autoload_register(function($name){
    echo "we want to lode {$name} \n";
    // include $name . ".php";
    throw new Exception("Unable to lode {$name} .\n");
});


try{
    $co1 = new MyClass1;
}catch(Exception $e){
    echo $e->getMessage();
}