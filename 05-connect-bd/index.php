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
    $query = $pdo->query("SELECT * FROM todos ORDER BY complete, due_date");
    $todos = $query->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="container py-4">
        <h1><i class="bi bi-list-task"></i> Liste des tâches</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col"><i class="bi bi-check2-square"></i></th>
                    <th scope="col">Title</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($todos as $todo) : ?>
                    <tr>
                        <th><input type="checkbox" <?= $todo['complete'] ? 'checked' : '' ?>></th>
                        <td class="<?= $todo['complete'] ? 'text-decoration-line-through' : '' ?>"><?= $todo['title'] ?></td>
                        <td>
                            <a href="todo_details.php?id=<?= $todo['id'] ?>" class="btn btn-primary"><i class="bi bi-info-circle"></i></a>
                            <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                            <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>