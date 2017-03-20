<!DOCTYPE html>
<html>
    <head>
      <title> Exercice 7 PHP </title>
    </head>
	<body>
      <p>
     <?php
function Gender($age, $genre){
    if ($age >= 18 && $genre === "homme"){
        echo "Vous êtes un homme et vous êtes majeur.";
    }
else if ($age < 18 && $genre === "homme") {
    echo "Vous êtes un homme et vous êtes mineur.";
}
else if ($age >=18 && $genre === "femme") {
    echo "Vous êtes une femme et vous êtes majeure.";
}
else if ($age < 18 && $genre === "femme" ) {
    echo "vous êtes une femme et vous êtes mineure.";
}
}

Gender(18, "femme");

?>
        </p>
    </body>
</html>
