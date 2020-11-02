<?php
$color = '#FFF';
if(isset($_GET['color'])) {
    $color = $_GET['color'];
}

/*if (isset($_GET['color'])) {
    if ($_GET['color'] == 1) {
        $color = '#FF0000';
    } else if ($_GET['color'] == 2) {
        $color = 'green';
    } else if ($_GET['color'] == 3) {
        $color = 'blue';
    }
}*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: <?= $color ?>">


</body>

</html>