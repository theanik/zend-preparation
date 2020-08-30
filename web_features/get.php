<?php

$getData = ['fans' => ['Ron', 'Jonathan', 'Anne Frank']];

$encUrl =  http_build_query($getData);

echo urldecode($encUrl);