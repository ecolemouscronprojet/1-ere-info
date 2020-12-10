<?php


function sapin(int $taille): string
{
    $_sapin = '<div style="text-align: center">';
    //     ; 3 <=10 ; $i+=1
    for ($i = 1; $i <= $taille; $i++) {
        //         ; 1 <= 3; $j +=1
        //         ; 2 <= 3; $j +=1
        //         ; 3 <= 3; $j +=1
        for ($j = 1; $j <= $i; $j++) {
            $_sapin .=  '* ';
        }
        $_sapin .=  '<br>';
    }
    $_sapin .=  '</div>';
    return $_sapin;
}

$sapin1 = sapin(20);

//echo $sapin1;
//exit;


function fibonacci(int $maxNombre): string
{
    $suite = [
        0,
        1
    ];

    $i = 0;
    while (count($suite) <= $maxNombre) {
        $suite[] = $suite[$i] + $suite[$i + 1];
        $i++;
    }

    return implode(', ', $suite);
}

function maj(string $chaine): string {
    $ligne = '';
    for($i=0; $i<strlen($chaine); $i++){
        // SI $chaine[$i] = ' '
        // concatène $ligne à  $chaine[$i]
        // SINON
            $code  = ord($chaine[$i]) -32;
            $ligne .= chr($code);
         // endif   
    }

    return $ligne;
}

echo maj('salut comment tu vas');