<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devinette</title>
    <style>
        body{
            text-align : center;
        }
    </style>
</head>
<body>
    <?php
        echo "<h2>Correction de l'exercice 5</h2><br>";
        if(empty($_POST)){
            $x = mt_rand(9, 100);
        }
        echo "<h3>J'ai choisi un nombre entre 10 et 99, essaye de le deviner</h3><br>";
    ?>
    <form method="post" action="">
        <label>Devine </label>
        <input type="number" name="choix" id="choix" placeholder="Un nombre entre 10 et 99">        
        <input type="text" name="msg" id="msg" hidden="true" value="">
        <input type="text" name="tentative" id="tentative" hidden="true" value="<?php if (!empty($_POST["tentative"])) echo $_POST["tentative"];?>">
        <input type="text" name="x" id="x" hidden="true" value="<?php if (!empty($_POST["x"])) echo $_POST["x"]; else echo $x;?>">
        <input type="submit" > 
        <h4> Nombre de tetntative <?php if (!empty($_POST["tentative"])) echo $_POST["tentative"]; else echo 10;?> </h4>      
    </form>
    <?php       
        if(!empty($_POST)){ 
            var_dump($_POST)          ;
            $choix = $_POST["choix"];
            $msg = $_POST["msg"];
            $tentative = $_POST["tentative"]; 
            $x = $_POST["x"];           
            $tentative--;  
            $compteur = "Tentative ".$tentative;
            if ($tentative <= 0)
                $msg = "Vous avez écoulez les 10 tentatives, le numéro secret est ".$x;
            elseif($choix == $x)
                $msg = "<h3>Bravo ! le numéro secret est ".$choix."</h3>";
            elseif($choix > $x)
                $msg = "Plus petit !";
            else
                $msg = "Plus grand !"; 
            echo "<br>".$msg;
        }
    ?>
</body>
</html>