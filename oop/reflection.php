<?php

/**
 * Reflection Class
 */
abstract class myparent{
    public $foo;
    private $bar;
    const ANIK = "me";
    const MONA = "you";
    static $name = "anik static";

    static function staticFunc(){

    }
    function __construct($aa){

    }
    public function foo($bar="") {
        // do stuff
    }

    private function bar($foo){
        // something
    }

    abstract function myabs();
}
   
class mychild extends myparent {
    public $val;
   
    private function bar(myparent &$baz) {
    // do stuff
    }
    public function __construct($val) {
    $this->val = $val;
    }

    function myabs(){
        return "this is inherited abstruct method \n";
    }
}
$p_reflect = new ReflectionClass('myparent');
// echo $p_reflect;
$child = new mychild('hello world');
$child->foo('test');
$reflect = new ReflectionClass('mychild');
echo $reflect->getConstructor();
print_r($reflect->getDefaultProperties()); 
print_r($reflect->getInterfaces()); 

echo "\n";
echo "\n";
echo "\n";
echo "\n";



/**
* this is doc comment??
*/
function sum($a,int $b=0){
    // return 2 num sum
    
    return $a + $b;
}



function dumpfunctionReflaction_anik($func){
    echo $func->isInternal() ? "yes\n" : "not\n";
    echo $func->getName()."\n";
    echo $func->getFileName()."\n";
    echo $func->getStartLine()."\n";
    echo $func->getEndLine()."\n";
    print_r($func->getStaticVariables());
    print_r($func->getStaticVariables());
    print_r($func->getDocComment());


}

/**  
 * constructor -- provide those method --
 *  isInternel()
 * getName()
 * getStartLine()
 * getEndLine()
 * getStaticVariables()
 * getDocComment()
 * 
 * 
 * */
dumpfunctionReflaction_anik(new ReflectionFunction('sum'));


/**
 * export
*/

echo ReflectionFunction::export('sum');

/**
 * invoke()
 * invokeArgs() // pass function argument's as an array
 */

$sum_func_reflection = new ReflectionFunction('sum');

echo $sum_func_reflection->invoke(3,10);
echo "\n";
echo $sum_func_reflection->invokeArgs(array(3,10));

echo "\n";echo "\n";
echo "\n";echo "\n";
// another example with invokeArgs


function func_conditions(array $conditons, array &$false_conditions=[]){
    // global $false_conditions;
    foreach($conditons as $condition){
        if(!$condition){
            array_push($false_conditions,$condition);
        }
    }
}

$func_conditions_reflec = new ReflectionFunction("func_conditions");

$conditons_all = array(true,1,-1,0,false,null);
$false_conditions = array();

$func_conditions_reflec->invokeArgs([$conditons_all, &$false_conditions]);


print_r($false_conditions);

/**
 * isDisabled()
 */

var_dump($func_conditions_reflec->isDisabled());
var_dump($func_conditions_reflec->getClosure());


