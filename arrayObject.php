<?php

// $b = new ArrayObject(); 
//  $b['arr'] = 'array data'; 
//  $b->prop = 'prop data'; 
//  $b->myprop = 'anik';

//  print_r($b);


//  foreach($b as $v){
//     echo "$v \n";
// }

// echo  PHP_EOL; 

$a = new ArrayObject(array(),ArrayObject::STD_PROP_LIST);

// $a = new ArrayObject(array(), ArrayObject::ARRAY_AS_PROPS);
$a['aaaa'] = 'array 1';
$a->newprop = "me";
$a->anik = "anik";

foreach($a as $v){
    echo "$v \n";
}

print_r($a);

/**
 * ArrayObject::append
 * append a value in last element
 */

$arrObj = new ArrayObject(array(1,2,"three"));
$arrObj->append(4);
$arrObj->append("five");
$arrObj->append(array('hi' => "hello"));

print_r($arrObj);


/**
 * ArrayObjcet::offsetSet
 * is can set value in spacifide index
 * 
 * ArrayObject - offsetget //return value at spacifide index
 * ArrayObject::ofsetExists // return bool value for spacifide index
 * ArrayObejct::offestUnset // remove element for spacifide index
 */

 $arrObjof = new ArrayObject();
 $arrObjof->offsetSet(0,"four");
 $arrObjof->offsetSet(2,"two");

//  print_r($arrObjof);
foreach($arrObjof as $k=>$v){
    echo "$k = $v \n";
}

$objArrayOffset = new ArrayObject(array("one",'two'));
$objArrayOffset->offsetSet(null,"zero"); //for add as last element
$objArrayOffset->offsetSet(null,"zend"); //for add as last element
$objArrayOffset->offsetSet(1,"anik"); // two are repalce with anik
$objArrayOffset->offsetSet(5,"five");
$objArrayOffset->offsetSet(6,6);

print_r($objArrayOffset);

print $objArrayOffset->offsetGet(1) . PHP_EOL;
print $objArrayOffset->offsetGet(6) . PHP_EOL . PHP_EOL;
print $objArrayOffset->offsetUnset(6) ? "done" : "nouthing to return" . PHP_EOL;
print $objArrayOffset->offsetExists(6) ? "yes" : "no" . PHP_EOL;
print $objArrayOffset->offsetExists(7) ? "yes" : "no" . PHP_EOL;
print $objArrayOffset->offsetExists("new") ? "yes" : "no". PHP_EOL;



class MyClass {
    public $a;
    function __construct(){
        $this->setter();
    }

    public function setter()
    {
        $this->a = "public:props";
    }
}

$arrobj = new ArrayObject(new MyClass);
$arrobj->offsetSet(2,"two");
$arrobj->offsetSet("group",["three","four"]);

print_r($arrobj);

/**
 *  Array object sort function
 * note : no reverse sort function are here
 */

 //  asort
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
$fruitsArrObj = new ArrayObject($fruits);
$fruitsArrObj->asort();

print_r($fruitsArrObj);

// ksort

$fruitsArrObjksort = new ArrayObject($fruits);
$fruitsArrObjksort->ksort();

print_r($fruitsArrObjksort);

//natsort
$array = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');
$imgArrObjNatsort = new ArrayObject($array);
$imgArrObjNatsort->natsort();

print_r($imgArrObjNatsort);

//natcasesort
$array = array('a'=>'IMG0.png', 'x'=>'img12.png', 'b'=>'img10.png', 'd=>'=>'img2.png', 'f'=>'img1.png', 'F'=>'IMG3.png');
$imgArrObjNatsort = new ArrayObject($array);
$imgArrObjNatsort->natcasesort();

print_r($imgArrObjNatsort);


function aarsot($a,$b)
{
    if($a === $b){
        return 0;
    }
    return ($a > $b) ? -1 : 1;
}

$fruits = array("d" => "lemon", "a" => "orangeeeee", "b" => "banana", "c" => "apple");
$arfobj = new ArrayObject($fruits);
$arfobj->uasort('aarsot');
print_r($arfobj);





/**
 * ArrayObject::__construct()
 */

 $arr = [1,4,6,8];

//  $arrContruct = ArrayObject::__construct($arr);
$arrContruct = new ArrayObject($arr);

 print_r($arrContruct);

 /**
  * ArrayObject::setFlags 
  * setflas ues to set behavior flags in object
  * behavior flags are 
   *    1 . STD_PROP_LIST
   *    2 . ARRAY_AS_PROPS
  */

$arrayName = array('me' => 'Anik', 'hay' => 'Allah', 'save' => 'us');

$arrObj = new ArrayObject($arrayName);
// var_dump($arrObj->me); // return an error

$arrObj->setFlags(ArrayObject::ARRAY_AS_PROPS);
var_export($arrObj->hay);
var_dump($arrObj->hay);
printf("%s",$arrObj->hay);
echo PHP_EOL;
echo $arrObj->count();
echo PHP_EOL;
/**
 * count
 * return totla element of an arrayobject
 */

class myClass2 {
    public $pub1 = "public:prop";
    public $pub2 = "public:prop";
    public $pub3 = "public:prop";
    private $pri = "private:prop";
    protected $pro = "protected:prop";
}
 // it only can count public propartry
$ex = new ArrayObject(new myClass2);
echo $ex->count();
