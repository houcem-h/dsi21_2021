<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Exercice 2</title>
</head>

<body>

    <?php
    $dicoMois = array(
        "January" => 'Janvier',
        'February' => 'Février', 'March' => 'Mars',
        'April' => 'Avril', 'May' => 'Mai',
        'June' => 'Juin', 'July' => 'Juillet',
        'August' => 'Aout', 'September' => 'Septembre',
        'October' => 'Octobre',
        'November' => 'Novembre', 'December' => 'Décembre'
    );
    $dicoSemaine = array(
        "Monday" => 'Lundi',
        'Tuesday' => 'Mardi',
        'Wednesday' => 'Mercredi',
        'Thursday' => 'Jeudi',
        'Friday' => 'Vendredi',
        'Saturday' => 'Samedi',
        'Sunday' => 'Dimanche'
    );
    echo "<table>";
    foreach ($dicoSemaine as $k => $myValue) {
        print "<tr><td>Anglais : 
        $k </td><td><font color=blue> Français :  
        $myValue </td></tr></div>";
    }
    echo "</table>";
    ?>

</body>

</html>