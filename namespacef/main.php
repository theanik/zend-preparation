<?php
// namespace main;
// use com\getinstance\util\Debug;

// class Debug
// {
//     Fatal error: Cannot declare class main\Debug because the name is already in use in C:\laragon\www\zend\namespacef\main.php on line 5
// }

// namespace fub;
// include 'file1.php';
// include 'file2.php';
// include 'file3.php';
// use foo as feline;
// use bar as canine;
// use other\animate;       //use other\animate as animate;
// echo feline\Cat::says(), "\n";
// echo canine\Dog::says(), "\n";
// echo animate\Animal::breathes(), "\n"; 


// namespace app\a{
//     class one{
//        public static function _1(){
//         echo 'a one _1 '. PHP_EOL;
//        }
//     }
// }

// namespace app\b{
//     class one{
//         public static function _2(){
//             echo 'b one _2 '. PHP_EOL;
//         }
//     }
// }

// namespace app{

//     echo a\one::_1();
//     echo b\one::_2();
//     echo a\two::_1();
//     echo a\three::_1();
// }

// namespace app\a{
//     class two{
//        public static function _1(){
//         echo 'a two _1 '.PHP_EOL;
//        }
//     }
// }

// namespace app\a{
//     class three{
//        public static function _1(){
//         echo 'a three _1 \n';
//        }
//     }
// }


// namespace my\name{ // see "Defining Namespaces" section

// class MyClass {
//     public $a = "data";
// }
// function myfunction() {}
// const MYCONST = 1;
// \define("DATA","ANIK");

// $a = new MyClass;
// $c = new MyClass; // see "Global Space" section
// // echo $c->a;
// // echo $a = strlen('hi'); // see "Using namespaces: fallback to global
//                    // function/constant" section

// // $d = namespace\MYCONST; // see "namespace operator and __NAMESPACE__
//                         // constant" section
// // $d = __NAMESPACE__ . '\MYCONST';
// echo DATA;
// }
// namespace my\name2{
// echo \my\name\MYCONST;// see "Namespaces and dynamic language features" section



// }

// namespace test;
// include "file3.php";
// use file3;
// echo MESSAGE;

namespace MyProject {

    const CONNECT_OK = 1;
    class Connection { /* ... */ }
    function connect() { /* ... */  }

}