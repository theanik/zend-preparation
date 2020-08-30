<?php

$curlResource = curl_init("https://learnwith.hasinhayder.com/wp/course/mastering-php-7/");
// This array contains the variables we want to POST
$postData = ['name' => 'Ron'];
// Tell curl to do a application/x-www-form-urlencoded POST
curl_setopt($curlResource, CURLOPT_POST, true);
// We specify the values to POST
curl_setopt($curlResource,CURLOPT_POSTFIELDS, $postData);
// Execute the request and store the response
$response = curl_exec($curlResource);
// If there is an error it will be stored in $err
$err = curl_error($curlResource);
// Close the handle
curl_close($curlResource);

print_r($response);