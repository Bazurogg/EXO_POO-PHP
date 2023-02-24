<?php

include ("compteBancaire.php");


$t1 = new Titulaire("Scott", "Travis", "1992-04-30", "Houston");
$t2 = new Titulaire("Kanye", "West", "1977-06-08", "Atlanta");


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

<h1>Exercice POO - PHP 2 - BANQUE</h1>

<p>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des titulaires
et leurs comptes bancaires respectifs.<br>
Un compte bancaire est composé des éléments suivants :<br>
</p>

<ul>
<li><span>Un libellé/span></li>
<li><span>un solde initial</span></li>
<li><span>une devise monétaire/span></li>
<li><span>un titulaire monétaire</span></li>
</ul>

<p>
un titulaire comporte :<br>

<ul>
<li><span>Un nom</span></li>
<li><span>un prénom</span></li>
<li><span>une date de naissance</span></li>
<li><span>une ville</span></li>
<li><span>L'ensemble de ces comptes bancaires</span></li>
</ul>

<p>Sur un compte bancaire, on doit pouvoir :
Créditer le compte de X euros
Débiter le compte de X euros
Effectuer un virement d'un compte à l'autre.<br>
On doit pouvoir :<br>
Afficher toutes les informations d'un(e) titulaire (dont l'âge) et l'ensemble des comptes
appartenant à celui(celle)-ci.<br>
Afficher toutes les informations d'un compte bancaire, notamment le nom prénom du titulaire du compte.<br>
</p>

<fieldset>   
<h2>Résultat :</h2>

<?php
?>



</body>
</html>