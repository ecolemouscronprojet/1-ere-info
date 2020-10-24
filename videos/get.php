<?php

//echo $_GET['civilite'] . ' '  . $_GET['prenom'];
//echo '<pre>';
//print_r($_GET);

$civilite = $_GET['civilite'];

//echo $civilite;

if ($civilite == 1) {
    echo 'Bonjour Monsieur<br>';
} else if ($civilite == 2) {
    echo 'Bonjour Madame<br>';
} else {
    echo 'Civilité inconnue<br>';
}
