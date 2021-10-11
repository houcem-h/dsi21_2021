<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les bases du PHP</title>
</head>

<body>
    <h2>Les fonctions en PHP</h2>
    <?php
    // Fonction sans paramètre
    function hello()
    {
        echo 'Bonjour !';
    }
    hello();
    echo '<br>';
    // Fonction avec paramètre
    function bonjour($nom)
    {
        echo 'Bonjour ' . $nom . ' !';
    }
    bonjour('Marie');
    echo '<br>';
    // Fonction avec paramètre et retour de valeur
    function bonjour2($nom)
    {
        return 'Bonjour ' . $nom . ' !';
    }
    echo bonjour2('Marie');
    echo '<br>';
    // Fonction avec paramètre et retour de valeur typés
    function bonjour3(string $nom): string
    {
        return 'Bonjour ' . $nom . ' !';
    }
    echo bonjour3('Marie');
    echo '<br>';
    // echo bonjour3([1, 2, 3]);

    // null safety operator
    // function bonjour4($nom): string
    function bonjour4($nom): ?string
    {
        if ($nom != null) {
            return 'Bonjour ' . $nom . ' !';
        }
        return null;
    }
    echo bonjour4('Marie');
    echo '<br>';
    echo bonjour4(null);

    // valeur par défaut d'un paramètre
    function bonjour5(string $nom = 'Marie'): string
    {
        return 'Bonjour ' . $nom . ' !';
    }
    echo bonjour5("Robert");
    echo '<br>';
    echo bonjour5();
    ?>
</body>

</html>