<?php
$nom = 'Lassoie';
$prenom = 'Samuel';

//echo "$nom $prenom";


echo 'Bonjour je m\'appelle <b>' . $nom . ' ' . $prenom . '</b>, comment allez-vous ?';

?>
<h1>CALCULS</h1>

<?php

$nbre1 = 1526;
$nbre2 = 25;

$nbre1 * $nbre2;





echo "<h1>EXEMPLE</h1>";

$mot1 = 'maison';
$mot2 = 'voiture';



$variableTemporaire = $mot1; // maison
$mot1 = $mot2; // voiture
$mot2 = $variableTemporaire;

echo $mot1 . '<br>';
echo $mot2 . '<br>';
echo $variableTemporaire . '<br>';


echo "<h1>EXERCICES 1</h1>";
$nbre1 = "23";
$nbre2 = "233";

echo $nbre1 + $nbre2;


echo "<h1>EXERCICES 2</h1>";

$nbre1 = 23.20;
$nbre2 = 18.18;

echo $nbre1 * $nbre2;


echo "<h1>EXERCICES 3</h1>";

$nbre1 = 77.33;

echo  $nbre1 * $nbre1 - $nbre1;


echo "<h1>EXERCICES 4</h1>";

$nbre1 = 120;
$nbre2 = 30;

echo $nbre1 % $nbre2;


echo "<h1>EXERCICES 5</h1>";

$nbre1 = 5;

echo $nbre1 + $nbre1 . '<br>';
echo $nbre1 + 5 . '<br>';

echo "<h1>EXERCICES 6</h1>";

$nbre1 = 5;
$nbre3 = 7;

$nbre2 = $nbre3 - $nbre1;

echo $nbre1 + $nbre2 + $nbre3;


echo "<h1>EXERCICES 7</h1>";

$nbre = 4;

echo '1 x ' . $nbre . ' = ' . (1 * $nbre) . '<br>';
echo '2 x ' . $nbre . ' = ' . (2 * $nbre) . '<br>';
echo '3 x ' . $nbre . ' = ' . (3 * $nbre) . '<br>';
echo '4 x ' . $nbre . ' = ' . (4 * $nbre) . '<br>';
echo '5 x ' . $nbre . ' = ' . (5 * $nbre) . '<br>';
echo '6 x ' . $nbre . ' = ' . (6 * $nbre) . '<br>';
echo '7 x ' . $nbre . ' = ' . (7 * $nbre) . '<br>';
echo '8 x ' . $nbre . ' = ' . (8 * $nbre) . '<br>';
echo '9 x ' . $nbre . ' = ' . (9 * $nbre) . '<br>';
echo '10 x ' . $nbre . ' = ' . (10 * $nbre) . '<br>';
