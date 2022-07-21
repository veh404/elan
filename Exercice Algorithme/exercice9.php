<h1>Introduction PHP</h1>

<?php


// EXERCICE 10

$montantpayer = 151;
$montantverse = 200;


echo "<br><br>Exercice 10<br><br>";

echo "Montant à payer : $montantpayer €<br>

Montant versé : $montantverse €<br>"; 
$reste = $montantverse - $montantpayer;
echo "Reste à payer : $reste €<br>"; 

$dividende=$reste;
    $billet10=(int)($dividende/10);
$dividende=$dividende-(10*$billet10);
    $billet5=(int)($dividende/5);
$dividende=$dividende-(5*$billet5);
    $billet2=(int)($dividende/2);
$dividende=$dividende-(2*$billet2);
    $billet1=(int)($dividende/1);
    
echo "***************************************************<br>
Rendue de monnaie :<br>
$billet10 billets de 10 € - $billet5 billet de 5 € - $billet2 pièce de 2 € - $billet1 pièce de 1 €";

