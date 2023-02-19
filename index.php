

<?php

include("Personne.php");
/*
donner différence entre include et require : inclut et exécute le fichier spécifié en argument. A la différence que "require" lorsqu'une erreur survient il stop le script alors que "include" permets au script de continuer de fonctionner.

donner différence entre require_once et require : "require_once" identique à "require" sauf PHP vérifie si le fichier à déjà été inclus et si c'est le cas ne l'inclus pas une 2 éme fois.
*/

$p1 = new Personne ();
$p1->setName('ALDERSON');
$p1->setFirstname('Elliot');
$p1->setBirthd('1986-09-17');



// $p2 = new Personne("DUCHEMIN", "Alice","1985-01-17");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

echo $p1;

?>
</body>
</html>