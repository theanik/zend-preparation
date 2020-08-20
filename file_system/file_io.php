<?php 

// $data = file_get_contents("./file_system/test.txt",false,null,3);

// print $data;

$doc = new DOMDocument();
$doc->loadHTMLFile("filename.html");
echo $doc->saveHTML();


