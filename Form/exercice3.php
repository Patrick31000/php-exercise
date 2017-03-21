<!DOCTYPE html>
<html>
    <head>
      <title> Exercice 3 PHP Form</title>
    </head>
	<body>

    <h1>Formulaire</h1>

    <form action="user.php" method="get">
    <fieldset>
        <div>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom">
        </div>
        <div>
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom">
            <input type="submit">
        </div>
        </fieldset>
    </form>
      <p>
       <?php
echo $_GET['nom']." ";
echo $_GET['prenom'];


       ?>
        </p>
    </body>
</html>
