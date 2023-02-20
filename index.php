
<?php

include("Personne.php");
include("car.php");

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
$v1 -> setVitesse('50');
$v1 -> setContact(false);

$v2 = new Car ();
$v2 -> setMarque('Citroën');
$v2 -> setModele('C4');
$v2 -> setNbportes(3);

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

<legend><h2>Résultat</h2></legend>

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

<legend><h2>Résultat</h2></legend>

<?php

echo $v1;
echo "<br>";

// echo $v2;




?>
</fieldset>

</body>
</html>