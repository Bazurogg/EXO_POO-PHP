
<?php

include("Personne.php");
include("car.php");
include("car2.php");
include("mail.php");
include("livres.php");


/*
donner différence entre include et require : inclut et exécute le fichier spécifié en argument. A la différence que "require" lorsqu'une erreur survient il stop le script alors que "include" permets au script de continuer de fonctionner.

donner différence entre require_once et require : "require_once" identique à "require" sauf PHP vérifie si le fichier à déjà été inclus et si c'est le cas ne l'inclus pas une 2 éme fois.
*/

$p1 = new Personne ();
$p1->setName('ALDERSON');
$p1->setFirstname('Elliot');
$p1->setBirthd('1986-09-17');

$p2 = new Personne ();
$p2->setName('MOSS');
$p2->setFirstname('Angela');
$p2->setBirthd('1988-02-07');

$v1 = new Car ();
$v1 -> setMarque('Peugeot');
$v1 -> setModele('408');
$v1 -> setNbportes(5);

$v2 = new Car ();
$v2 -> setMarque('Citroën');
$v2 -> setModele('C4');
$v2 -> setNbportes(3);

$voiture1 = new Voiture ("Peugeot", "408");
$voituree = new VoitureElec ("BMW", "I3", "100");

$e1 = new Email ();
$e2 = new Email ();

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

<h1>Exercice 15 - PHP 1</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).<br>
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.<br>
$p1 = new Personne("ALDERSON", "Elliot", "1985-09-17") ;<br>
$p2 = new Personne("MOSS", "Angela", "1988-02-07") ;</p>


<fieldset>
<h2>Résultat :</h2>

<?php

echo $p1;
echo $p2;

?>
</fieldset>


<h1>Exercice 13 - PHP 2</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et<br>
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus<br>
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule<br>
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un véhicule.<br>
v1 ➔ "Peugeot","408",5<br>
v2 ➔ "Citroën","C4",3<br>
</p>

<fieldset>
<h2>Résultat :</h2>
<div class="bloc">

    <div class="bloctest1">
        <?php

        echo "<h3>Test Véhicules</h3>";
        echo $v1->demarrer();
        $v1 -> accelerer(50);
        echo "";
        echo $v2->demarrer();
        echo $v2->stopper();
        $v2 -> accelerer(20);
        $v1 -> ralentir(10);
        echo "La vitesse du véhicule ".$v1 -> getMarque()." ".$v1 -> getmodele()." est de : ".$v1->getVitesse()." Km / h."."<br>";
        echo "La vitesse du véhicule ".$v2 -> getMarque()." ".$v2 -> getmodele()." est de : ".$v2->getVitesse()." Km / h."."<br>";
        
        ?>  
    </div>
    <div class="blocinfo">
        <?php

        echo "<h3>Infos véhicule 1</h3>";
        echo $v1;
        echo "<br>";
        echo "<h3>Infos véhicule 2</h3>";
        echo $v2;
        echo "<br>";

        ?>
    </div>


</div>
</fieldset>

<h1>Exercice 14 - PHP 2</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle)<br> ainsi qu’une classe VoitureElec
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).<br>
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques
suivantes :<bR>
Peugeot 408 : $v1 = new Voiture("Peugeot","408");<br>
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);<br>
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :<br>
"echo $v1->getInfos()."<.br/>";<br>
"echo $ve1->getInfos()."<.br/>";
</p>

<fieldset>
<h2>Résultat :</h2>
<?php

echo $voiture1->getInfos();
echo "<br>";
echo $voituree ->getInfos();

?>
</fieldset>

<h1>Exercice 15 - PHP 2</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php<br>
vérifier si une adresse e-mail a le bon format.<br>
L’adresse elan@elan-formation.fr est une adresse e-mail valide<br>
L’adresse contact@elan est une adresse e-mail invalide<br>
</p>

<fieldset>
<h2>Résultat :</h2>
<?php

$e1 -> setEmail("elan@elan-formation.fr");
echo $e1 -> checkMail();
$e2 -> setEmail("contact@elan");
echo $e2 -> checkMail();

?>
</fieldset>

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

Un auteur comporte un nom et un prénom.<br>
Une méthode toString() sera appréciée dans chacune de vos classes.<br>
Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie
complète d’un auteur :<br>
</p>

<fieldset>   
<h2>Résultat :</h2>

<?php

?>
</body>
</html>