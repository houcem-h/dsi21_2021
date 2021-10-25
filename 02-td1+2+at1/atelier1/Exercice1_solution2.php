<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exercice 1 solution 2</title>
</head>

<body>
<?php 
// $numeroDeMois = intval(date("m"));
// var_dump($numeroDeMois);
$moisFrancais = array(1=>'Janvier','Février','Mars','Avril','Mai','Juin',
    'Juillet','Aout','Septembre','Octobre','Novembre','Décembre');
$cellColor = array(1=>'blue','white','red','yellow','grey','lime',
    'lightblue','fuchsia', 'lightgrey','olive','pink','purple');
echo "<table border=1> ";
foreach($moisFrancais as $myKey => $myValue) 
{
    print "<td bgcolor=$cellColor[$myKey]>".$myKey."</td><td>".$myValue."</td>" ;
    ($myKey%3==0) ? print ("</tr><tr>") : print ("");
}
echo "</table>";

?>
</body>
</html>