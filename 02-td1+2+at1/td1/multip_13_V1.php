<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiplication par 13</title>
    <style>
        body{
            text-align : center;
        }
    </style>
</head>
<body>
    <?php
        echo "<h2>Correction de l'exercice 2 - Solution 1</h2><br>";
        for ($i=0;$i<14;$i++) {
            $r=$i*13;
            echo "$i*13=$r<br />\n";
        }
    ?>    
</body>
</html>