<?php

require 'classHotel/Hotel.php';
require 'classHotel/Chambre.php';
require 'classHotel/Personne.php';
require 'classHotel/Resa.php';
include("chambre.php");

$hotel1 = new Hotel("Hilton", "****", "10 rue de la Gare", "67000", "Strasbourg", 30);
$hotel2 = new Hotel("Regent", "****", "61 Rue Dauphine", "75006", "Paris", 10);

$client1 = new Personne ("Virgile","GIBELLO");
$client2 = new Personne ("Micka","MURMANN");

$chambre1 = new Chambre ($hotel1, "1", 2, false, 120, true);
$chambre2 = new Chambre ($hotel1, "2", 2, false, 120, true);
$chambre3 = new Chambre ($hotel1, "3", 2, false, 120, false);
$chambre4 = new Chambre ($hotel1, "4", 2, false, 120, true);
$chambre16 = new Chambre ($hotel1, "16", 2, true, 300, true);
$chambre17 = new Chambre ($hotel1, "17", 2, true, 300, false);
$chambre18 = new Chambre ($hotel1, "18", 2, true, 300, true);
$chambre19 = new Chambre ($hotel1, "19", 2, true, 300, true);

$resa1 = new Resa ($client1, $chambre17, "01-01-2021", "01-01-2021");
$resa2 = new Resa ($client2, $chambre3, "11-03-2021", "15-03-2021");
$resa3 = new Resa ($client2, $chambre4, "01-04-2021", "17-04-2021");


?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c892bba6ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/style.css">
    <title>POO-Hotel</title>
</head>

<body>

    <div class="main-container">

        <div class="hotel-recap">

            <div class="hotel01">

                <?php
                    echo $hotel1;
                ?>

            </div>

        </div>

        <div class="resahotel-box">

            <div class="resa-hotel01">

                <?php

                    echo $hotel1 -> afficherResa();

                ?>

            </div>

            <div class="resa-hotel02">

                <?php

                    echo $hotel2 -> afficherResa();

                ?>

            </div>
        </div>

        <div class="resaclient-box">

            <div class="resa-client02">

                <?php

                    echo $client2 -> afficherResa();

                ?>

            </div>

        </div>

        <div class="dashboardhotel-container">

            <div class="dashboard-hotel01">

                <?php 

                    echo $hotel1 -> afficherRecapHotel();

                ?>

            </div>

        </div>

    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php
echo "TEST AFFICHAGE"."<br>";
echo $hotel1;
echo ".<br>";
echo $hotel1 -> infosHotel();

?>

</body>

</html>