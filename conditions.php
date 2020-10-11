<?php

$variable = true;

// code 
// code 
// code 
// code 
// code 
// CONDITION SI $variable est VRAI
//      code
//      code
//      code
// FIN DE CONDITION
// code 
// code 
// code 
// code 

// structure

// if => SI
// else if => SINON SI
// else if => SINON SI
// else if => SINON SI
// else if => SINON SI
// else => SINON

$variable = true;

if ($variable) {
    echo 'IF EST TRUE<br>';
    echo 'IF EST TRUE<br>';
} else if(false) {
    echo 'ELSE IF EST TRUE<br>';
} else if(true) {
    echo 'ELSE IF DEUX EST TRUE<br>';
} else {
    echo 'ELSE<br>';
}

echo '<br>';
echo 'FIN DU DOCUMENT';
echo '<br>';


// OPERATEUR DE COMPARAISONS
$nb1 = 10;
$nb2 = '10';
// == 
// != , <>
// >
// <
// >=
// <=
// ===
var_dump($nb1 === $nb2);

if ($nb1 >= $nb2) {
    echo 'Egaux<br>';
} else {
    echo 'Différents<br>';
}


// OPERATEUR LOGIQUES
// AND &&
// or ||
// xor

// 1: Moniseur, 2: Madame
$civilite = 2;
// >= 18: majeur, < 18: mineur
$age = 18;




if($civilite == 1 && $age >= 18) {
    echo 'Bonjour Monsieur, vous êtes majeur';
} else if($civilite == 1 && $age < 18) {
    echo 'Bonjour Monsieur, vous êtes mineur';
} else if($civilite == 2 && $age >= 18){
    echo 'Bonjour Madame, vous êtes majeur';
}


echo '<br>';
$prenom = 'Bob';

if($prenom === 'Maurice' || $prenom === 'Bob'){
    echo 'Bonjour';
}

if(1 === 1) {
    echo 'OUI 1 VAUT 1';
}