<h1>Introduction PHP</h1>

<?php

// EXERCICE 6

$prixarticle = 9.99;
$quantite = 5;
$tva = 0.2;

echo "Exercice 6<br><br>";

$montantht = $prixarticle * $quantite;
$montanttva = $montantht + ($montantht * $tva);
$montantfinal = round($montanttva, 2);

echo "Prix unitaire de l’article : $prixarticle €<br>
Quantité : $quantite<br>
Taux de TVA : $tva<br>
Le montant de la facture à régler est de : $montantfinal €<br><br>";

