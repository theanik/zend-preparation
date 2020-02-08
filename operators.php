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
// echo 2**3;

// print -5 % 3;

#assignment operator
$a = ($b = 4) + 4;
// echo $a;
$b = 1;
$b += $a;
// print $b;


//assingment by refarence 

$a = 10;
$b = &$a;
$a = 5;
$b = 6;
$a = 7;
// echo $b;
// echo $a;

${"x"} = true and false;
//echo ${"x"};
$a_10 = (true and false);
//echo $a_10; // false??


# Bitwise operator

// echo <<<EOH
//  ---------     ---------  -- ---------
//  result        value      op test
//  ---------     ---------  -- ---------
// EOH;

// echo 4 ^ 6;


#Comparison Operators 

$_s1 = 10;
$_s2 = 30;

//echo $_s1 <=> $_s2; // -1
//echo $_s2 <=> $_s1; // 1
//echo $_s1 <=> 10; // 0

/* bamer ta choto hoile -1
    bamer ta boro hoile 1
    soman hoile 0
*/

// echo 2 <> 3;

// echo "a" <=> "b";
// echo "z" <=> "c";




# Null Coalescing Operator
// $xyz = 9;
// echo $xyz ?? "assingne here";

//nested null coalescing 
$_a = null;
$_c = null;
$b = "data";
// echo $_a ?? $_c ?? $b;

echo @$ppp; // with out @ here will show undefine $ppp


# Increment / Decrement operators

$s = 'W';
for ($n=0; $n<6; $n++) {
    echo $s++ . PHP_EOL;
}