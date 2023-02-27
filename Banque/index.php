<?php

include ("compte.php");
include ("titulaire.php");


$t1 = new Titulaire("Stark", "Anthony", "1970-05-19", "Sofia");
$t2 = new Titulaire("Wayne", "Bruce", "1915-04-07", "Gotham");


$c1 = new Compte($t1, "compte courant", 100, "$");
$c2 = new Compte($t1, "compte epargne ", 368463216.745, "$");

$c3 = new Compte($t2, "compte courant", 500000, "$");
$c4 = new Compte($t2, "compte epargne", 10000005.99, "$");
$c5 = new Compte($t2, "compte PEL", 60000, "$");
// var_dump($t1);

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


<div class="bloc">
    
    <div class="bloctest1">
        <h3>Test Opérations bancaires :</h3>
        <?php
        echo $c1;
        echo $c2;
        echo "<br>";
        $c1 -> crediter(200);
        echo $c1;
        echo "<br>";
        $c1 -> debiter(290);
        echo $c1;
        echo "<br>";
        echo $c3;
        echo $c5;
        echo "<br>";
        $c3 -> virement($c5,20000);
        echo "<br>";
        echo $c3;
        echo $c5;


        ?>  
    </div>
    <div class="blocinfo">
        <?php
        $t1 -> afficherComptesBancaires();
        $t2 -> afficherComptesBancaires();



        ?>
    </div>


</div>
</fieldset>


</body>
</html>