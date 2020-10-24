<?php

$voitures = [
    'audi',
    'porsche',
    'ferrari',
    'peugeot',
    'audi',
    'porsche',
    'ferrari',
    'peugeot',
    'audi',
    'porsche',
    'ferrari',
    'peugeot',
    'audi',
    'porsche',
    'ferrari',
    'peugeot',
    'opel',
    'civilite' => 'Mr',
    'nom' => 'Lassoie',
];


/*echo $voitures[0].'<br>';
echo $voitures[1].'<br>';
echo $voitures[2].'<br>';
echo $voitures[3].'<br>';
echo $voitures[4].'<br>';*/
//foreach($voitures as $voiture) {

foreach($voitures as $key => $voiture) {
    echo $key . ' ' . $voiture . ' OK<br>';
}
