<?php
session_start();

if(isset($_SESSION['user']) === false){
    header('location: login.php');
    exit;
}

echo 'yoo';