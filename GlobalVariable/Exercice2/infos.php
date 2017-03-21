<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title> Exercice 1 PHP GlobalVariable</title>
    <meta charset="utf-8" />
</head>

<body>
    <p>
       ReSalut <?php echo $_SESSION['nom']?> ! <br>
       voici les informations te concernant :<br>
       Tu t'appelles <?php echo $_SESSION['prenom']." ".$_SESSION['nom'] ?>.<br>
       Et tu as <?php echo $_SESSION['age']." " ?> ans.
     
    </p>
</body>

</html>