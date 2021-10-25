<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiplication par 13</title>
    <style>
        body{
            text-align : center;
        }
        table {
            margin-left : 45%;
        }
        .rightAlign{
            text-align : right;
        }
    </style>
</head>
<body>
    <table>
        <?php
            echo "<h2>Correction de l'exercice 2 - Solution 2</h2><br>";
            for ($i=0;$i<14;$i++) {
                $r=$i*13;
            echo "<tr><td class=\"rightAlign\">$i</td><td>*</td><td>13</td><td>=</td>";
            echo "<td class=\"rightAlign\">$r</td></tr>\n";
            }
        ?>
    </table>
</body>
</html>