<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factorielle</title>
    <style>
        body{
            text-align : center;
        }
    </style>
</head>
<body>
    <?php
        echo "<h2>Correction de l'exercice 1</h2><br>";
        $nb = mt_rand(2,20);
        $f = 1;
        for ($i=2; $i <= 20; $i++) { 
            $f*=$i;
        }
        echo "<h2>$nb ! = ".$f."</h2>";
    ?>
</body>
</html>