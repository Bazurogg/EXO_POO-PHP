<?php

include("hotel.php");

$hotel1 = new Hotel ("Hilton", "Strasbourg", "10 rue de la Gare 67000 Strasbourg");
$hotel2 = new Hotel ("Regent","Paris","61 rue Dauphine 75006 Paris");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO-Hotel</title>
</head>
<body>

<?php
echo "TEST AFFICHAGE"."<br>";
echo $hotel1;
echo ".<br>";
echo $hotel1 -> infosHotel();

?>
    
</body>
</html>