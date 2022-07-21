<h1>Introduction PHP</h1>

<?php


// EXERCICE 7

$ageenfant = 7;


echo "Exercice 7<br><br>";

if ($ageenfant >= 6 && $ageenfant <= 7) { 
    echo "L'enfant qui a $ageenfant ans appartient à la catégorie Poussin";
}
    if ($ageenfant >= 8 && $ageenfant <= 9) {
        echo "L'enfant qui a $ageenfant ans appartient à la catégorie Pupille";
    }
        if ($ageenfant >= 10 && $ageenfant <= 11) {
            echo "L'enfant qui a $ageenfant ans appartient à la catégorie Minime";
        }
            if ($ageenfant >= 12) {
                echo "L'enfant qui a $ageenfant ans appartient à la catégorie Cadet";
            } 
            if ($ageenfant < 6) {
                echo "L'enfant qui a $ageenfant ans n'appartient à aucune catégorie";
            } 
echo "<br><br>";
 
