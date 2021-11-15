<?php
    include './dbconnect.php';
    
    $query = $pdo->query("SELECT * FROM todos ORDER BY complete, due_date");
    $todos = $query->fetchAll();

    include './index.phtml';
    