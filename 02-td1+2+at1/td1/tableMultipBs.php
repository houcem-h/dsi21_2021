<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table de Multiplication</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <!-- <style>
        table, th, td{
            border : 3px solid black;
            text-align : center;
            padding : 10px;
        }
        table {
            border-collapse : collapse;
            margin-left : 32%;
        }
        h2{
            text-align : center;
        }
    </style> -->
</head>
<body>
    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-6">Correction de l'exercice 3</h1>                
            </div>
        </div>
        <table class="table table-striped table-hover">
        <?php            
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
        ?>
        </table>
    </div>
</body>
<script src="bootstrap4/js/bootstrap.min.js"></script>
</html>