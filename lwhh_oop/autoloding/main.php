<?php

// function __autoload($name){
    
//     include $name.".php";
    
// }
// __autolode are derecated from php 7.2

spl_autoload_register(function($name){
    if(strpos($name,"Vehicle") !== false){
        $filename = str_replace("Vehicle","",$name);
        include "vehicle/{$filename}.php";
    }else{
        include $name . ".php";
    }
    
});

$b = new Bike;
$b->getBike();

$b = new car;
$b->getcar();

$b = new palne;
$b->getOut();

$t = new VehicleTruck;
$t->driveTruck(); //cool!!