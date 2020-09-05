<?php

date_default_timezone_set('Asia/Dhaka');

$strings = [
 'Next monday',
 'Yesterday',
 '', // now
 '2016-12-25',
 '25 December 2016',
 '4-5-2019',
 '-1 week',
 '+1 days',
 "Next month",
 "Next Year",
];
foreach ($strings as $example) {
 $dateTime = new DateTime($example);
// print_r($dateTime);
 echo $dateTime->format(DateTime::COOKIE) . PHP_EOL;
}

// $cd = DateTime::createFromFormat('m-d-Y',$strings[5]);

// print_r($cd->format(DateTime::COOKIE));


// date interval
echo "\n\n\n\n";


$now = new DateTime();

$dob = new DateTime("09 December 1999");



// $dataInterval = new DateInterval('P2WT5H');

// $dob->add($dataInterval);

$age = $dob->diff($now);
print_r($age->y . " years ". $age->m ." month ". $age->d." days");


