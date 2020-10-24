<?php

//initialisation du tableau
$t1 = [];
$t2 = array();
$t3 = [ 
    'rock', 
    'rap',
];

//Ajout élément dans le tableau
array_push($t1, 'audi', 'peugeot', 'citroen', 'lada');
$t2[] = 'orange';
$t2[] = 'banane';
$t2[] = 'pomme';

//echo '<pre>';
//var_dump($t3);

//echo $t2[0];





// tableau associatif
$personne = [
    'civilite' => 'MR',
    'nom' => 'lassoie',
    'prenom' => 'samuel'
];

echo $personne['civilite'] .' '. $personne['nom'] . ' '. $personne['prenom'];
 



