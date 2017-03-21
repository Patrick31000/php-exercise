<!DOCTYPE html>
<html>
    <head>
      <title> Exercice 4 PHP Form</title>
    </head>
	<body>

    <h1>Formulaire</h1>

    <form action="user.php" method="post">
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
      Ton nom est <?php echo $_POST["nom"]; ?><br>
      Ton prénom est <?php echo $_POST['prenom']; ?>
        </p>
    </body>
</html>
