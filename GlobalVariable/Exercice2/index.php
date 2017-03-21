<?php
session_start();
$_SESSION['prenom'] = 'Jean';
$_SESSION['nom'] = 'Bond';
$_SESSION['age'] = 007;
?>
<!DOCTYPE html>
<html>

<head>
    <title> Exercice 2 PHP GlobalVariable</title>
    <meta charset="utf-8" />
</head>

<body>
    <p>
             Salut <?php echo $_SESSION['nom']?> ! <br>
       Clique ci-dessous si tu veux retrouver les informations te concernant !
       <a href="./infos.php" target="_blank">lien vers la page des infos</a>;

     
    </p>
</body>

</html>