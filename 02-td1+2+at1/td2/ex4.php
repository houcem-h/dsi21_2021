<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Exerice 4</title>
    <style>
        .exemple, .exemple tr, td{
            border : 1px solid black;
            border-collapse : collapse;
            padding : 10px;
        }
    </style>
</head>
<body>    
    <div class="container">
        <?php include 'menu.html' ?>
        <br>
        <div class="jumbotron">
            <h2 class="display-4">Exercice 4</h2>
            <p class="lead">On se propose d’écrire un script en PHP qui permet de remplir un tableau avec 20 entiers de 2 chiffres au hasard égaux deux par deux. Transformer ensuite ce tableau en tableau symétrique.</p>        
            <hr class="my-4">
            <i class="fas fa-info-circle"></i>&nbsp;<b><u>Exemple</u></b>
            <p>Etat initial du tableau :
            <table class="exemple">
                <tr>
                    <td>35</td><td>35</td><td>81</td><td>81</td><td>11</td><td>11</td><td>29</td><td>29</td><td>33</td><td>33</td>
                    <td>69</td><td>69</td><td>42</td><td>42</td><td>19</td><td>19</td><td>95</td><td>95</td><td>74</td><td>74</td>
                </tr>
            </table></p>
            <p>Etat final du tableau :
            <table class="exemple">
                <tr>
                    <td>35</td><td>81</td><td>11</td><td>29</td><td>33</td><td>69</td><td>42</td><td>19</td><td>95</td><td>74</td>
                    <td>74</td><td>95</td><td>19</td><td>42</td><td>69</td><td>33</td><td>29</td><td>11</td><td>81</td><td>35</td>
                </tr>
            </table></p>
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
                            for ($i=0; $i < 20; $i+=2) { 
                                $myTab[$i] = mt_rand(10, 99);
                                $myTab[$i+1] = $myTab[$i];
                            }
                            echo "<p>Le tableau initial est le suivant :";
                            echo "<table class=\"table table-striped\"><tr>";
                            for ($i=0; $i < count($myTab); $i++) {                                
                                echo "<th>".$myTab[$i]."</th>";                                
                            }
                            echo "</tr></table></p>";                            
                            for ($i=0; $i < 10; $i++){
                                for ($j=$i+1; $j < count($myTab)-$i-1; $j++){
                                    $myTab[$j] = $myTab[$j+1];
                                }
                                $myTab[count($myTab)-$i-1] = $myTab[$i];
                            }
                            echo "<p>Le tableau finale est le suivant :";
                            echo "<table class=\"table table-striped\"><tr>";
                            for ($i=0; $i < count($myTab); $i++) {                                
                                echo "<th>".$myTab[$i]."</th>";                                
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
                            for ($i=0; $i < 20; $i+=2) { 
                                    $myTab[$i] = mt_rand(10, 99);
                                    $myTab[$i+1] = $myTab[$i];
                                }
                                echo "$lt;p>Le tableau initial est le suivant :";
                                echo "$lt;table class=\"table table-striped\">$lt;tr>";
                                for ($i=0; $i < count($myTab); $i++) {                                
                                    echo "$lt;th>".$myTab[$i]."$lt;/th>";                                
                                }
                                echo "$lt;/tr>$lt;/table>$lt;/p>";                            
                                for ($i=0; $i < 10; $i++){
                                    for ($j=$i+1; $j < count($myTab)-$i-1; $j++){
                                        $myTab[$j] = $myTab[$j+1];
                                    }
                                    $myTab[count($myTab)-$i-1] = $myTab[$i];
                                }

                                echo "$lt;p>Le tableau finale est le suivant :";
                                echo "$lt;table class=\"table table-striped\">$lt;tr>";
                                for ($i=0; $i < count($myTab); $i++) {                                
                                    echo "$lt;th>".$myTab[$i]."$lt;/th>";                                
                            }
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