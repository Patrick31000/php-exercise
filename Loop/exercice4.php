<!DOCTYPE html>
<html>
    <head>
      <title> Exercice 4 PHP Loop</title>
    </head>
	<body>
      <p>
     <?php
$number = 1;
for($number; $number<=10; $number = $number+($number/2)){
    echo $number." ";
}
?>
        </p>
    </body>
</html>
