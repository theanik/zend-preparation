<?php

$info = new SplFileInfo('example.php');
if ($info->isFile()) {
    echo $info->getRealPath();
}

echo getcwd();

$info = new SplFileInfo('foo.txt');
var_dump($info->getExtension());
var_dump($info->getFileInfo());
var_dump($info->getFilename());
var_dump($info->getExtension());
var_dump($info->getExtension());
var_dump($info->getExtension());


$info = new SplFileInfo(__FILE__);
echo 'Last changed at ' . date('g:i a', $info->getCTime());

$info = new SplFileInfo(__FILE__);
print_r($info->getSize());

$d = new SplFileInfo(dirname(__FILE__));
var_dump($d->isDir());
echo

$info = new SplFileInfo(__FILE__);

    echo 'The real path is '.$info->getRealPath();
    echo dirname(__DIR__);
$path = new SplFileInfo(__FILE__);
echo 'The real path is '.$info->getRealPath();

echo __FILE__;

echo "This file is: " . __FILE__;