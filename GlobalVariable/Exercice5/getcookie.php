<?php
setcookie();
?>

<!DOCTYPE html>
<html>

<head>
    <title> Exercice 3 PHP GlobalVariable</title>
    <meta charset="utf-8" />
</head>

<body>
    <p>
    <h1>Récupération Cookies</h1>
Hey !!! J'ai récupéré toutes les informations de tes cookies ; p !!!
Ton login est <?php echo $_COOKIE['login'];?> et ton mot de passe est <?php echo $_COOKIE['mdp'];?>.<br>    
       <a href="./setcookies.php">Clique ici pour modifier tes cookies !</a>
        
    </p>
</body>

</html>