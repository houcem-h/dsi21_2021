<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair | Impair</title>
    <style>
        body{
            text-align : center;
        }
    </style>
</head>
<body>
    <?php
        echo "<h2>Correction de l'exercice 4</h2><br>";
        $compteur=0;
        do
        {
            $x=rand(0,1000);
            $y=rand(0,1000);
            $compteur++;
            echo "$x |  $y    <br/>";
        }while (($x%2!=0) OR ($y%2==0));
        echo "Résultat obtenu en $compteur coups";
    ?>
</body>
</html>