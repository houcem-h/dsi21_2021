<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table de Multiplication</title>
    <style>
        table, th, td{
            border : 3px solid black;
            text-align : center;
            padding : 10px;
        }
        table {
            border-collapse : collapse;
            margin-left : 32%;
        }
        h2{
            text-align : center;
        }
    </style>
</head>
<body>
<table>
<?php
    echo "<h2>Correction de l'exercice 3</h2><br>";
    // 1ère ligne
    echo "<tr><td></td>";
    for ($c=1;$c<11;$c++) {
        echo "<th>$c</th>";
    }
    echo "</tr>\n";
    // toutes les lignes
    for ($l=1;$l<11;$l++) {
        // 1 ligne
        echo "<tr><th>$l</th>";
        for ($c=1;$c<11;$c++) {
            $r=$c*$l;
            echo "<td align=\"right\">$r</td>";
        }
        echo "</tr>\n";
    }
?>
</table>
</body>
</html>