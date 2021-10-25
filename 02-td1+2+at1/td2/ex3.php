<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Exerice 3</title>
</head>
<body>    
    <div class="container">
        <?php include 'menu.html' ?>
        <br>
        <div class="jumbotron">
            <h2 class="display-4">Exercice 3</h2>
            <p class="lead">Soit un tableau contenant 50 entiers de 2 chiffres (rempli par hasard). On se propose d’écrire un script PHP permettant d’éclater ce tableau en 2 tableaux : un tableau contenant les entiers pairs, et un autre contenant les entiers impairs.</p>        
        </div>
        <br>
        <div class="accordion" id="accordionExample">
        <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Exécution <i class="fas fa-laptop-code"></i>
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <?php
                            for ($i=0; $i < 50; $i++) { 
                                $myTab[$i] = mt_rand(10, 99);
                            }
                            echo "<p>Le tableau est le suivant :";
                            echo "<table class=\"table table-striped\"><tr>";
                            for ($i=0; $i < count($myTab); $i++) {
                                if ($i == 25) echo "</tr><tr>";
                                echo "<td>".$myTab[$i]."</td>";                                
                            }
                            echo "</tr></table></p>";
                            $tabPair = array();
                            $tabImpair = array();
                            foreach ($myTab as $value) {
                                if ($value % 2 == 0) {
                                    array_push($tabPair, $value);
                                } else {
                                    array_push($tabImpair, $value);
                                }
                            }
                            echo "<p>Le tableau des entier <b>pair</b> :";
                            echo "<table class=\"table table-striped\"><tr>";
                            for ($i=0; $i < count($tabPair); $i++) {
                                if ($i == 25) echo "</tr><tr>";
                                echo "<td>".$tabPair[$i]."</td>";                                
                            }
                            echo "</tr></table></p>";
                            echo "<p>Le tableau des entier <b>impair</b> :";
                            echo "<table class=\"table table-striped\"><tr>";
                            for ($i=0; $i < count($tabImpair); $i++) {
                                if ($i == 25) echo "</tr><tr>";
                                echo "<td>".$tabImpair[$i]."</td>";                                
                            }
                            echo "</tr></table></p>";
                        ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Réponse &nbsp;<i class="fab fa-php"></i>
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <pre>
                            for ($i=0; $i < 50; $i++) { 
                                $myTab[$i] = mt_rand(10, 99);
                            }
                            echo "&lt;p&gt;Le tableau est le suivant :";
                            echo "&lt;table class=\"table table-striped\"&gt;&lt;tr&gt;";
                            for ($i=0; $i < count($myTab); $i++) {
                                if ($i == 25) echo "&lt;/tr&gt;&lt;tr&gt;";
                                echo "&lt;td&gt;".$myTab[$i]."&lt;/td&gt;";                                
                            }
                            echo "&lt;/tr&gt;&lt;/table&gt;&lt;/p&gt;";
                            $tabPair = array();
                            $tabImpair = array();
                            foreach ($myTab as $value) {
                                if ($value % 2 == 0) {
                                    array_push($tabPair, $value);
                                } else {
                                    array_push($tabImpair, $value);
                                }
                            }
                            echo "&lt;p&gt;Le tableau des entier &lt;b&gt;pair&lt;/b&gt; :";
                            echo "&lt;table class=\"table table-striped\"&gt;&lt;tr&gt;";
                            for ($i=0; $i < count($tabPair); $i++) {
                                if ($i == 25) echo "&lt;/tr&gt;&lt;tr&gt;";
                                echo "&lt;td&gt;".$tabPair[$i]."&lt;/td&gt;";                                
                            }
                            echo "&lt;/tr&gt;&lt;/table&gt;&lt;/p&gt;";
                            echo "&lt;p&gt;Le tableau des entier &lt;b&gt;impair&lt;/b&gt; :";
                            echo "&lt;table class=\"table table-striped\"&gt;&lt;tr&gt;";
                            for ($i=0; $i < count($tabImpair); $i++) {
                                if ($i == 25) echo "&lt;/tr&gt;&lt;tr&gt;";
                                echo "&lt;td&gt;".$tabImpair[$i]."&lt;/td&gt;";                                
                            }
                            echo "&lt;/tr&gt;&lt;/table&gt;&lt;/p&gt;";
                        </pre>
                    </div>
                </div>
            </div>            
        </div>        
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>