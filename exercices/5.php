<?php

/*

// EXERCICE 1
echo '<h1>EXERCICE 1</h1><br>';


$marques = [
    'Peugeot',
    'Renault',
    'Citroen'
];

//array_push($marques, 'audi');
$marques[] = 'audi';
$marques['civilite'] = 'Monsieur';

echo $marques[1];

//… ajout de audi dans le tableau
//echo '<pre>';
//print_r($marques);


echo '<h1>EXERCICE 2</h1><br>';

$marques = [
    'Peugeot',
    'Renault',
    'Citroen'
];

/*echo $marques[0].'<br>';
echo $marques[1].'<br>';
echo $marques[2].'<br>';*/

//foreach($marques as $value){

    if (false) {
        foreach ($marques as $key => $value) {
            echo $key . ' ' . $value . '<br>';
        }
    }
    
    /*foreach ($marques as $key => $value) {
        if(true) {
            echo $key . ' ' . $value . '<br>';
        }
    }*/
    
    
    /*foreach ($marques as $key => $value) {
        //if($value == 'Peugeot' or $value == 'Citroen'){
        if($key == 0 or $key == 2){
            echo $key . ' ' . $value . '<br>';
        }
    }*/
    
    unset($marques[0]);
    unset($marques[1]);
    
    $marques[]='Audi';
    $marques[]='Lada';
    //array_unshift($marques, 'Audi', 'Lada');
    //array_shift($marques);
    //array_pop($marques);
    
    foreach ($marques as $key => $value) {
        echo $key . ' ' . $value . '<br>';
    } 
    
    
    echo '<h1>EXERCICE 3</h1><br>';
    
    $utilisateur = [
        'nom' => 'Dupon',
        'prenom' => 'Roger',
        'dateDeNaissance' => '2000-01-01',
        'adresse' => 'place de la justice',
    
    ];
    
    $utilisateur['prenom'] = 'Bob';
    
    echo '<pre>';
    var_dump($utilisateur);
    //modification
    
    
    echo '<h1>EXERCICE 4</h1><br>';
    
    // $_GET['hour'];
    if($_GET['hour'] >=0 && $_GET['hour'] <=13) {
        echo 'Bonjour';
    } else if($_GET['hour'] >=14 && $_GET['hour'] <=17) {
        echo 'Bonne après midi';
    } else if($_GET['hour'] >=18 && $_GET['hour'] <=23) {
        echo 'Bonsoir';
    
    }
    
echo '<h1>EXERCICE 5</h1><br>';

$voitures = [
    'audi',
    'citroen',
    'renault',
    'peugeot',
];

if (isset($_GET['index'])) {
    $index = $_GET['index'];

    if (isset($voitures[$index])) {
        echo $voitures[$index];
    }
}

/*if (isset($_GET['index'])) {

    if ($_GET['index'] == 0) {
        echo $voitures[0];
    } else if ($_GET['index'] == 1) {
        echo $voitures[1];
    } else if ($_GET['index'] == 2) {
        echo $voitures[2];
    }
}*/
