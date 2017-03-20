<!DOCTYPE html>
<html>
    <head>
      <title> Exercice 6 PHP </title>
    </head>
	<body>
      <p>
     <?php
$departements = array(02 =>"Aisne", 59=>"Nord", 60 => "Oise", 62 => "Pas-de-Calais", 80 => "Somme");
$departements[59]="Marne";
echo $departements[59];
?>
        </p>
    </body>
</html>
