<h1>Introduction PHP</h1>

<?php


// EXERCICE 13

$notes = [10,12,8,19,18,16,11,13,9,14,5,0];
$moyenne = (count($notes));

echo "Exercice 13<br><br>";
echo "Les notes obtenues par l’élève sont: " ;
foreach($notes as $value){
    echo $value . " ";
};
echo "<br>Sa moyenne générale est donc de: "; 
echo array_sum($notes) /$moyenne;

