<?php

/**
 * addAll()
 * removeAll()
 */
// $o1 = new stdClass;
// $o2 = new stdClass;
// $o3 = new stdClass;
// $o4 = new stdClass;


// $s1 = new SplObjectStorage();
// $s1[$o1] = "hello";
// $s1[$o2] = "world";

// $s2 = new SplObjectStorage();
// $s2[$o3] = "oreee";
// $s2[$o4] = "dunia";

// $s3 = new SplObjectStorage();
// $s3->addAll($s1);
// echo $s3[$o1]." ",$s3[$o2]."\n";
// print_r($s3);
// var_dump(count($s3));

// echo "\n";
// echo "\n";
// echo "\n";

// var_dump(count($s2));
// $s2->removeAll($s2); // except object of SplObjectStorage
// var_dump(count($s2));
// print_r($s2);


/**
 * attach()
 * detach()
 * contains()
 * valid()
 * rewind()
 * current()
 */

$s = new SplObjectStorage();

$a = new stdClass;
$a->a = "AAA";
$b = new stdClass;
$c = new stdClass;

class myClass{
    public $name = "anik";
}

$m = new myclass;

$s->attach($a);
$s->attach($b);
$s->attach($c);
$s->attach($m);

// var_dump($s[$m]->name);
var_dump(count($s));
var_dump($s->contains($a));
var_dump($s->contains($b));
var_dump($s->contains($c));
var_dump($s->contains($m));


$s->detach($a);
$s->detach($b);
echo "\n";
var_dump($s->contains($a));
var_dump($s->contains($b));
var_dump($s->contains($c));
var_dump($s->contains($m));

$s[$m] = array("anik",'mona');

if(isset($s[$m])){
    var_dump($s[$m][0]);
}

var_dump($s->count());


$s = new SplObjectStorage();

$o1 = new StdClass;
$o2 = new StdClass;
$o5 = new StdClass;

$s->attach($o1,"0111111111111");
$s->attach($o2,"0222222222222");

$s->rewind();

if($s->valid()){
    echo " key : ";
    var_dump($s->key());
    echo " object  : ";
    var_dump($s->current());
    echo "Data : ";
    var_dump($s->getInfo());
    echo "Hash : ";
    var_dump($s->getHash());

    $s->next();

    echo " key : ";
    var_dump($s->key());
    echo " object  : ";
    var_dump($s->current());
    echo "Data : ";
    var_dump($s->getInfo());
    echo "Hash : ";
    var_dump($s->getHash());


    var_dump($s->offsetExists($o1));
    if($s->offsetExists($o1)){
        var_dump($s->offsetGet($o1));
    }

    if(!$s->offsetExists($o5)){
        $s->offsetSet($o5,'05555555555');
    }
    if($s->offsetExists($o5)){
        var_dump($s->offsetGet($o5));
    }
    // echo $s->offestGet($o5);
    $s->offsetUnset($o5);
    if(!$s->offsetExists($o5)){
       echo "unset.\n";
    }



}


$s->rewind();

while($s->valid()){
    $s->setInfo("new data");
    $s->next();
}

echo $s[$o1]."\n";
echo $s[$o2]."\n";


/**
 * বর্তমান স্টোরেজ থেকে অন্য স্টোরেজে থাকা
 *  ব্যতীত সমস্ত অবজেক্ট সরিয়ে দেয়
 * 
 * removeAllExcept
 */

$a = (object) 'a';
$b = (object) 'b';
$c = (object) 'c';
$foo = new SplObjectStorage;
$foo->attach($a);
$foo->attach($b);


$bar = new SplObjectStorage;
$bar->attach($b);
$bar->attach($c);


$foo->removeAllExcept($bar);

var_dump($foo->contains($a));
var_dump($foo->contains($b));

/**
 * ekhane $b $bar er modde ase. tai $foo theke remove hoy nai
 */

 echo $bar->serialize();



