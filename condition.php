<?php
echo '<h1>Exercice 1</h1>';

$nb1 = 20;
$nb2 = 35.6;
// + | - | % | /
$action = '%';

if ($action === '+') {
    echo $nb1 + $nb2;
} else if ($action === '-') {
    echo $nb1 - $nb2;
} else if ($action === '/') {
    echo $nb1 / $nb2;
} else if ($action === '%') {
    echo $nb1 % $nb2;
}









echo '<br>';
$note = 11.5;

switch($note){
    case 10.5: 
        echo  'passabe';
    break;
    case 18: 
        echo  'bien';
    break;
    case 19: 
    case 20: 
        echo  'très bien';
    break;
    default:
        echo 'VALEUR NON TROUVEE'; 
}



exit;
echo '<h1>Exercice 2</h1>';

// 1: français, 2: math, 3: géographie
// 4: morale, 
// 5: religion catholique
// 6: religion protestante
$cours = 7;
$variable = 'Vous êtes en cours';

//$variable .= ' français';

if ($cours == 1) {
    $variable = $variable . ' français';
} else if ($cours == 2) {
    $variable = $variable . ' math';
} else if ($cours == 3) {
    $variable = $variable . ' géographie';
} else if ($cours == 4 or $cours == 5 or $cours == 6){
    $variable = $variable . ' religion';
}


echo $variable;




