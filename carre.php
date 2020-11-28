<?php


function addition(int $nb1, int $nb2){
    return $nb1 + $nb2;
}

echo addition(5,5);


/*
function plusUn(int &$monNombre){
    $monNombre++;
}


$i = 1.5;


plusUn($i);
echo $i.'<br>';
plusUn($i);
echo $i.'<br>';
plusUn($i);
echo $i.'<br>';


*/

function carre($taille, $couleur) {
    return '<div style="height: ' . $taille. 'px;background: ' . $couleur .';width: ' . $taille . 'px;"></div>';
}


function rectangle($largeur, $longueur, $couleur) {
    $largeur++;
    //$largeur +=1;
    //$largeur = $largeur +1;
    return '<div style="height: ' . $largeur. 'px;background: ' . $couleur .';width: ' . $longueur . 'px;"></div>';
}


echo '<div>SALUT</div>';
$longueur=300;
$largeur=100;
echo rectangle($largeur, $longueur, 'blue');

echo '<br>'.$largeur;
/*
$carre1 = carre(50, "yellow");
echo 'DEBUT DU CARRE';
echo $carre1;*/
//carre(100, "blue");
//carre(300, "#CCC");

exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div style="height: 200px;background:yellow;width: 200px;"></div>
    <div style="height: 300px;background:blue;width: 300px;"></div>
</body>
</html>