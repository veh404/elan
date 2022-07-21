<h1>Introduction PHP</h1>

<?php

$palindrometest = "Engage le jeu que je le gagne";
$palindrometest1 = $palindrometest;


echo "Exercice 4<br><br>";
$palindrometest1 = str_replace(' ', '', $palindrometest);
$palindrometest1 = strtolower($palindrometest1);
$reverse = strrev($palindrometest1);
if ($palindrometest1 == $reverse) {
    echo "La phrase « $palindrometest » est palindrome <br><br>";
} 
else {
    echo "La phrase « $palindrometest » n'est pas un palindrome <br><br>";
}

