<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// foreach($age as $x => $x_value) {
    
//     echo "Key=" . $x . ", Value=" . $x_value."\n";
// }

$keys = array_keys($age);
$n = count($age);
for($i = 0; $i < $n;$i++){

    echo $keys[$i] ." = ". $age[$keys[$i]]."\n";
}
// print_r($key);

/**
 * array to sting
 * string to array
 *  explode
 *  join
 *  preg_split
 */

 $name = "name1, name2, name3,name4,name5";

 $nameArr = preg_split('/, |,/',$name); //dalemeter

 print_r($nameArr);

 $nameStr = join(', ',$nameArr);

 echo $nameStr;

