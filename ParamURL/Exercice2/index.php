<!DOCTYPE html>
<html>
    <head>
      <title> Exercice 1 PHP </title>
    </head>
	<body>
      <p>
     <?php
if (!isset($_GET['age'])){
    echo "Le paramètre âge n'existe pas !";
}

?>
        </p>
    </body>
</html>
