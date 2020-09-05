<?php


/*
$string = <<<XML
<?xml version='1.0'?> 
<document>
 <n1>
 	<n2>data2</n2>
 </n1>
 <from>Joe</from>
 <to>Jane</to>
 <body>
  I know that's the answer -- but what's the question?
 </body>
</document>
XML;
*/


// $xml = simplexml_load_string($string);

// print_r($xml->n1);

// $book = simplexml_load_file("book.xml") or die("can not read");

$book = new DOMDocument();

$book->load("book.xml");

// $book->save();

$dd =$book->documentElement;

foreach ($dd->childNodes as $key => $value) {
	echo $value->nodeValue."\n";
}




// foreach ($book->children() as $key => $value) {
// 	echo $value->title,"\n";
// }