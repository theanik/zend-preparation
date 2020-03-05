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