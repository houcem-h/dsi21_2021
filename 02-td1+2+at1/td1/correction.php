<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>Corrigé du TD1</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">
                <i class="far fa-copyright">&nbsp;Houcem Hedhly&nbsp;&nbsp;&nbsp;</i>
                <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#exercice1">Exercice 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#exercice2">Exercice 2</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="#exercice3">Exercice 3</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="#exercice4">Exercice 4</a>
          </li>    
          <li class="nav-item">
            <a class="nav-link" href="#exercice5">Exercice 5</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#exercice6">Exercice 6</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="#exercice7">Exercice 7</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="#exercice8">Exercice 8</a>
          </li>              
        </ul>
      </div>
    </nav> <!-- end of navbar -->
    <div class="container">
        <div class="jumbotron">
            <h2>Corrigé série 1</h2>            
        </div
        <!-- start of exercice 1 -->
        <h2 class=" text-center bg-info text-white" id="exercice1">Exercice 1</h2>        
            <i class="fa fa-question-circle" aria-hidden="true">Question</i>
            <p>Pour chacune des variables suivantes, dites si le nom de la variable est valide. Justifiez si non.</p>
            <p class="text-center">       
                <code data-toggle="popover" data-placement="bottom" data-trigger="hover" title="Invalide" data-content="Ne commence pas par le symbole $">mavar</code>,&nbsp;&nbsp;
                <code data-toggle="popover" data-placement="bottom" data-trigger="hover" title="Valide" data-content="Commence par le symbole $">$mavar</code>,&nbsp;&nbsp;
                <code data-toggle="popover" data-placement="bottom" data-trigger="hover" title="Valide" data-content="Le nom d'une variable peut contenir des chiffres">$var5</code>,&nbsp;&nbsp;
                <code data-toggle="popover" data-placement="bottom" data-trigger="hover" title="Valide" data-content="Le nom d'une variable peut contenir des underscores">$_mavar</code>,&nbsp;&nbsp;
                <code data-toggle="popover" data-placement="bottom" data-trigger="hover" title="Valide" data-content="Le nom d'une variable peut contenir des lettres, des chiffres et des underscores">$_5var</code>,&nbsp;&nbsp;
                <code data-toggle="popover" data-placement="bottom" data-trigger="hover" title="Valide" data-content="Le nom d'une variable peut contenir des de l'extension de la table ASCII comme les caractères accentués">$__élément1</code>,&nbsp;&nbsp;
                <code data-toggle="popover" data-placement="bottom" data-trigger="hover" title="Invalide" data-content="Ne peut pas contenir un caractère spécial * symbole de la multiplication">$hotel4*</code>
            </p>    
            <i class="far fa-lightbulb" data-toggle="tooltip" data-placement="right" title="Passez la souris sur les noms des varibales pour voir les réponses">&nbsp;Réponse</i>                            
        <!-- end of exercice 1 -->
        <br><br>
        <!-- start of exercice 2 -->
        <h2 class=" text-center bg-info text-white" id="exercice2">Exercice 2</h2>        
            <i class="fa fa-question-circle" aria-hidden="true">Question</i>
            <p>Donner la valeur booléene des variables <code>$a</code>, <code>$b</code>, <code>$c</code>, <code>$d</code>, <code>$e</code> et <code>$f</code>:</p>
            <blockquote class="blockquote">
            <ul class="list-unstyled">
                <li><kbd>$a = "0";</kbd></li>
                <li><kbd>$b = "TRUE";</kbd></li>
                <li><kbd>$c = FALSE;</kbd></li>
                <li><kbd>$d = ($a OR $b);</kbd></li>
                <li><kbd>$e = ($a AND $c);</kbd></li>
                <li><kbd>$f = ($a XOR $b);</kbd></li>
            </ul>
            </blockquote>            
            <button class="btn btn-success" data-toggle="collapse" data-target="#corrEx2">            
                <i class="far fa-lightbulb">&nbsp;Réponse Exercice 2</i>
            </button>
            <div id="corrEx2" class="collapse">
                <?php
                    //Display answer for $a 
                    $a = "0";
                    $x = (boolean)$a;                    
                    echo ($x==true)?'<kbd>$a</kbd> vaut <b>TRUE</b><br>':'<kbd>$a</kbd> vaut <b>FALSE</b><br>';
                    //Display answer for $b
                    $b = "TRUE";
                    $x = (boolean)$b;                    
                    echo ($x==true)?'<kbd>$b</kbd> vaut <b>TRUE</b><br>':'<kbd>$b</kbd> vaut <b>FALSE</b><br>';
                    //Display answer for $c
                    $c = FALSE;                   
                    echo ($c==true)?'<kbd>$c</kbd> vaut <b>TRUE</b><br>':'<kbd>$c</kbd> vaut <b>FALSE</b><br>';
                    //Display answer for $d
                    $d = ($a OR $b);
                    $x = (boolean)$d;                    
                    echo ($x==true)?'<kbd>$d</kbd> vaut <b>TRUE</b><br>':'<kbd>$d</kbd> vaut <b>FALSE</b><br>';
                    //Display answer for $e
                    $e = ($a AND $c);
                    $x = (boolean)$e;                    
                    echo ($x==true)?'<kbd>$e</kbd> vaut <b>TRUE</b><br>':'<kbd>$e</kbd> vaut <b>FALSE</b><br>';
                    //Display answer for $f
                    $f = ($a XOR $b);
                    $x = (boolean)$f;                    
                    echo ($x==true)?'<kbd>$f</kbd> vaut <b>TRUE</b><br>':'<kbd>$f</kbd> vaut <b>FALSE</b><br>';
                ?>
            </div>
        <!-- end of exercice 2 -->
        <br><br>
        <!-- start of exercice 3 -->
        <h2 class=" text-center bg-info text-white" id="exercice3">Exercice 3</h2>        
            <i class="fa fa-question-circle" aria-hidden="true">Question</i>
            <p>Donner les valeurs de <code>$x</code>, <code>$y</code> et <code>$z</code> à la fin du script suivant:</p>
            <blockquote class="blockquote">
            <ul class="list-unstyled">
                <li><kbd>$x = "PostgreSQL";</kbd></li>
                <li><kbd>$y = "MySQL";</kbd></li>
                <li><kbd>$z = &$x;</kbd></li>
                <li><kbd>$x = "PHP 7";</kbd></li>
                <li><kbd>$y = &$x;</kbd></li>
            </ul>
            </blockquote>
            <button class="btn btn-success" data-toggle="collapse" data-target="#corrEx3">            
                <i class="far fa-lightbulb">&nbsp;Réponse Exercice 1</i>
            </button>
            <div id="corrEx3" class="collapse">
                <?php
                    $x = "PostgreSQL";
                    $y = "MySQL";
                    $z = &$x;
                    $x = "PHP 7";
                    $y = &$x;
                    echo '<kbd>$x</kbd> = <b>"'.$x.'"</b><br>';
                    echo '<kbd>$y</kbd> = <b>"'.$y.'"</b><br>';
                    echo '<kbd>$z</kbd> = <b>"'.$z.'"</b><br>';
                ?>
            </div>
        <!-- end of exercice 3 -->
        <br><br>
        <!-- start of exercice 4 -->
        <h2 class=" text-center bg-info text-white" id="exercice4">Exercice 4</h2>        
            <i class="fa fa-question-circle" aria-hidden="true">Question</i>
            <p>Ecrire un programme en PHP perettant d'afficher les multiples de <b>3</b> et <b>5</b> entre 6 et 1000. </p>            
            <button class="btn btn-success" data-toggle="collapse" data-target="#corrEx4">            
                <i class="far fa-lightbulb">&nbsp;Réponse Exercice 4</i>
            </button>
            <div id="corrEx4" class="collapse">
                <h4>Le code <i class="fab fa-php"></i></h4>
                <blockquote class="blockquote">
                    <pre>                        
                        echo '< ul class="list-inline">';
                        for ($i=6; $i < 1001; $i++) { 
                            if (($i % 3 == 0) && ($i % 5 == 0)){
                                echo '< li class="list-inline-item">'.$i.'</li>';
                            }                                
                        }
                        echo '</ul>';
                    </pre>
                </blockquote>
                <h4>Exécution <i class="fas fa-laptop-code"></i></h4>               
                <?php
                    echo '<ul class="list-inline">';
                    for ($i=6; $i < 1001; $i++) { 
                        if (($i % 3 == 0) && ($i % 5 == 0)){
                            echo '<li class="list-inline-item">'.$i.'</li>';
                        }                                
                    }
                    echo '</ul>';
                ?>                                
            </div>
        <!-- end of exercice 4 -->
        <br><br>
        <!-- start of exercice 5 -->
        <h2 class=" text-center bg-info text-white" id="exercice5">Exercice 5</h2>        
            <i class="fa fa-question-circle" aria-hidden="true">Question</i>
            <p>Ecrire un programme en PHP permettant de calculer la factorielle d'un entier quelconque.</p>            
            <button class="btn btn-success" data-toggle="collapse" data-target="#corrEx5">            
                <i class="far fa-lightbulb">&nbsp;Réponse Exercice 5</i>
            </button>
            <div id="corrEx5" class="collapse">
                <h4>Le code <i class="fab fa-php"></i></h4>
                <blockquote class="blockquote">
                    <pre>                        
                        $nb = mt_rand(2,20);
                        $f = 1;
                        for ($i=2; $i <= $nb; $i++) { 
                            $f*=$i;
                        }
                        echo "< h2>".$nb."! = ".$f."</ h2>";
                    </pre>
                </blockquote>
                <h4>Exécution <i class="fas fa-laptop-code"></i></h4>               
                <?php
                    $nb = mt_rand(2,20);
                    $f = 1;
                    for ($i=2; $i <= $nb; $i++) { 
                        $f*=$i;
                    }
                    echo "<h2>".$nb."! = ".$f."</h2>";
                ?> 
            </div>
        <!-- end of exercice 5 -->
        <br><br>
        <!-- start of exercice 6 -->
        <h2 class=" text-center bg-info text-white" id="exercice6">Exercice 6</h2>        
            <i class="fa fa-question-circle" aria-hidden="true">Question</i>
            <p>Ecrire un programme en PHP qui affiche la table de multiplication par 13.</p>            
            <button class="btn btn-success" data-toggle="collapse" data-target="#corrEx6">            
                <i class="far fa-lightbulb">&nbsp;Réponse Exercice 6</i>
            </button>
            <div id="corrEx6" class="collapse">
                <h4>Le code <i class="fab fa-php"></i></h4>                
                <div class="row">
                    <div class="col">
                        <h5>Solution 1</h5>
                        <pre>                        
                            for ($i=0;$i<14;$i++) {
                                $r=$i*13;
                                echo "$i*13=$r< br/>";
                            }
                        </pre>
                    </div>
                    <div class="col">
                        <h5>Solution 2</h5>
                        <pre>                        
                            echo "< table>";
                            for ($i=0;$i<14;$i++) {
                                $r=$i*13;
                                echo "< tr>< td class=\"text-right\">$i< /td>< td>*< /td>< td>13< /td>< td>=< /td>";
                                echo "< td>$r< /td>< /tr>";
                            }
                            echo "< /table>";
                        </pre>
                    </div>
                </div>                    
                <h4>Exécution <i class="fas fa-laptop-code"></i></h4>
                <div class="row">
                    <div class="col">
                        <h5>Solution 1</h5>
                        <?php
                            for ($i=0;$i<14;$i++) {
                                $r=$i*13;
                                echo "$i*13=$r<br />\n";
                            }
                        ?>
                    </div>
                    <div class="col">
                        <h5>Solution 2</h5>
                        <?php
                            echo "<table>";
                                for ($i=0;$i<14;$i++) {
                                    $r=$i*13;
                                    echo "<tr><td class=\"text-right\">$i</td><td>*</td><td>13</td><td>=</td>";
                                    echo "<td>$r</td></tr>\n";
                                }
                            echo "</table>";
                        ?>
                    </div>
                </div>               
            </div>
        <!-- end of exercice 6 -->
        <br><br>
        <!-- start of exercice 7 -->
        <h2 class=" text-center bg-info text-white" id="exercice7">Exercice 7</h2>        
            <i class="fa fa-question-circle" aria-hidden="true">Question</i>
            <p>Ecrire un programme en PHP qui affiche la table de multiplication totale de 1 à 10.</p>            
            <button class="btn btn-success" data-toggle="collapse" data-target="#corrEx7">            
                <i class="far fa-lightbulb">&nbsp;Réponse Exercice 7</i>
            </button>
            <div id="corrEx7" class="collapse">
                <h4>Le code <i class="fab fa-php"></i></h4>
                <blockquote class="blockquote">
                    <pre>                        
                        echo '< table class="table table-striped">';
                        // 1ère ligne
                        echo "< tr>< td>< /td>";
                        for ($c=1;$c<11;$c++) {
                            echo "<th scope=\"col\" class=\"text-center\">$c</ th>";
                        }
                        echo "< /tr>\n";
                        // toutes les lignes
                        for ($l=1;$l<11;$l++) {
                            // 1 ligne
                            echo "< tr>< th scope=\"row\" class=\"text-center\">$l</ th>";
                            for ($c=1;$c<11;$c++) {
                                $r=$c*$l;
                                echo "<td class=\"text-center\">$r< /td>";
                            }
                            echo "< /tr>\n";
                        }
                        echo '< /table>';
                    </pre>
                </blockquote>
                <h4>Exécution <i class="fas fa-laptop-code"></i></h4>                               
                <?php            
                    echo '<table class="table table-striped">';
                    // 1ère ligne
                    echo "<tr><td></td>";
                    for ($c=1;$c<11;$c++) {
                        echo "<th scope=\"col\" class=\"text-center\">$c</th>";
                    }
                    echo "</tr>\n";
                    // toutes les lignes
                    for ($l=1;$l<11;$l++) {
                        // 1 ligne
                        echo "<tr><th scope=\"row\" class=\"text-center\">$l</th>";
                        for ($c=1;$c<11;$c++) {
                            $r=$c*$l;
                            echo "<td class=\"text-center\">$r</td>";
                        }
                        echo "</tr>\n";
                    }
                    echo '</table>';
                ?>                
            </div>
        <!-- end of exercice 7 -->
        <br><br>
        <!-- start of exercice 8 -->
        <h2 class=" text-center bg-info text-white" id="exercice8">Exercice 8</h2>        
            <i class="fa fa-question-circle" aria-hidden="true">Question</i>
            <p>Ecrire un programme en PHP qui permet d'effectuer une suite de tirages aléatoires d'une combinaison de deux nombres jusqu'à obtenir une suite composée d'un nombre pair suivi d'un nombre impair.</p>            
            <button class="btn btn-success" data-toggle="collapse" data-target="#corrEx8">            
                <i class="far fa-lightbulb">&nbsp;Réponse Exercice 8</i>
            </button>            
            <div id="corrEx8" class="collapse">
                <h4>Le code <i class="fab fa-php"></i></h4>
                <blockquote class="blockquote">
                    <pre>                        
                        $compteur=0;
                        do
                        {
                            $nb1 = mt_rand(0,1000);                        
                            $compteur++;
                            $nb2 = mt_rand(0,1000);
                            echo "$nb1 |  $nb2    < br/>";
                        }while (($nb1 % 2!=0) OR ($nb2 % 2==0));
                        echo "Résultat obtenu en $compteur coups";
                    </pre>
                </blockquote>
                <h4>Exécution <i class="fas fa-laptop-code"></i></h4>
                <div class="text-center">
                    <?php            
                        $compteur=0;
                        do
                        {
                            $nb1 = mt_rand(0,1000);                        
                            $compteur++;
                            $nb2 = mt_rand(0,1000);
                            echo "$nb1 |  $nb2    <br/>";
                        }while (($nb1 % 2!=0) OR ($nb2 % 2==0));
                        echo "Résultat obtenu en $compteur coups";
                    ?> 
                </div>                                             
            </div>
        <!-- end of exercice 8 -->
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();  
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
</html>