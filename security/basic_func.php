<?php
// `clear`;
// echo shell_exec('clear');


// system('ls '.escapeshellarg('security/'));

// $email = "%%^^^anik@an^7$5@gmaul.com";
// // $email = "anik@aaa.com";

// $c = filter_var($email, FILTER_VALIDATE_EMAIL);
// echo ($c);

// $email = "()/\a/\nik[]@an^7$5@gmaul.com";

// $email = filter_var($email, FILTER_SANITIZE_EMAIL);
// echo $email . PHP_EOL;

// if(ctype_alnum($email))
// {
//     echo "valid";
// }else{
//     echo 'invalid';
// }


// $strings = array('string1' => "asdf\n\r\t", 'string2' => 'arf12 ', 'string3' => 'LKA#@%.54');
// foreach ($strings as $name => $testcase) {
//     if (ctype_graph($testcase)) {
//         echo "The string '$name' consists of all (visibly) printable characters.\n";
//     } else {
//         echo "The string '$name' does not consist of all (visibly) printable characters.\n";
//     }
// }

// $l = " ";

// ctype_space($l) ? print $l : "";

// $string = '© 1982 Sinclair Research Ltd.<p>data</p>';
// echo htmlentities($string); // &copy; 1982 Sinclair Research Ltd.
// echo PHP_EOL;
// echo htmlspecialchars($string); // © 1982 Sinclair Research Ltd.
var_dump(escapeshellarg('security'));
system('ls '.escapeshellarg('security'));