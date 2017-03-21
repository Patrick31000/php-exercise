<!DOCTYPE html>
<html>
    <head>
      <title> Exercice 1 PHP </title>
    </head>
	<body>
      <p>
     <?php
if ((isset($_GET['dateDebut']))&&(isset($_GET['dateFin']))){
    echo $_GET['dateDebut']." ".$_GET['dateFin'];
}
    else {
        echo "ca merde ...";
    }


?>
        </p>
    </body>
</html>
