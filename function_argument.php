<?php

//passing arrya to funciton
function arrSum($input) { //parameter
    echo "$input[0] + $input[1] = ", $input[0]+$input[1];
}
$arr = [3,5,7,9];
arrSum($arr); // argument

/**
 * passing funcion parameters as reparense
 */

 function add_new_text(&$string) {
     $string .= " THis is new text";
 }

 $str = "Hello";

 echo add_new_text($str);
 echo $str;

 /**
  * default parameter in function
  */

  function getName($name = "Anik") {
      echo $name;
  }

  getName();
  getName("Mona");

  //non valid

//   function person($name = "anik", $age){
//       echo "Name : {$name} , Age : {$age} ";
//   }


  //vaid

  function person($age,$name = "anik"){
    echo "Name : {$name} , Age : {$age} ";
}
  person(34);