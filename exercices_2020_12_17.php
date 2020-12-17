<?php

$i = 0;

while ($i <= 100) {
    $i += 2;
    if($i > 50){
        break;
    }
    echo $i . ' yo<br>';
}


$i = 0;

while ($i <= 100) {
    $i += 2;
    if ($i > 50) {
        continue;
    }
    echo $i . ' yo<br>';
}



$i = 0;

while ($i <= 100) {
    if ($i >= 50) {
        echo $i . ' yo<br>'; 
    }
    $i += 2;
}



$users = ['toto', 'Roger', 'Dylan', 'Morgan', 'Jonathan', 'David'];

$i= 0;
while($i<count($users)){
    echo $users[$i].'<br>';
    $i++;
}



$users = ['toto', 'Roger', 'Dylan', 'Morgan', 'Jonathan', 'David'];

while($user = array_shift($users)) {
    echo $user.'<br>';
}


$a = null;
$b = 2;
$c = 3;

echo $a ?? $b ?? $c;

for ($j = 0; $j < 6; $j++) {
    $color = $j % 2 === 0 ? 'red' : 'blue';

    echo '<span style="color: '  . $color. '">Hello World</span><br>';
}

for ($j = 1; $j < 10; $j++) {
    $size = $j*5;
    echo '<span style="font-size: '  . $size. '">Hello World</span><br>';
}