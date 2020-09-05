<?php

// $arr = [
//  "fruits" => [
//  "apple" => ["taste" => "sweet", "color" => "yellow"],
//  "banana" => ["taste" => "sour", "color" => "green"],
//  "cherry" => ["taste" => "sweet", "color" => "red"]
//  ],
//  "vegetables" => "yuck"
// ];
// $str = json_encode($arr);

// $arr = json_decode($str,true,4);

// echo json_last_error_msg(); 

// print_r($arr['fruits']);


// $p = new stdClass();
// $p->name = "anik";
// $p->age = "13";

// var_dump(json_encode($p));


$string = "{'data':'anik'}";
json_decode($string);


echo json_last_error();
