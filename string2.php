<?php

$str = "Hello anik";

$len = strlen($str);
for($i = 1;$i<=$len;$i++){
    echo $str[$i * -1];
}
echo "\n";
$str = explode(" ",$str);

//simple task
foreach($str as $s){
    $len = strlen($s);
    for($i = 1;$i<=$len;$i++){
        echo $s[$i * -1];
    }
    echo " ";
    $len = 0;
}

$revstr = [];
foreach($str as $s){
    array_push($revstr,strrev($s));
}

echo implode(" ",$revstr);

echo PHP_EOL;

$str1 = "Hello world, I want to explore myself";

// $str1 = explode(" ",$str1);

$str1 = str_split($str1,2);




print_r($str1);

echo "\u{1F418}";


$str2 = "Hello world, I want to explore myself";

$str_part = strtok($str2," ,");

while($str_part !== false){
    echo $str_part . PHP_EOL;
    $str_part = strtok(" ,");
}


$_1s = "Hello world, I want to explore myself";

// $strReg = preg_split("/ |,/",$_1s);
$strReg = preg_split("~ |,|a~",$_1s);

print_r($strReg);


//search char in string
$_1s = "Hello world, I want to explore myself";
// strtolower($_1s);

echo strpos($_1s, "I"); // case sensative
echo PHP_EOL;
echo stripos($_1s, "i"); // case insensative

echo PHP_EOL;

echo strrpos("I love php, I love php too!","php");  // if find from last search elemnt - case sansative
echo strripos("I love php, I love php too!","Php"); // case insasative


$str11 = "srring is a seris of byte";
echo PHP_EOL;
$ofset = strpos($str11,"ssssss");


if($ofset === false){
    echo "\nNot Found";
}else{
    echo "\n Found";
}
echo PHP_EOL;
$str22 = "srring is a seris of byte";

echo strpos($str22,"s",5); // in normally this return "0" , but for 3rd parameter this reatrun "8", actuly it skip first 5 char . start search after 5 char
echo PHP_EOL;

$strrr = "the quick brown fox jump over the lazy dog";
$repstr = str_replace("brown","red",$strrr,$count);

echo $repstr . PHP_EOL;

$color = "Color : Red , green, blue";
echo $color = str_replace(['red','green'],['megenta','yowllo'],$color,$count);
echo "Total Replace {$count}";
echo PHP_EOL;

$color = "Color : Red , green, blue";
echo $color = str_ireplace(['red','green'],['megenta','yowllo'],$color,$count);
echo "Total Replace {$count}";


/**
 * string trimming
 * trim()
 * ltrim()
 * rtrim()
 * 
 */

 $var = " herrr \n";
 $var = trim($var);
 echo $var;
echo PHP_EOL;

 $str = " anik ,. ";
 $str = trim($str," ,.");
 echo $str;

 echo PHP_EOL;
 $str = "-- anik ,. ";
 $str = ltrim($str," -");
 echo $str;

 echo PHP_EOL;
 $str = "-- anik ,. ";
 $str = rtrim($str," ,.");
 echo $str;
 $sentance =  "Lorem ipsum dolor sit amet consecteturaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaas adipisicing elit. Fugit expedita aliquam corporis facere deserunt cumque officiis, cupiditate vitae id laboriosam porro earum tempora doloribus a exercitationem, sed nam recusandae modi.";
echo wordwrap($sentance,30);
echo PHP_EOL;

$sentance =  "Lorem ipsum dolor sit amet consecteturfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff adipisicing elit. Fugit expedita aliquam corporis facere deserunt cumque officiis, cupiditate vitae id laboriosam porro earum tempora doloribus a exercitationem, sed nam recusandae modi.";
echo wordwrap($sentance,30,"\n",true);

// $ffss = "Lorem ipsum dolor sit amet, consectetur  adipisicing elit. Recusandae po\nssimus eum consequatur vitae, harum soluta t\notam amet, odit, nostrum exercitationem optio eaque distinctio in\n explicabo? Harum impedit mollitia esse neque.";
// echo nl2br($ffss);

// echo nl2br("One line.\nAnother line.");

