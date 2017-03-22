<?php
$login = $_POST['login'];
$mdp = $_POST['mdp'];

if (($login != null)&&($mdp != null)) {
    setcookie( "login", $login, time()+20);
    setcookie( "mdp", $mdp, time()+20);
    header( "Location:getcookie.php" );
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title> Exercice 5 PHP GlobalVariable</title>
    <meta charset="utf-8" />
</head>

<body>
    <p>
    <h1>Modification Cookies</h1>

       <form method="POST">
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