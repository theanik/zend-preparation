<?php

$data1 = [
    ['name' => 'anik','age' => 21, 'address' => 'Dhaka'],
    ['name' => 'anik','age' => 21, 'address' => 'Dhaka'],
    ['name' => 'anik','age' => 21, 'address' => 'Dhaka'],
    ['name' => 'anik','age' => 21, 'address' => 'Dhaka']
];


function getTable(array $data){
    if(count($data,1) === count($data)){
        
        $html = "<table border=\"1\">";
            foreach($data as $key => $value){
                $html .= "<tr>";
                    $html .= "<th>". $key . "</th>";
                    $html .= "<td>". $value . "</td>";
                $html .= "</tr>";
            }

        $html.= "</table>";
        return $html;
    } else {
        $html = "<table border=\"1\">";
        $html .= "<tr>";
            foreach($data[0] as $key => $value){ // must be one row are exist
                $html .= "<th>". $key . "</th>";
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
        return $html;
    }
}

echo getTable($data1);