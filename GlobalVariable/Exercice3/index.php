<?php
$login = $_POST['login'];
$mdp = $_POST['mdp'];

if (($login != null)&&($mdp != null)) {
      setcookie( "login", $login, time()+5);
    setcookie( "mdp", $mdp, time()+5);
    header( "Location:getcookie.php" );
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title> Exercice 3 PHP GlobalVariable</title>
    <meta charset="utf-8" />
</head>

<body>
    <p><h1>Formulaire de connexion</h1>

       <form action="user.php" method="POST">
    <fieldset>
        <div>
            <label for="login">Login:</label>
            <input type="text" id="login" name="login">
        </div>
        <div>
            <label for="mdp">Mot de passe</label>
            <input type="password" id="mdp" name="mdp">
            <input type="submit" id="submit" name="submit">
        </div>
        </fieldset>
    </form>
   
    </p>
</body>

</html>