<?php
$v1 = 'Bienvenue';
$v2 = 'Comment allez vous';

echo $v1 . $v2;  // variable + variable

echo '<br>';

echo 'Salut tout le monde ' . $v2;  // chaine + variable

echo '<br>';
echo 'Salut tout le monde ' . ' comment allez vous ?'; // chaine + chaine


echo '<br>';

$v3 = 'ma maison est ';
//$v3 .= 'bleu';
$v3 = $v3 .  'bleu';

echo $v3;
