<?php

/**
 * func_get_args // return an array of arguments
 * func_get_arg(offset)
 * func_num_args() return total arguments 
 */

 function myDefine(){
     $number_of_args = func_num_args();
     echo "Num of arguments : $number_of_args \n";
     
     // get agrumnets as array offset
    $arg_list = func_get_args();
    print_r($arg_list);
    
    if($number_of_args > 2){
        echo func_get_arg(2);
    }
    
 }

 myDefine(1,3,"anik");

