<!DOCTYPE html>
<html>

<head>
    <title> Exercice 1 PHP Date</title>
</head>

<body>
    <p>
        <?php
$date = date("d-m-Y");
$date2 = date("d-m-y");

?>
Exercice 1:<br>     
La date du jour est le : <?php echo $date ?>.<br><br>
Exercice 2 :<br>
La date du jour est le : <?php echo $date2 ?>.<br><br>
Exercice 3 :<br>
<?php
date_default_timezone_set('Europe/Paris');
// --- La setlocale() fonctionnne pour strftime mais pas pour DateTime->format()
setlocale(LC_TIME, 'fr_FR.utf8','fra');// OK
// strftime("jourEnLettres jour moisEnLettres annee") de la date courante
echo "La date du jour est le: ", strftime("%A %d %B %Y");
?><br><br>;
Exercice 4:<br>
<?php
echo "Le timestamp de la date du jour est ".strtotime('now').'<br>';
echo "Le timestamp de la date du mardi 2 Août 2016 à 15H est :".strtotime('Tuesday 2 August 2016 15:00');
?><br><br>;
Exercice 5:<br>
<?php
$date1= new DateTime('now');
$date2 = new DateTime('2016-08-02');
$interval = date_diff($date1, $date2);
echo "Le nombre de jour qui sépare la date du jour avec le 16 mai 2016 est : ".$interval->format('%R%a days');
?><br><br>;
Exercice 6:<br>
<?php
$number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
echo "Il y avait ".$number." jours en Février 2016";
?><br><br>
Exercice 7:<br>
<?php
$date = date("d-m-Y", strtotime($timestamp_initial." +20 days"));
echo "La date dans 20 jours sera le : ".$date.".";
?><br><br>
Exercice 8:<br>
<?php
$date = date("d-m-Y", strtotime($timestamp_initial." -22 days"));
echo "La date antérieure de 22 jours sera le : ".$date.".";
?><br><br>
    </p>
</body>

</html>