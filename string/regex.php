<?php

// $str = file_get_contents("https://en.wikipedia.org/wiki/Humayun_Ahmed");
// preg_match_all('/<a href="(https?:\/\/[^"]+)"/', $str, $res);

// print_r($res);

$markup2 = file_get_contents("https://en.wikipedia.org/wiki/List_of_districts_of_Bangladesh");

preg_match_all('!<a href="(\/wiki\/[^"]+)" title="([\w]+) District"!gim', $markup2, $zila);

print_r(array_unique($zila[2]));