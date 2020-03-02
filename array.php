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
 *  usort()
 *  natsort()
 */

 //usort() use for sort an array by user define function comparism

 function myFunc($a,$b) {
     if($a == $b) return 0;
     return ($a<$b) ? -1 : 1;
 }

 $arr = [4,9,3,5,2];
 usort($arr, "myFunc");

 print_r($arr);

 $arr2 = ['n'=> 41, 'a'=>9,'g'=>3,'G'=>5,'A'=>2,'P' => "Hi",'d' => 'ha',33,'a1','b4','aa2'];
 
//  uksort($arr2,"myFunc");
//  print_r($arr2);

asort($arr2,SORT_NATURAL);

print_r($arr2);
 // SORT_NUMERIC - Compare item numarically 
 // SORT_NATURAL -- similer of natsort()





 /**
  * Search in Index and associativ array
  * in_array() reutrn boolean
  * array_serach() return offset of value
  * 

  * Strict Mood - ON - OF
  */

$nums = ['3',4,5,7,9,054,44,'p' => "hi"];

if(in_array(3,$nums, true)){ // if 3rd parameter will be true, the strice mood are on . then it check value and datatype
    echo "$n in here \n";
}

$getIndex = array_search(054,$nums);
$getIndex = array_search("hi",$nums); // array_search function return index - offset
echo $getIndex."\n";
if(key_exists(0,$nums)){
    echo "here";
}

/**
 * array_intersect() -- return only which element are same
 * array_intersect_assoc() -- return element and key are same
 */

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("e"=>"red","f"=>"green","c"=>"blue");

$n1 = [1,2,4,6,9,8];
$n2 = [11,2,3,44,5,7,88,8];

$result = array_intersect($a1,$a2);
$result = array_intersect_assoc($a1,$a3);

$result_n = array_intersect($n1,$n2);
$result_n = array_intersect_assoc($n1,$n2);

$result = array_diff($n1,$n2); // 1,4,6,9 are not in n2. so this is result
$result = array_diff_assoc($n1,$n2); // both of array for 2 same value and offset

print_r($result);


/**
 * Array utility function
 * Note : they are no modify main array
 *  array_map()
 *  array_walk() // apply a function in all element of array
 */

$person = array('anik','sid','mid','fit','asos');

function fn($val){
    if($val[0] == 'a' || $val[0] == 'A'){
        return true;
    }
}

$filterName = array_filter($person,'fn');

print_r($filterName);

$numbers = [3,5,6,7];

function sq($n){
    echo $n*$n."\n";
}

array_walk($numbers, "sq");


function q($n){
    return $n*$n*$n;
}

$qArr = array_map("q",$numbers);

print_r($qArr);

/**
 * array_reduce()
 * range()]
 * array_rand()
 * shuffle
 * 
 */

 $nums = [1,2,3,4];
 function getOdd($n){
     return $n&1;
 }
 $newNum = array_filter($nums,"getodd");

 print_r($newNum);


 function getSum($oldval=0,$newval) {
    return $oldval + $newval;
 }

 function getMul($oldval,$newval) {
    return $oldval * $newval;
 }

 echo $sum = array_reduce($nums,"getSum") . PHP_EOL;
 echo $mul = array_reduce($nums,"getmul",10); // with out 3rd paramerete this return 0, besuse last element by default 0



 $rangeArr = range(1,10);

 // range(from,to,step)

 $oddArr = range(0,50,7);
 print_r($oddArr);

 $randomNumber = range(1,33);

 $data = ['anik','me','nobab','poran','kaltu'];
 $randTwoName = array_rand($data,2);

 print($data[$randTwoName[0]]) . PHP_EOL;
 print($data[$randTwoName[1]]);

 
 $rand_val = mt_rand(1,1000);
echo $rand_val . PHP_EOL;
 function toss($val) {
     return $val&1 ? "Tail" : "Head" . PHP_EOL;
 }

 echo toss($rand_val);

$randSuffle = range(10,20);

shuffle($randSuffle);
print_r($randSuffle);

$aaarray = array('a'=>'A','b'=>'B','c'=>'C','d'=>'D');

$arrRend = array_rand($aaarray); // return key

// print_r($arrRend);
echo $aaarray[$arrRend];


$small = range('a','z');
$capital = range('A','Z');

// $arr = array_merge($small,$capital);
$myArr = array_combine($small,$capital);

$data = function(array $small, array $capital){
    $count = count($small);
    for($i=0;$i<$count;$i++) {
        echo "'$small[$i]' => '$capital[$i]'".PHP_EOL;
    }
};
echo $data($small,$capital);
// print_r($myArr);






