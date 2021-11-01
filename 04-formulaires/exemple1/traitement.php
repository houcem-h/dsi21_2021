<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login form</title>
</head>

<body>
    <div class="container py-4">
        <h2>Données saisies par l'utilisateur</h2>
        <ul class="list-group">
            <?php foreach ($_POST as $key => $value) : ?>
                <li class="list-group-item"><?= $key . ": " . $value ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>

</html>