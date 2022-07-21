<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Compte</title>

</head>

<body>
    <?php

require 'Compte.php';
require 'Titulaire.php';

$titulaire1 = new Titulaire("Praline", "Hugues","2002-07-10", "New York");
$titulaire2 = new Titulaire("G", "Man","1997-10-25", "Takashimura");
$titulaire3 = new Titulaire("Chantage", "Camille","1982-02-08", "Paris");
$titulaire4 = new Titulaire("Ramschtein", "Bonsoirité","1999-02-18", "Strasbourg");

$p1 = new Compte("Compte Courant",1138, 20, "$", $titulaire1);
$p2 =new Compte("Livret A",374, 15, "€", $titulaire1);
$p3 = new Compte("Compte Courant",823, 678968, "$", $titulaire1);
$p4 =new Compte("Livret A",160, 21, "€", $titulaire3);
$p4 =new Compte("Compte Courant",648, 9, "$", $titulaire3);
$p4 =new Compte("Livret A",360 , 8, "$", $titulaire3);
$p4 =new Compte("Compte Courant",192, 42, "€", $titulaire2);
$p4 =new Compte("Compte Courant",63, 16, "$", $titulaire2);
$p4 =new Compte("Livret A",31, 16, "€", $titulaire2);

$titulaire1->__afficherComptes();
$titulaire2->__afficherComptes();
$titulaire3->__afficherComptes();
$titulaire4->__afficherComptes();

?>

    </body>  
    </html>  