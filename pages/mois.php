<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$mois = 12;
$annee = 2000;

switch ($mois) {
    case 4:
    case 6:
    case 9:
    case 11:
        echo "30jrs";
        break;
    case 2:
        if ($annee % 4 == 0) {
            echo "29jrs";
        } else {
            echo "28jrs";
        }
        break;
    default:
        echo "31jrs";
}
?>
</body>
</html>