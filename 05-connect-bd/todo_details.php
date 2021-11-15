<?php
    include './dbconnect.php';
    $query = $pdo->query('SELECT * FROM todos WHERE id='.$_GET['id']);
    $todo = $query->fetch();

    include './todo_details.phtml';
    