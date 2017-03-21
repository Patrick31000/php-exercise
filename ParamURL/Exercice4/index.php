<!DOCTYPE html>
<html>
    <head>
      <title> Exercice 1 PHP </title>
    </head>
	<body>
      <p>
     <?php
if ((isset($_GET['langage']))&&(isset($_GET['serveur']))){
    echo $_GET['langage']." ".$_GET['serveur'];
}
    else {
        echo "ca merde ...";
    }


?>
        </p>
    </body>
</html>
