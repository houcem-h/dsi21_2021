<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Exercice 1 solution 2</title>
</head>

<body>
    <?php

    require('./tables.php');
    // include('./tables.php');

    echo "<table border=1> ";
    foreach ($mois as $myKey => $myValue) {
        print "<td bgcolor=$couleur[$myKey]>" . $myKey . "</td><td>" . $myValue . "</td>";
        ($myKey % 3 == 0) ? print("</tr><tr>") : print("");
    }
    echo "</table>";

    ?>
</body>

</html>