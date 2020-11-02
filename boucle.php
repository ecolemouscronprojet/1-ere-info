<?php
/*$i = 1;
do {
    echo $i.'<br>';
    $i++;
} while(false);*/


/*echo '<h1>WHILE</h1>';
$i = 1;

while($i <= 100) {
    if($i % 2 ==0){
        echo $i.'<br>';
    }
    $i++;
}*/


/*for($i=0;$i<100;$i+=2){
    echo $i . '<br>';
}*/


$cars = [
    '1c ' => 'audi', 
    '2c ' => 'peugeot',
    '3c ' => 'citroen',
    '4c ' => 'lada',
    '5c ' => 'toyota',
    '6c ' => 'renault'
];



echo '<h1>FOR</h1>';
for($i=0; $i < count($cars);$i++){
    echo $cars[$i].'<br>';
}


echo '<h1>FOREACH</h1>';

foreach($cars as $key => $car) {
    echo $key .' '. $car.'<br>';
}