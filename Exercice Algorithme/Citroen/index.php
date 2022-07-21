<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Citroen</title>

</head>

<body>
    <?php

require 'Voiture.php';

$voiture1 = new Voiture("Peugeot", "408",5,0);
$voiture2 = new Voiture("Citröen", "C4",3,0);

echo $voiture1 -> demarrer();
echo $voiture1 -> accelerer(200);
echo $voiture1 -> stopper();
echo $voiture1 -> demarrer();
echo $voiture1 -> accelerer(150);
echo $voiture1 -> ralentir(110);

echo $voiture1 -> getvitesseActuelle(). "km/h";

?>

    </body>  
    </html>  