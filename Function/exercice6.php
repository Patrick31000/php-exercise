<!DOCTYPE html>
<html>
    <head>
      <title> Exercice 6 PHP Function</title>
    </head>
	<body>
      <p>
     <?php
function Bonjour($nom, $prenom, $age){
    echo "Bonjour ".$nom." ".$prenom.", tu as ".$age." ans";
}

Bonjour("Bond", "Jean", "007");

?>
        </p>
    </body>
</html>
