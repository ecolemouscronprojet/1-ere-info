<?php

$nombre = 7;

function table_multiplication($n){
    $chaine = '';
    for($i=1;$i<=10;$i++) {
        $chaine = $chaine . $i . '*' . $n . '=' . ( $i * $n ). '<br>';
    }
    return $chaine;
}

$m1 = table_multiplication(7);

$m2 = table_multiplication(10);


echo $m2;
echo '<br>';
echo $m1;
