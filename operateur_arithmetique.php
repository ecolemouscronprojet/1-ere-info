<?php

$nb1 = 10;
$nb2 = 20.5;

// + addition
// / division
// - soustraction
// * multiplication
// % modulo


echo $nb1 + $nb2;
echo '<br>';
echo $nb1 + 88.5;
echo '<br>';
echo 88.5 + $nb1;

echo '<br>';
echo 'addition =' . ($nb1 + $nb2).'<br>';
echo 'division =' . ($nb1 / $nb2).'<br>';
echo 'soustraction =' . ($nb1 - $nb2).'<br>';
echo 'multiplication =' . ($nb1  *$nb2).'<br>';
echo 'modulo = ' . ($nb1 % $nb2).'<br>';

echo '<h1>Opérateur d\'affectation arithmétique</h1>';
$nb3  = 20;
//$nb3 = $nb3 + 7;
//$nb3 = $nb3 - 6;
//$nb3 = $nb3 / 7;
//$nb3 = $nb3 * 2;
//$nb3 = $nb3 % 2;

$nb3 += 7;
$nb3 -= 6;
$nb3 /= 7;
$nb3 *= 2;
$nb3 %= 2;

echo $nb3;

