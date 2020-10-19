<?php


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

foreach ($marques as $key => $value) {
    echo $key . ' ' . $value . '<br>';
} 