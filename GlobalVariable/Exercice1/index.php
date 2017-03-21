<!DOCTYPE html>
<html>

<head>
    <title> Exercice 1 PHP GlobalVariable</title>
</head>

<body>
    <p>
        <?php
echo $_SERVER['HTTP_USER_AGENT'] . "\n\n<br>";
echo $_SERVER["REMOTE_ADDR"]. "\n\n<br>";
echo $_SERVER['SERVER_NAME']. "\n\n<br>";



        ?>
     
    </p>
</body>

</html>