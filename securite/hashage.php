<?php

echo 'a = ' . hash('sha256', 'a').'<br>';
echo 'b = ' . hash('sha256', 'b').'<br>';
echo 'c = ' . hash('sha256', 'c').'<br>';


exit;

echo "<h1>MD5</h1>";
// MD5
$md5_1 = md5('test');
$md5_2 = md5('test1');
$md5_3 = md5('test2');
echo $md5_1.'<br>';
echo $md5_2.'<br>';
echo $md5_3.'<br>';


echo "<h1>SHA256</h1>";
echo $md5_1.'<br>';
// SHA256

echo hash('sha256', 'test');