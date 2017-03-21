<!DOCTYPE html>
<html>
    <head>
      <title> Exercice 5 PHP Form</title>
    </head>
	<body>

    <h1>Formulaire</h1>

    <form action="user.php" method="post">
    <fieldset>
    <div>
    <select>
  <option value="Mr">Mr</option>
  <option value="Mme">Mme</option>

</select>
    </div>
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
      
        </p>
    </body>
</html>
