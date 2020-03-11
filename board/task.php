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



$data = [
    ['name' => 'a','age' => 21, 'address' => 'Dhaka'],
    ['name' => 'd','age' => 24, 'address' => 'Dhaka'],
    ['name' => 'b','age' => 26, 'address' => 'Dhaka'],
    ['name' => 'c','age' => 244, 'address' => 'Dhaka']
];



// array_multisort($data);
$type = "";
$type = filter_input(INPUT_GET, 'type');
echo $type;
switch ($type) {
    case "asc":
        array_multisort($data);
        break;
    case "dsc":
        array_multisort($data,SORT_DESC);
        break;
    default:
    $data;
}
$html = "<table border=\"1\">";
        $html .= "<tr>";
            foreach($data[0] as $key => $value){ 
                if($type == "asc"){
                    $html .= "<th><a href=\"?type=dsc\">". $key . "</a></th>";
                }else if($type == "dsc"){
                    $html .= "<th><a href=\"?type=asc\">". $key . "</a></th>";
                }else{
                    $html .= "<th><a href=\"?type=asc\">". $key . "</a></th>";
                }
            }
        $html .= "</tr>";

        foreach($data as $row) {
            $html .= "<tr>";
                foreach($row as $value) {
                    $html .= "<td> $value </td>";
                }
            $html .= "</tr>";
        }

$html.= "</table>";

echo $html;



