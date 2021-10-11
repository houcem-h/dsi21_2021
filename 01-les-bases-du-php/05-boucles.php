<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les bases du PHP</title>
</head>

<body>
    <h2>Les boucles en PHP</h2>
    <?php
    // Boucle while
    $i = 0;
    while ($i < 5) {
        echo $i . '<br>';
        $i++;
    }
    echo '<hr>';
    // Boucle for
    for ($i = 0; $i < 5; $i++) {
        echo $i . '<br>';
    }
    echo '<hr>';
    // Boucle foreach
    $user = [
        'prenom' => 'Romain',
        'nom' => 'Dupont',
        'age' => 25,
        'ville' => 'Paris'
    ];
    foreach ($user as $key => $value) {
        echo $key . ' : ' . $value . '<br>';
    }
    foreach ($user as $value) {
        echo $value . '<br>';
    }
    echo '<hr>';
    // Boucle do while
    $i = 0;
    do {
        echo $i . '<br>';
        $i++;
    } while ($i < 5);
    ?>
</body>

</html>