<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$temperature = 50;
if ($temperature < 0) {
        echo "glacée";
} else if ($temperature >= 0 && $temperature < 25) {
        echo "froide";
} else if ($temperature >= 25 && $temperature < 50) {
        echo "chaude";
} else if ($temperature >= 50 && $temperature < 100) {
        echo "brulante";
} else {
        echo "vapeur";
}
?>
</body>
</html>
