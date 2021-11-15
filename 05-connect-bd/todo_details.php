<?php
    include './dbconnect.php';
    $query = $pdo->query('SELECT * FROM todos WHERE id='.$_GET['id']);
    $todo = $query->fetch();

    $template = 'todo_details';
    $pageTitle = 'Todo details';
    include './layout.phtml';
    