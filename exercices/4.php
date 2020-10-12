<?php

// EXERCICE 1
echo '<h1>EXERCICE 1</h1><br>';


$prixHT = 90;
$tva = 21;

//$prixTVA = ($prixHT / 100 ) * (100+$tva);
//$prixTVA = $prixHT + ($prixHT * ($tva/100));
$prixTVA = (($tva/100) + 1) * $prixHT;

if($prixTVA > 100)
    echo 'prix supérieur à 100€';
else if($prixTVA == 100)
    echo 'prix égale à 100€';
else 
    echo 'prix inférieur à 100€';


echo '<h1>EXERCICE 2</h1><br>';


// 1: Monsieur, 2: Madame
$civilite = 2;

// 70: agés  en dessous: jeune
$age = 71;


if($civilite == 1){
    print 'Bonjour monsieur ';
} else if($civilite == 2){
    print 'Bonjour madame ';
}

if($age < 70) {
    print ' vous êtes jeunes';
} else {
    print 'vous êtes agé(e)s';
}
echo '<br>';

/*if($civilite == 1 && $age < 70){
    echo 'Bonjour monsieur vous êtes jeunes';
} else if($civilite == 1 && $age >= 70){
    echo 'Bonjour monsieur vous êtes agés';
}else if($civilite == 2 && $age < 70){
    echo 'Bonjour madame vous êtes jeunes';
} else if($civilite == 2 && $age >= 70){
    echo 'Bonjour madame vous êtes agés';
}*/

/*$c = null;
$a = null;

if($civilite == 1) {
    $c ='monsieur';
} else {
    $c ='madame';
}

if($age < 70) {
    $a ='jeune';
} else {
    $a ='agés';
}

echo 'Bonjour ' . $c . ' vous êtes '. $a;*/

/*
echo '<h1>EXERCICE 3</h1><br>';// Exemple 1
$i = 10;
echo ++$i . '<br>';
echo $i;
/*echo $i.'<br>';
$i++;
echo $i; // imprime à l'écran 11

$e = 20;
echo '<br>';
if(++$e == 20){
    echo "Égale";
} else {
    echo "Non égale";
}*/