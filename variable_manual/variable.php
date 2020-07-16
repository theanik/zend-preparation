<?php

// $_GET['hello.world'] = "Hello World";
// $_GET = [];
// echo $_GET['new_data'];

// print_r($_GET);
// $GLOBALS['a'] = 10;

// function test()
// { 
//     echo $a; /* reference to local scope variable */ 
// } 

// test();

// echo gettype(null);


// foreach($arrObj as $obj){

// }

// $_GET['data'] = "Data";
// print($_GLOBAL);

function test_global_ref() {
    global $obj;
    $new = new stdclass;
    // $obj = &$new;
    $new = &$obj;
}

test_global_ref();
var_dump($obj);