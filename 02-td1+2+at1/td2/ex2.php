<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Exerice 2</title>
</head>
<body>    
    <div class="container">
        <?php include 'menu.html' ?>
        <br>
        <div class="jumbotron">
            <h2 class="display-4">Exercice 2</h2>
            <p class="lead">Ecrire un script en PHP permettant de remplir un tableau par 50 lettres majuscules au hasard, puis de compter la fréquence d’apparition de chaque lettre dans ce tableau et de ranger les résultats statistiques dans un autre tableau associatif.</p>        
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
                                $tablettre[$i] = chr(mt_rand(65, 90));
                            }
                            echo "<p>Le tableau est le suivant :";
                            echo "<table class=\"table table-striped\"><tr>";
                            for ($i=0; $i < count($tablettre); $i++) {
                                if ($i == 25) echo "</tr><tr>";
                                echo "<td>".$tablettre[$i]."</td>";                                
                            }
                            echo "</tr></table></p>";                                                        
                            for ($k = 65; $k<91; $k++) {
                                $taboccur[chr($k)] = 0;
                            }                            
                            foreach ($tablettre as $value) {
                                $taboccur[$value]++;
                            }                            
                            echo "<p>Les occurences des caractères sont comme suit :";
                            echo "<table class=\"table table-striped\"><tr>";
                            foreach ($taboccur as $key => $value) {                                
                                echo "<th>".$key."</th>";                                
                            }
                            echo "</tr><tr>";
                            foreach ($taboccur as $value) {                                
                                echo "<td>".$value."</td>";                                
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
                                $tablettre[$i] = chr(mt_rand(65, 90));
                            }
                            echo "&lt;p&gt;Le tableau est le suivant :";
                            echo "&lt;table class=\"table table-striped\"&gt;&lt;tr&gt;";
                            for ($i=0; $i < count($tablettre); $i++) {
                                if ($i == 25) echo "&lt;/tr&gt;&lt;tr&gt;";
                                echo "&lt;td&gt;".$tablettre[$i]."&lt;/td&gt;";                                
                            }
                            echo "&lt;/tr&gt;&lt;/table&gt;&lt;/p&gt;";
                            $taboccur = array( 'A' => 0 , 'B'=> 0, 'C' => 0, 'D' => 0 , 'E'=> 0, 'F' => 0, 'G' => 0,  'H' => 0,
                                                'I' => 0 , 'J'=> 0, 'K' => 0, 'L' => 0 , 'M'=> 0, 'N' => 0, 'O' => 0,  'P' => 0,
                                                'Q' => 0 , 'R'=> 0, 'S' => 0, 'T' => 0 , 'U'=> 0, 'V' => 0, 'W' => 0,  'X' => 0,
                                                'Y' => 0, 'Z' => 0);                                                     
                            foreach ($tablettre as $value) {
                                $taboccur[$value]++;
                            }                            
                            echo "&lt;p&gt;Les occurences des caractères sont comme suit :";
                            echo "&lt;table class=\"table table-striped\"&gt;&lt;tr&gt;";
                            foreach ($taboccur as $key => $value) {                                
                                echo "&lt;th&gt;".$key."&lt;/th&gt;";                                
                            }
                            echo "&lt;/tr&gt;&lt;tr&gt;";
                            foreach ($taboccur as $value) {                                
                                echo "&lt;td&gt;".$value."&lt;/td&gt;";                                
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