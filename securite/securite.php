<?php
session_start();

// n'est pas connecté
if (isset($_SESSION['user']) === false) {
    // identifiant
    $username = "ecole";
    $password = "ecole2021";

    // vérifier que tous les champs requis soient là
    if (
        isset($_POST['username']) === false
        || isset($_POST['password']) === false
    ) {
        header('location: login.php');
        exit;
    }

    // vérifier que les identifiants match
    if (
        $_POST['username'] === $username
        && $_POST['password'] ===  $password
    ) {
        $_SESSION['user'] = $username;
    } else {
        echo 'vos indentifiants ne sont pas corrects';
    }
}


if (isset($_SESSION['user'])) {
    echo "<h1>Vous êtes connectés</h1>";
}
