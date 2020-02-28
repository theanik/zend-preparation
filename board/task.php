<?php
function getTbl1($value,$key){
$table = "<tr>";
$table.="<th>$key</th>";
$table.="<td>$value</td>";
$table.= "</tr>";
echo $table;
}

function getTbl2($data){
    $table = "<tr>";
    array_walk($data,'print_data');
    $table.="</tr>";
    echo $table;
}

function getHead($value,$key){
    $table = "<th>$key</th>";
    echo $table;
}

function print_data($data){
    $table = "<td>$data</td>";
    echo $table;
}
 
$data1 = [
    ['name' => 'anik','age' => 21, 'address' => 'Dhaka'],
    ['name' => 'anik','age' => 21, 'address' => 'Dhaka'],
    ['name' => 'anik','age' => 21, 'address' => 'Dhaka'],
];
//$data1 =  ['name' => 'anik','age' => 21, 'address' => 'Dhaka'];
 
if(count($data1,1) == count($data1)){
   echo"<table border=\"1\">";
    echo array_walk($data1, "gettbl1");
    echo "</table>";
}else{
    // echo "okk";
   echo "<table border=\"1\">";
    echo array_walk($data1[0], "getHead");
    echo array_walk($data1,'gettbl2');
   echo "</table>";
    
}
