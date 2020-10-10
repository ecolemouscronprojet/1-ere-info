<?php


if(true or true || false) {
    echo 'TEST OK';
}

exit;

echo '<h1>Exercice 1</h1>';
//1 : Monsieur
//2 : Madame
$civilite = 1;

if ($civilite == 1) {
      echo 'Bonjour Monsieur<br>';
}
else if($civilite == 2) {
     echo 'Bonjour Madame<br>';
}
else {
    echo 'Civilité inconnue<br>';
}


echo '<h1>Exercice 2</h1>';

$age = 22;

if($age >= 18) {
    echo 'Vous êtes majeur<br>';
} else {
    echo 'Vous êtes mineur<br>';
}


echo '<h1>Exercice 3</h1>';

$note = 17;

// 20 au top 
// 15 et 19 très bien
// 11  et 14 ça peut aller
// 10 limite
// en desous de 10 nul

if($note == 20){
    echo 'top';
} else if ($note >= 15 and $note <= 19){
    echo 'très bien';
}




/*
if($note < 10){
    echo 'nul<br>';
} else if ($note == 10){
    echo 'limit<br>';
} else if ($note <= 14){
    echo 'ça peut aller<br>';
} else if($note <= 19){
    echo 'très bien<br>';
} else if($note == 20){
    echo 'top';
}*/

echo '<span style="color: red;font-weight: bold">HELLO</span>';





