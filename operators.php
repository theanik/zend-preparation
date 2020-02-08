<?php

#operator precedence
$_a = 3 + 3 * 4;
// echo $_a;

$a = true ? 0 : true ? 1 : 2;
// echo $a;

$_b = 1;
$_c = 2;
$_b = $_c += 3; //in $_b value will assignen
// echo $_b;

$a1 = 2;
// echo $a1 + $a1++;

$arr = [1,2,3,4,5,6];
$arr[$a1] = $a1++; //set on 3
// echo $arr[$a1];
// print_r($arr);
// for($i=0; $i<6;$i++){
//     echo $arr[$i];
// }

$bool = true && false;
// var_dump($bool);

$bool1 = true AND false;
// var_dump($bool1);



#arithmatic operator
echo 2**3;

