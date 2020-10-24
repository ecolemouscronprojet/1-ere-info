<?php


$note = 5;

switch ($note) {
    case 0:
    case 1:
    case 2:
        echo 'Insuffisant';
        break;
    case 3:
    case 4:
        echo 'Bien';
        break;
    case 5:
        echo 'Très bien';
        break;
    default:
        echo 'Note non trouvée';
}


/*if($note == 0 || $note == 1 || $note == 2) {
    echo 'Insuffisant';
} else if($note == 3 || $note == 4){
    echo 'Bien';
} else if($note === 5){
    echo 'Très bien';
} else {
    echo 'Note non trouvée';
}*/