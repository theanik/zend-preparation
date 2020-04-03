<?php

// print_r(get_loaded_extensions());
// if (!extension_loaded('zip')) {
//     echo "zip found";
// }
// The use keyword is processed at compile time and not run time. This means that it is
// impossible to use conditional logic to change which namespaces to import. The class_
// alias() function lets you conditionally import namespaces

/**
 * class_alias("origincal","colne")
 */
class User{
    public $name = "anik";
}

class_alias("User","Anik");

$ani = new Anik;

echo $ani->name;

echo "\n";

interface foo{}
class_alias('foo','bar'); //class_alias also works for interfaces. 
var_dump(interface_exists('bar'));