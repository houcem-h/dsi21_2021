<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <title>Gestion des tâches</title>
</head>

<body>
    <?php
    $pdo = new PDO('mysql:host=localhost;dbname=dsi21_todo_app', 'root', '');
    $query = $pdo->query('SELECT * FROM todos WHERE id='.$_GET['id']);
    $todo = $query->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <h3>Détails de <?= $todo['title'] ?></h3>
            </div>
            <div class="col">
                <a href="./index.php" class="btn btn-primary float-end"><i class="bi bi-house"></i></a>
            </div>
        </div>
        <div class="card" style="width: 38rem;">
            <div class="card-body">
                <div class="card-title">
                    <p><strong>Titre:</strong></p>
                    <h5 class="card-title"><?= $todo['title'] ?></h5>
                </div>
                <hr>
                <div class="card-text">
                    <p><strong>Description:</strong></p>
                    <p><?= $todo['description'] ?></p>
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Status:</strong> <?= $todo['complete'] ? 'Complete' : 'Incomplete'; ?></li>
                <li class="list-group-item"><strong>due date:</strong> <?= date_format(date_create($todo['due_date']), 'D F d Y') ?></li>
            </ul>
            <div class="card-body">
                <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>