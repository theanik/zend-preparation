<?php
// $address = "09479 hi hekko, anik fdf";
// $address = strtr($address, "anik", "anwarr");
// echo $address; 



// $trans = array("h" => "-", "hello" => "hi", "hi" => "hello");
// echo strtr("hi all, I said hello h", $trans);

// echo "\n";

// echo strtr("hi world", "hi", "hello");



// $var = "hello it is my self";

// echo substr_replace($var, "Hi", 0, -8) . PHP_EOL;
// echo substr_replace($var, "Hi", 0, 11) . PHP_EOL;

// echo strtr($var, ["hello it is" => "Hi"]);


// $minutes = 60;
// $timeUnit = "an hour";
// printf("There are %.2f minutes in %s. %%", 45.666, $timeUnit);

// setlocale(LC_ALL, 'nl_NL');
// // Output: vrijdag 22 december 1978
// echo strftime("%A %e %B %Y", mktime(0, 0, 0, 12, 22, 1978));


$number = 1234.5678;
// 1,235
echo number_format($number, 3,'.',',') . PHP_EOL;


// setlocale(LC_MONETARY, 'en_GB');
echo money_format('%.2n', "5000000.123");