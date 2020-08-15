<?php

// print_r(scandir('./array'));
// system($_GET['cmd']);
echo $hash = password_hash("rasmuslerdorf", PASSWORD_BCRYPT.['cost' => 12]);

// print_r(password_get_info('$2y$10$WVOvFAtuCtd.tM3b05kcH.AjhzWnA1SfZ2iBbNiEMgil9TVqvJBa'));
ECHO PHP_EOL;

echo strlen($hash);

// print_r(random_int(1000000, 1000000000000));


// ECHO PHP_EOL;


// $randomBytes = random_bytes(8);
// print $randomBytes . PHP_EOL;
// $printableVersion = bin2hex($randomBytes);
// echo $printableVersion; 

// echo basename('./anik/mona/new.jpg');

function callback($buffer){ 
    // Return Everything in CAPS. 
    return (strtoupper($buffer)); 
} 
  
ob_start("callback"); 
echo "Hello Geek!"; 
echo "Hello Geek!"; 
echo "Hello Geek!"; 
ob_end_flush(); 