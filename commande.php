<?php
/*
for($i=0;$i<100;$i++){
    echo 'HEllo world ' . PHP_EOL;
    $i++;
}*/

$ligne = exec('ls -ls', $output, $error);
var_dump($output);
exit;
