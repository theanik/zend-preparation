<?php

// extract function 

$arr = ['id' => 1, 'name' => 'Anik', 'address' => 'Dhaka ,BD'];
$arr2 = [2,'Anik2','Dhaka2 ,BD'];


extract($arr);

echo $id . PHP_EOL;
echo $name . PHP_EOL;
echo $address . PHP_EOL;

// the extarct functuon change the kay as a variable

extract($arr2,EXTR_PREFIX_ALL,'data');

echo $data_0 . PHP_EOL;
echo $data_1 . PHP_EOL;
echo $data_2 . PHP_EOL;



$students1 = [
    ['Anik', 30],
    ['Anik 1', 31],
    ['Anik2', 302],
    ['Ani3k', 303],
    ['An4ik', 304],
];

$students = [
    ['name' => 'Anik','age'=> 0],
    ['name' => 'Anik 1','age'=>  31],
    ['name' => 'Anik2', 'age'=> 302],
    ['name' => 'Ani3k', 'age'=> 303],
    ['name' => 'An4ik', 'age'=> 304],
];


foreach($students as $std) {
    extract($std, EXTR_PREFIX_ALL, 'data');

    echo "Name : $data_0 , Age : $data_1" . PHP_EOL;
}

foreach($students as $std) {
    extract($std);

    echo "Name : $name , Age : $age" . PHP_EOL;
}

//cooool!!
/**
 * 
 * using list()
 */

$person = ['Jhon','wick',30];
list($fname,$lname,$age)=$person;
echo $fname . PHP_EOL;
echo $lname . PHP_EOL;
echo $age . PHP_EOL;

foreach($students1 as $row){
    list($name, $age)=$row;
    echo "$name is $age years old" . PHP_EOL;
}


/**
 *  array_kays()
 *  array_values()
 *  array_values_count()
 *  array_sum()
 *  array_product()
 *  array_reduce()
 *  ksort()
 *  krsort()
 *  array_reverse()
 *  shuffle
 *  array_rand
 *  in_array()
 *  array_search()
 *  array_key_exists()
 */

 $soapstore = ['lifeboy' => 4, 'Dove' => 5,'Kaya' => 6,'Cosco' => 10,22,22,22];
 $soapstore1 = ['lifeboy' => 4, 'Dove' => 5,'Kaya' => 6,'Cosco' => 10,];

 // create a new array with this array keys

 $soapkey = array_keys($soapstore);
 print_r($soapkey);
 // create a new numarical array with this array values

 $soap = array_values($soapstore);
print_r($soap);

// count wich element how many time

$countsoap = array_count_values($soapstore);

print_r($countsoap);

// krsort($soapstore1);
// ksort($soapstore1);
// asort($soapstore1);
// arsort($soapstore1);
$revarray = array_reverse($soapstore1);
$revarray1 = array_reverse($soapstore1,false);

print_r($soapstore1);
print_r($revarray);
print_r($revarray1);


$new_arr = ['hi','hello','hayy',100,50];

shuffle($new_arr);

print_r($new_arr);

$dummyArr = ['first' => '1st','second' => '2nd'];

$tmp = array_key_exists('first',$dummyArr) ? "Found" : "Not Found";
echo $tmp;

$tmp2 = array_search('1st',$dummyArr);
echo $tmp2;

echo "\n\n\n";

$vegetable = ["Carrot","Tomato","Potato","Cucomber"];

$someVeg = array_slice($vegetable, 1,-1);

print_r($someVeg);