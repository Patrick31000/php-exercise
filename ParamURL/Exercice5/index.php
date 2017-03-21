<!DOCTYPE html>
<html>
    <head>
      <title> Exercice 1 PHP </title>
    </head>
	<body>
      <p>
     <?php
if (isset($_GET['semaine'])){
    echo $_GET['semaine'];
}
    else {
        echo "ca merde ...";
    }


?>
        </p>
    </body>
</html>
