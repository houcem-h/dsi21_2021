<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les bases du PHP</title>
</head>

<body>
    <h2>Les conditions en PHP</h2>
    <?php
    echo 'les opérateurs de comparaison: ==, ===, !=, !==, <, >, <=, >= <br>';
    if ('1' == 1) echo 'égaux<br>';
    else echo 'different<br>';
    if ('1' === 1) echo 'égaux<br>';
    else echo 'different<br>';
    $x = 0;
    switch ($x) {
        case 0:
            echo ('Salut');
            break;
        case 1:
            echo ('Yo');
            break;
        default:
            echo ('Hey');
    }
    ?>
</body>

</html>