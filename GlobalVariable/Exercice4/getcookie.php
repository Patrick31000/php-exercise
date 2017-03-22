<?php
setcookie();
?>

<!DOCTYPE html>
<html>

<head>
    <title> Exercice 4 PHP GlobalVariable</title>
    <meta charset="utf-8" />
</head>

<body>
    <p>
    <h1>Récupération Cookies</h1>
Hey !!! J'ai récupéré toutes les informations de tes cookies ; p !!!
Ton login est <?php echo $_COOKIE['login'];?> et ton mot de passe est <?php echo $_COOKIE['mdp'];?>.
       
        
    </p>
</body>

</html>