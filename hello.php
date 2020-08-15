<?php
// || empty($_GET['host'])
if(empty($_GET['hmac'])) {
   // header('HTTP/1.0 400 Bad Request');
    // exit;
    // echo $_GET['hmac'];
    echo "em";
}

// $secret = getenv('SECRET');

// if (isset($_GET['nonce'])) {
//     $secret = hash_hmac('sha256',$_GET['nonce'],$secret);
// }

// $hmac = hash_hmac('sha256',$_GET['host'],$secret);

// if ($hmac != $_GET['hmac']) {
//     header('HTTP/1.0 403 Forbidden');
// }

// echo exec("host " . $_GET['host']);