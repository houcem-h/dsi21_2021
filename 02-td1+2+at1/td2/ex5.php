<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Exerice 5</title>
</head>
<body>    
    <div class="container">
        <?php include 'menu.html' ?>
        <br>
        <div class="jumbotron">
            <h2 class="display-4">Exercice 5</h2>
            <p class="lead">Ecrire un script en PHP permettant de remplir un tableau associatif par les informations sur 5 de vos amis, avec comme indice les noms de famille, et come valeur les prénoms, les numéros CIN et les villes. Afficher ce tableau dans une liste HTML en utilisant la boucle for, la boucle foreach et la boucle while.</p>        
        </div>
        <br>
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Exécution <i class="fas fa-laptop-code"></i>
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <?php
                            $amis = array(
                                "Ouali" => array(
                                    "prenom" => "Mohamed",
                                    "CIN" => "01234567",
                                    "ville" => "Bizerte"
                                ),
                                "Amraoui" => array(
                                    "prenom" => "Aymen",
                                    "CIN" => "87654321",
                                    "ville" => "Menzel Bourguiba"
                                ),
                                "Jenhani" => array(
                                    "prenom" => "Ahmed Zeki",
                                    "CIN" => "65432198",
                                    "ville" => "Paris"
                                ),
                                "Ben Nasr" => array(
                                    "prenom" => "Sleh",
                                    "CIN" => "96325874",
                                    "ville" => "El Ali"
                                ),
                                "Gahbiche" => array(
                                    "prenom" => "Mohamed Habib",
                                    "CIN" => "78963214",
                                    "ville" => "Sousse"
                                )
                            );
                            echo '<p class="display-4">La liste des amis est :</p>';                                                       
                            
                            foreach ($amis as $key => $value) {
                                echo '<ul class="list-group">';
                                echo '<li class="list-group-item active">'.$key.'</li>';
                                foreach ($value as $elem) {
                                    echo '<li class="list-group-item">'.$elem.'</li>';
                                }
                                echo '</ul><hr>';
                            }                                                                                                                                                   
                        ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Réponse &nbsp;<i class="fab fa-php"></i>
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <pre>
                            $amis = array(
                                "Ouali" => array(
                                    "prenom" => "Mohamed",
                                    "CIN" => "01234567",
                                    "ville" => "Bizerte"
                                ),
                                "Amraoui" => array(
                                    "prenom" => "Aymen",
                                    "CIN" => "87654321",
                                    "ville" => "Menzel Bourguiba"
                                ),
                                "Jenhani" => array(
                                    "prenom" => "Ahmed Zeki",
                                    "CIN" => "65432198",
                                    "ville" => "Paris"
                                ),
                                "Ben Nasr" => array(
                                    "prenom" => "Sleh",
                                    "CIN" => "96325874",
                                    "ville" => "El Ali"
                                ),
                                "Gahbiche" => array(
                                    "prenom" => "Mohamed Habib",
                                    "CIN" => "78963214",
                                    "ville" => "Sousse"
                                )
                            );
                            echo '&lt;p class="display-4"&gt;La liste des amis est :&lt;/p&gt;';                                                       
                            
                            foreach ($amis as $key => $value) {
                                echo '&lt;ul class="list-group"&gt;';
                                echo '&lt;li class="list-group-item active"&gt;'.$key.'&lt;/li&gt;';
                                foreach ($value as $elem) {
                                    echo '&lt;li class="list-group-item"&gt;'.$elem.'&lt;/li&gt;';
                                }
                                echo '&lt;/ul&gt;&lt;hr&gt;';
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