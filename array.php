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

 echo $nameStr.PHP_EOL;


 /**
  * serilize
  * json
  */

  $me = [
      'name' => 'Anik',
      'age' => 21,
      'address' => 'Dhaka'
  ];

  $meSerilized = serialize($me);


//   echo $meSerilized; //so HIBIJIBI

$meJson = json_encode($me);

// echo $meJson;

$meDecode = json_decode($meJson,false);
print_r($meDecode);



/**
 * Array copy
 * Deep copy || copy by value
 * Shallow copy || copy by refarence
 * 
 */


$me = [
    'name' => 'Anik',
    'age' => 21,
    'address' => 'Dhaka'
];

$myWife = &$me;
$myWife['name'] = "Bonolota";
$me['name'] = "Valid";
print_r($me);
print_r($myWife);

// remove an element from associative array using unset


unset($myWife['age']);

print_r($myWife);

/**
 * array_slice();
 */

$v = ['a','e','i','o','u'];

$sv = array_slice($v,1,-2);
$sv2 = array_slice($v,-4,-1,true); // use true for get orginal array index

$arr = ['a' => 10,'b' => 123,'c' => "hi", 'd' => 44,3,56,'aa' => 'fu',30 => 31,44];

$arrv = array_slice($arr,1,null,true);
print_r($arrv);

// array_splice() this function remove element from an array. and it also can add a new array in these ofset where from remove those item

$fruits = ["apple","orange",'banana','naspati','jackfruits','tamarin'];

$for_add = ["new","new2","new3"];

$s_f = array_splice($fruits, 1,-2,$for_add); // remove element


print_r($s_f);
print_r($fruits);

//cool

/**
 *  Array addition
 *  array_merge()
 */


$arr1 = [99,'a' => 10,'b' => 123,'c' => "hi", 'd' => 44,3,56,'aa' => 'fu',30 => 31,44];

// $newArr11 = array_slice($arr1,0,3,true);
// $newArr12 = array_slice($arr1,4,null,true);
// $newarr123 = array('p'=>"hi",'q'=>"hello");
// print_r($newArr11 + $newArr12 + $newarr123);

$newArr11 = array_slice($arr1,0,3);
$newArr12 = array_slice($arr1,4);

print_r($newArr11);
print_r($newArr12);

print_r(array_merge($newArr11,$newArr12));


$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
$a3=array("c"=>"blue1","b"=>"yellow4");
print_r(array_merge_recursive($a1,$a2,$a3));

/**
 *  Array soring
 *  NOTE : all sorting function are modify the main array
 *  sort()
 *  rsort()
 *  asort()
 *  arsort()
 *  ksort()
 *  krsort()
 */

