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



/**
 * ArrayObject::exchangeArray
 * it exchange object one instance variable to onther variable
 */

 $toys = ["car" => 3,"bike" => 4,"Truck"];

 $players = ["Anik","Jhon wick","Haysel grese"];

 $obj1 = new ArrayObject($toys);

 $exObj1 = $obj1->exchangeArray($players);


 print_r($obj1);
 print_r($exObj1);

 /**
  * ArrayObject::getArrayCopy
  * Create a copy of the array object
  */
  $players = ["Anik","Jhon wick","Haysel grese"];
  $playerArrObj = new ArrayObject($players);
  $playerArrObj[1] = "Mona";

  $copyHere = $playerArrObj->getArrayCopy();

  print_r($copyHere);

/**
 * ArrayObject::getFlags()
 * gets a behavior flags
 * php তে মোট ২টি  ArrayObject flags আছে। 
 *  1 . ArrayObject::STD_PROP_LIST
 *  2 . ArrayObejct::ARRAY_ AS_PROP
 * এখানে ArrayObejct::STD_PROP_LIST এর জন্য মান  ১ রিটার্ন করে এবং ArrayObject::ARRAY_AS_PROPS এর জন্য ২ রিটার্ন করে। 
 */

$fruits = array("lemons" => 1, "oranges" => 4, "bananas" => 5, "apples" => 10);

$arrobj1 = new ArrayObject($fruits);

$flags = $arrobj1->getFlags();
echo PHP_EOL;
echo $flags;

$arrobj1->setFlags(ArrayObject::ARRAY_AS_PROPS);
// $arrobj1->setFlags(ArrayObject::STD_PROP_LIST);



$flags = $arrobj1->getFlags();
echo PHP_EOL;
echo $flags;
/**
 * ArrayObject::getiterator
 * 
 */
$data = $arrobj1->getiterator();

print_r($data);

while($data->valid()){
    echo $data->key()." has ".$data->current()." item \n";
    $data->next();
}


/**
 * ArrayObject::setIteratorsClass
 * ArrayObject::getIteratorsClass
 * 
 * ArrayIterator is a default php class
 * 
 * user define must be extend ArrayIterator class
 */


 class myIterators extends ArrayIterator{

 }

 class myClass1 {

 }

$fruits = array("lemons" => 1, "oranges" => 4, "bananas" => 5, "apples" => 10);

$fio = new ArrayObject($fruits);

//get class name 
$calssName = $fio->getIteratorClass();

var_dump($calssName);

$fio->setIteratorClass("myIterators");
$calssName = $fio->getIteratorClass();

var_dump($calssName);

$fio->setIteratorClass("myClass1");
$calssName = $fio->getIteratorClass();

var_dump($calssName);
echo PHP_EOL;
echo PHP_EOL;

/**
 * ArrayIterator::rewind
 * when use rewind the array iterator reassignel from first
 */
$fruits = array("lemons" => 1, "oranges" => 4, "bananas" => 5, "apples" => 10);
$arobj = new ArrayObject($fruits);
$iterator = $arobj->getIterator();

$iterator->next();
// $iterator->next();
echo $iterator->current() . PHP_EOL; //excpted 4 .OP;4 cool!!
$iterator->next();
echo $iterator->current() . PHP_EOL; //excpted 5 .OP;5 cool!!
$iterator->rewind();
echo $iterator->current() . PHP_EOL; //excpted 5 .OP;5 cool!!

/**
 * ArrayIterator::seek
 */

$fruits = array("lemons" => 1, "oranges" => 4, "bananas" => 5, "apples" => 10);
$arobj = new ArrayObject($fruits);
$iterator = $arobj->getIterator();

$iterator->seek(2); // as array numarical index
var_dump($iterator->current());


/**
 * serialize
 * unserialize
 */

$fruits = array("lemons" => 1, "oranges" => 4, "bananas" => 5, "apples" => 10);
$arobj = new ArrayObject($fruits);
// $iterator = $arobj->setIterator();

$serilzeData = $arobj->serialize();
var_dump($serilzeData);


$realData = $arobj->unserialize($serilzeData);

var_dump($realData);


$sobj = new ArrayIterator($fruits);

$s = serialize($sobj);
var_dump($s);

$r = unserialize($s);

var_dump($r);