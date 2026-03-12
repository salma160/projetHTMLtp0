<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style_muls.css">
</head>
<body>
    <div class="container">
        <?php
   for($i=0;$i<=10;$i++)
    { 
        echo "<article>";
        echo"<h3>Table de multiplication de $i</h2>";

    for($j=0;$j<=10;$j++)
        {
            $produit=$i*$j;
            echo "$i*$j=$produit".'</br>';

        }
        echo "</article>";
   }

   
   
   ?>

    </div>
   
</body>
</html>