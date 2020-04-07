<?php

/**
 * ইন্টারফেস এ শুধু মাত্র public মেথড থাকতে পারে। 
 */
interface iTemplate
{

    public function setVariable($name, $var);
    public function getHtml($template);
}

// Implement the interface
// This will work

/**
 * একটি ইন্টারফেস থেকে ইমপ্লিমেন্ট করা মেথডকে আমি কখনো private বা proctected করতে পারবো না।
 *  এগুলো সবসময় public 
 */
class Template implements iTemplate
{
    private $vars = array();
  
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
  
    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace($name, $value, $template);
        }
 
        return $template;
    }
}


$t = new template();
$t->setVariable("aaa","anik");
$t->setVariable("mmm","Mona");
echo $t->getHtml("aaa are parcticeing \n");
echo $t->getHtml("mmm are parcticeing \n");
echo $t->getHtml("aaa are singing \n");

// class Invailde implements iTemplate{
//     /// Fatal error : must be implemnt all of the iTamplate abstruct method
// }



/**
 * Extendable Interfaces
 */


//  interface A{
//      public function a();
//  }

//  interface B extends a{
//      function b();
//  }

//  interface C {
//      function c();
//      function d();
//      function e();
//  }


//  class ClassName implements B
//  {
     
//  }


//  class ClassName2 implements a,c
//  {
     
//  }


 /**
  * Multiple interface inheritance
  * interface allows multiple inheritance
  */

//   interface aa {
//       function class1();
//       function class2();
//   }

//   interface bb{
//       function class3();
//       function class4();
//   }

//   interface cc extends aa,bb{

//   }

//   class testClass implements cc
//   {
      
//   }
  


interface a1{
    const a = "interface constant \n";
    const b = "Data \n";
    function printName();
}
echo a1::a; 
// echo a1::printName(); Fatal error

interface a2{
    function printName();
}

class myClass implements a1,a2{
    // const b = "class constant \n"; // not allow..we can't override interface constant
    function printName(){
        echo "anik \n";
        echo a1::a;
        // echo self::b;
    }

    // funct
}

(new myclass)->printName();


/**
 * একটি ইন্টারফেস থেকে ইমপ্লিমেন্ট করা মেথডকে আমি কখনো private বা proctected করতে পারবো না।
 *  এগুলো সবসময় public 
 *  * ইন্টারফেস এ শুধু মাত্র public মেথড থাকতে পারে। 
 */
interface myinter{
    public function my1();
    public function my2();
}


class myinter1 implements myinter{
    function my1(){}
    // private function my2(){}
    function my2(){}
}

new myinter1;


interface myinter2{
    public function my3();
    public function my2();
}

interface myinter3 extends myinter,myinter2{

}


class u implements myinter3{
    public function my3(){}
    public function my2(){}
    public function my1(){}
    
}
 

interface verifing{
    function verify();
}

class Currency{
    function verify(){

    }
}

class CurrencyCheck extends Currency implements verifing{
    //A new CurrencyCheque object is created
    // because the verify method are already implemnts in currecy class..
    // 
}

$cc = new CurrencyCheck;