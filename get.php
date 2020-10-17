<?php

//$maVariable = array();
$maVariable = [
    'civilite' => 1,
    'nom' => 'Maurice',
    'prenom' => 'Bob'
];

echo $maVariable['civilite'];

exit;
echo '<pre>';
var_dump($maVariable);

/*if ($_GET['civilite'] == 1) {
    echo 'Bonjour monsieur';
} else if ($_GET['civilite'] == 2) {
    echo 'Bonjour madame';
} else {
    echo 'Bonjour inconnu';
}*/
