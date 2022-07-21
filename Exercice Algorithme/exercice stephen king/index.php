<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice livre</title>

</head>

<body>
    <?php

require 'Livre.php';
require 'Auteur.php';

$auteur1 = new Auteur("Stephen", "King");
$auteur2 = new Auteur("Conan", "Doyle");
$auteur3 = new Auteur("Haruki", "Murakami");
$auteur4 = new Auteur("Ramschtein", "DEL FUEGOOOOOOOOOOOOOOOOOOO");

$p1 = new Livre("Ca",1138, 20, 1986, $auteur1);
$p2 =new Livre("Simetierre",374, 15, 1983, $auteur1);
$p3 = new Livre("Le Fléau",823, 14, 1978, $auteur1);
$p4 =new Livre("Première Personne du Singulier",160, 21, 2022, $auteur3);
$p4 =new Livre("Kafka sur le rivage",648, 9, 2011, $auteur3);
$p4 =new Livre("L'incolore Tsukuru Tazaki et ses années de pèlerinages",360 , 8, 2015, $auteur3);
$p4 =new Livre("Un scandale en Bohême",192, 42, 1996, $auteur2);
$p4 =new Livre("Sherlock Holmes : Les Hêtres d'Or",63, 16, 1927, $auteur2);
$p4 =new Livre("Les propriétaires de Reigate",31, 16, 1977, $auteur2);

$auteur1->__afficherBibliographie();
$auteur2->__afficherBibliographie();
$auteur3->__afficherBibliographie();
$auteur4->__afficherBibliographie();

?>
</body>

</html>