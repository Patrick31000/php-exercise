<!DOCTYPE html>
<html>
    <head>
      <title> Exercice 10 PHP </title>
    </head>
	<body>
      <p>
     <?php
$departements = array(02 =>"Aisne", 59=>"Nord", 60 => "Oise", 62 => "Pas-de-Calais", 80 => "Somme");
foreach ($departements as $numbers => $departement_count){
echo "Le département ".$departement_count." a le numéro ".$numbers.".<br> ";
}
?>
        </p>
    </body>
</html>
