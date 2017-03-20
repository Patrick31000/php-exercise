<!DOCTYPE html>
<html>
    <head>
      <title> Exercice 4 PHP </title>
    </head>
	<body>
      <p>
     <?php
function Diff($num1, $num2){
    if ($num1 > $num2){
        echo "Le premier nombre est le plus grand <br>";
    }
    else if($num1 < $num2){
        echo "Le premier nombre est le plus petit <br>";
    }
    else {
        echo "Les deux nombres sont identiques <br>";
    }
}

Diff(10, 20);
Diff(20, 20);
Diff(20, 10);
?>
        </p>
    </body>
</html>
