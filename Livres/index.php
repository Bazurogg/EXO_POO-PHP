<?php

include("livres.php");



$stephenKing = new Auteur("Stephen", "King");
$jrrTolkien = new Auteur("J.R.R.", "Tolkien");
$it = new Livre($stephenKing,"It", 1986, 1138, 20);
$simetierre = new Livre($stephenKing, "Simetierre", 1983, 374, 15);
$theStand = new Livre($stephenKing, "The Stand", 1978, 823, 14);
$shining = new Livre($stephenKing,"Shining", 1977, 447, 16);

$theHobbit = new Livre($jrrTolkien, "The Hobbit", 1937, 287, 6);
$tlotrFellowshipOfTheRing = new Livre($jrrTolkien, "The Fellowship of The Ring", 1945, 722, 9);
$tlotrTheTwoTowers = new Livre($jrrTolkien, "The Two Towers", 1954, 597, 9);
$tlotrTheReturnOfTheKing = new Livre($jrrTolkien, "The Return of The King", 1955, 722, 9);
$silmarillion = new Livre($jrrTolkien, "The Silmarillion", 1977, 356, 7);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
<h1>Exercice 16 - PHP 2</h1>

<p>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et
leurs auteurs respectifs.<br>
Les livres sont caractérisés par :<br>
</p>
<ul>
<li><span>un titre</span></li>
<li><span>un nombre de pages</span></li>
<li><span>une année de parution</span></li>
<li><span>un prix</span></li>
<li><span>un auteur</span></li>
</ul>
<p>
Un auteur comporte un nom et un prénom.<br>
Une méthode toString() sera appréciée dans chacune de vos classes.<br>
Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie
complète d’un auteur :<br>
</p>

<fieldset>   
<h2>Résultat :</h2>

<?php

$stephenKing -> afficherBibliographie();
echo "<br>";
$jrrTolkien -> afficherBibliographie();
?>

</fieldset>
</body>
</html>