<!DOCTYPE html>
<html>
    <head>
      <title> Exercice 7 PHP Form</title>
    </head>
	<body>

    <?php
    $formulaire = true;
    if (!isset($_POST['submit'])) {
        echo '
    <h1>Formulaire</h1>

    <form action="user.php" method="post">
    <fieldset>
    <div>
    <select for="civilite" name="civilite">
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
            <input type="text" id="prenom" name="prenom"><br>
            <input type="file" name="file"><br>
            <input type="submit" name="submit">
        </div>
        </fieldset>
    </form>
';
       
    }else {
     $formulaire = false;
        echo $_POST['civilite']." ".$_POST['nom']." ".$_POST['prenom']." ".$_POST['file'];
        }
    ?>
     
    </body>
</html>
