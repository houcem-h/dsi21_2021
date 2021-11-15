<?php
    include './dbconnect.php';
    $query = $pdo->prepare('SELECT * FROM todos WHERE id= ?');
    $query->execute([$_GET['id']]);
    $todo = $query->fetch();

    $template = 'todo_details';
    $pageTitle = 'Todo details';
    include './layout.phtml';
    