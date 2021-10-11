<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les bases du PHP</title>
</head>

<body>
    <h2>Les types en PHP</h2>

    <h4>1. Chaînes de caractères</h4>
    <?php
    $texte1 = "Bonjour";
    $texte2 = 'tout le monde';

    // utilisation des guillemets doubles dans la concaténation
    $username = "Mohamed";
    $msg = "Bonjour $username<br>";
    echo $msg;
    $msg = "Bonjour " . $username . "<br>";
    echo $msg;
    $msg = "Bonjour {$username}<br><br>";
    echo $msg;

    // utilisation des guillemets simples dans la concaténation
    $username = "Bilel";
    $msg = 'Bonjour $username<br>';
    echo $msg;
    $msg = 'Bonjour ' . $username . '<br>';
    echo $msg;
    ?>

    <h4>2. Nombres</h4>
    <?php
    $nombre1 = 10;
    $nombre2 = 25.54;
    echo gettype($nombre1) . "<br>";
    echo gettype($nombre2) . "<br>";
    ?>

    <h4>3. Booléen</h4>
    <?php
    $bool1 = true;
    $bool2 = false;
    echo gettype($bool1) . "<br>";
    echo gettype($bool2) . "<br>";
    ?>
    <h4>4. Null</h4>
    <?php
    $users = null;
    echo gettype($users) . "<br>";
    ?>

    <h4>5. Tableaux</h4>
    <?php
    // tableau indexé
    $numbers1 = [1, 2, 3, 4, 5];
    echo gettype($numbers1) . "<br>";
    $numbers2 = array(1, 2, 3, 4, 5);
    echo gettype($numbers2) . "<br>";
    echo $numbers2[3] . "<br>";

    // tableau associatif
    $user = [
        "firstname" => "Bilel",
        "lastname" => "BEN MOHAMED",
        "age" => 25
    ];
    echo gettype($user) . "<br>";
    echo $user["firstname"] . "<br>";
    echo $user["age"] . "<br>";
    $user["address"] = "Bizerte";
    echo $user["address"] . "<br>";
    ?>
    <h4>6. Conversions</h4>
    <?php
    $a = '10';
    echo gettype($a) . "<br>";
    $b = (int) $a;
    echo gettype($b) . "<br>";
    $c = (float) $a;
    echo gettype($c) . "<br>";
    $d = (bool) $a;
    echo gettype($d) . "<br>";
    ?>
</body>

</html>