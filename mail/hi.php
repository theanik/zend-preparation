<?php
$to = "anik@tahasinit.com";
$from = "Mona <mona@aa.aa>";
$subject = "Going on...";
$body = "Try to say Alhamdulliah \n";
$headers = "From {$from} \n";
echo mail($to,$subject,$body,$headers);