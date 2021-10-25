<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>Exerice 6</title>
</head>
<body>    
    <div class="container">
        <?php include 'menu.html' ?>
        <br>
        <div class="jumbotron">
            <h2 class="display-4">Exercice 6</h2>
            <p class="lead">Ecrire un script en PHP permettant de remplir un tableau associatif par les couleurs préférées de 5 de vos amis (le nom comme indice, la couleur (en anglais) comme valeur). Afficher ce tableau dans un tableau HTML. Utiliser jQuery pour appliquer la couleur préférée comme couleur de police pour le nom et comme couleur de fond pour la couleur.</p>        
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
                            $couleurs = array (
                                "Ahmed" => "AntiqueWhite",
                                "Mohamed" => "CadetBlue",
                                "Aymen" => "DarkOrange",
                                "Bilel" => "Fuchsia",
                                "Hatem" => "Lime"
                            );
                            foreach ($couleurs as $key => $value) {
                                echo '<h3 class="colors text-center" id="'.$value.'">'.$key.'</h3>';
                            }
                        ?>
                        <script>
                            $(document).ready(function(){
                                $(".colors").each(function(){                                  
                                    $(this).css("background-color", $(this).attr('id'))
                                });
                            });
                        </script>
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
                            &lt;?php
                                $couleurs = array (
                                    "Ahmed" => "AntiqueWhite",
                                    "Mohamed" => "CadetBlue",
                                    "Aymen" => "DarkOrange",
                                    "Bilel" => "Fuchsia",
                                    "Hatem" => "Lime"
                                );
                                foreach ($couleurs as $key => $value) {
                                    echo '&lt;h3 class="colors text-center" id="'.$value.'">'.$key.'&lt;/h3>';
                                }
                            ?&gt;
                            &lt;script&gt;
                                $(document).ready(function(){
                                    $(".colors").each(function(){                                  
                                        $(this).css("background-color", $(this).attr('id'))
                                    });
                                });
                            &lt;/script&gt;
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