<!DOCTYPE html>
<html>
    <head>
      <title> Exercice 5 PHP ParamURL</title>
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
