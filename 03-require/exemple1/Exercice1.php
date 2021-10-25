<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Exercice 1 solution 1</title>
</head>

<body>
    <?php
    /*$numeroDeMois = intval(date("m"));*/

    // require('./tables.php');
    include('./tables.php');

    echo '<table border="1"><tr> ';
    for ($i = 1; $i <= 12; $i++) {
        echo "<td>" . $i . "</td><td bgcolor=$couleur[$i]>" . $mois[$i] . "</td>";
        ($i % 3 == 0) ? print("</tr><tr>") : print("");
    }
    echo "</tr></table> ";
    ?>
</body>

</html>