<?php
namespace App;
include("file2.php");
include("file1.php");
include("file3.php");

// echo app\file1\a;
// app\file1\nameTest();
//done

// use app\file2;
// echo file2\a;

use App\User\Profile;

$pro = new Profile();
$pro->get_data();


use App\Post\Com as com;
com\read();


// echo (new DateTime());