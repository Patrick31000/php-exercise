<!DOCTYPE html>
<html>
    <head>
      <title> Exercice 1 PHP </title>
    </head>
	<body>
      <p>
     <?php
if ((isset($_GET['batiment']))&&(isset($_GET['salle']))){
    echo $_GET['batiment']." ".$_GET['salle'];
}
    else {
        echo "ca merde ...";
    }


?>
        </p>
    </body>
</html>
