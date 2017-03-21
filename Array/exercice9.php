<!DOCTYPE html>
<html>
    <head>
      <title> Exercice 9 PHP Array</title>
    </head>
	<body>
      <p>
     <?php
$departements = array(02 =>"Aisne", 59=>"Nord", 60 => "Oise", 62 => "Pas-de-Calais", 80 => "Somme");
foreach ($departements as $departement_count){
echo $departement_count." ";
}
?>
        </p>
    </body>
</html>
