<h1>Introduction PHP</h1>

<?php

/*
    commentaire sur plusieurs lignes
*/

// EXERCICE 1, 2 & 3

$chaineDeCaracteres = "Notre formation DL commence aujourd'hui";   // string
$chaineDeCaracteres2 = "mon prix est très intéressant";  // string
$chaineDeCaracteres3 = "Mon prix est de";  // string

// EXERCICE 4

$palindrometest = "Engage le jeu que je le gagne";
$palindrometest1 = $palindrometest;

// EXERCICE 5

$franc = 100;  // integer
$francquotient = 0.1524;
$euroq = $franc * $francquotient;
$euro = round($euroq, 2);  // float

// EXERCICE 6

$prixarticle = 9.99;
$quantite = 5;
$tva = 0.2;

// EXERCICE 7

$ageenfant = 7;

// EXERCICE 8

$tablemult = 9;

// EXERCICE 9

$ageimpot = 19;
$sexeimpot = "H";
$imposable = "n";


// EXERCICE 10

$montantpayer = 152;
$montantverse = 200;

// EXERCICE 13

$notes = [10,12,8,19,18,16,11,13,9,14,5,0];
$moyenne = (count($notes));

$booleen = true;  // boolean (true ou false)
$tableau1 = array("texte 1", "texte 2", "texte 3");   // array
$tableau2 = ["texte 1", "texte 2"];  // array
$date = new DateTime();  // programmation orientée objet (POO)

echo "Exercice 1<br><br>";
$nbCaracteres = strlen($chaineDeCaracteres);
echo "La phrase « $chaineDeCaracteres » contient $nbCaracteres caractères<br><br>";

echo "Exercice 2<br><br>";
$nbMots = str_word_count($chaineDeCaracteres);
echo "La phrase « $chaineDeCaracteres » contient $nbMots mots<br><br>";

echo "Exercice 3<br><br>";
echo "$chaineDeCaracteres <br>";
echo str_replace("aujourd'hui", "demain", $chaineDeCaracteres), "<br><br>";

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

echo "Exercice 5<br><br>";
echo "Montant en francs: $franc<br>
$franc francs = $euro €<br><br>" ;

echo "Exercice 6<br><br>";

$montantht = $prixarticle * $quantite;
$montanttva = $montantht + ($montantht * $tva);
$montantfinal = round($montanttva, 2);

echo "Prix unitaire de l’article : $prixarticle €<br>
Quantité : $quantite<br>
Taux de TVA : $tva<br>
Le montant de la facture à régler est de : $montantfinal €<br><br>";

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
 
echo "Exercice 8<br><br>";

echo "Table de $tablemult :<br/>";
for($i=1; $i<=10; $i++)
  {
    echo $tablemult, ' x ', $i ,' = ', ($tablemult*$i) ,'<br/>';
  }

echo "<br><br>Exercice 9<br><br>";

echo "Age : $ageimpot <br>
Sexe : $sexeimpot<br>";

if ($sexeimpot == "F") {
    if ($ageimpot >= 18 && $ageimpot <= 35)
    $imposable = "y";
} 
if ($sexeimpot == "H") {
    if ($ageimpot >= 20)
    $imposable = "y";
} 
if ($imposable == "y") {
    echo "La personne est imposable.";
} 
else {
    echo "La personne n'est pas imposable.";
} 

echo "<br><br>Exercice 10<br><br>";
$montantpayer = 152;
$montantverse = 200;

echo "Montant à payer : $montantpayer €<br>

Montant versé : $montantverse €<br>"; 
$reste = $montantverse - $montantpayer;
echo "Reste à payer : $reste €<br>"; 


// AFFICHAGE
echo "<br>";
echo $chaineDeCaracteres."<br>";   // mon texte
echo $chaineDeCaracteres3." ".$entier." euros<br>";  // Mon prix est de 50 euros
echo "$chaineDeCaracteres3 $entier euros<br>"; // Mon prix est de 50 euros


// FONCTIONS CHAINES DE CARACTERES

// Compter le nombre de caractères (espaces inclus !)
$nbCaracteres = strlen($chaineDeCaracteres);
echo "La phrase « $chaineDeCaracteres » contient $nbCaracteres caractères<br>";
echo "La phrase contient ".strlen($chaineDeCaracteres)." caractères<br>";

// Convertir une chaîne en majuscules
$chaineMajuscules = strtoupper($chaineDeCaracteres);
echo $chaineMajuscules."<br>";
echo mb_strtoupper($chaineDeCaracteres2)."<br>";  // prend en compte les caractères accentués

// Compter le nombre de mots
$nbMots = str_word_count($chaineDeCaracteres);
echo "La phrase « $chaineDeCaracteres » contient $nbMots mots<br>";

// FONCTIONS TABLEAUX

// Compter le nombre d'éléments présents dans un tableau
$tailleTableau1 = count($tableau1);
echo "Le tableau 1 contient $tailleTableau1 éléments<br>";
echo "Le tableau 2 contient ".count($tableau2)." éléments<br>";

// Accéder à la première valeur du tableau (attention 1er élément à l'indice 0 !)
echo $tableau1[0]."<br>";

$notes = [12, 14, 9, 8, 19, 17.25];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes / $nbNotes, 2);

echo "La moyenne est $moyenne<br>";

// OPERATIONS MATHEMATIQUES

$nbArticles = 5;
$prixHT = 10.99;
$totalHT = $nbArticles * $prixHT;
echo "Le total HT est de $totalHT €<br>";

// Afficher le total TTC d'une facture
$tauxTVA = 0.20;

$totalTTC = $nbArticles * $prixHT + $nbArticles * $prixHT * $tauxTVA;
$totalTTC2 = $nbArticles * $prixHT * (1 + $tauxTVA);
echo "Le total TTC est de $totalTTC €<br>";

$texte = "Texte";
$calcul = $texte - 5;
echo $calcul."<br>";

// Renvoie le type de la variable spécifiée en paramètre
echo gettype($tableau1);
var_dump($tableau1);


// STRUCTURES DE CONTROLE

// Conditions (IF = SI)

$prenom = "Georges";
$age = 22.5;

if($age >= 18) {
    $resultat = "majeur";
} else {
    $resultat = "mineur";
}

echo "$prenom est $resultat<br>";

// Ternaire
$result = $age >= 18 ? "majeur" : "mineur";
echo "$prenom est $result<br>";
echo "$prenom est ".($age >= 18 ? "majeur" : "mineur")."<br>";

// En fonction de l'âge, afficher une catégorie
/*
    si la personne a plus de 30 ans --> SENIOR
    si la personne a plus de 20 ans --> CADET
    sinon JUNIOR
*/

if(gettype($age) == "double" || gettype($age) == "integer" ) {
    if($age >= 30) {
        $resultat = "Senior";
    } elseif($age >= 20) {
        $resultat = "Cadet";
    } else {
        $resultat = "Junior";
    }
    
    echo "La personne qui a $age ans est : $resultat<br>";
} else {
    echo "Veuillez saisir un âge numérique !<br>";
}

/*
    si la valeur est 1 --> OK !
    si la valeur est 0 --> KO !
    sinon afficher "valeur non gérée"
*/

$valeur = 99;
switch($valeur) {
    case 0: echo "KO !<br>"; break;
    case 1: echo "OK !<br>"; break;
    default: echo "Valeur non gérée !<br>";
}

$age = 18;

if(gettype($age) == "double" || gettype($age) == "integer" ) {
    switch(true) {
        case $age >= 30: echo "Senior<br>"; break;
        case $age >= 20: echo "Cadet<br>"; break;
        default: echo "Junior<br>";
    }
} else {
    echo "Veuillez saisir un âge numérique !<br>";
}


// BOUCLES (loop)
// Afficher les chiffres de 1 à 10

// FOR (pour)
// $i++  -->   $i = $i + 1

for($i = 1; $i <= 10; $i++) {
    echo $i." ";
}

// WHILE (tant que)

$j = 1;
while($j <= 10) {
    echo $j." ";
    $j++;
}

// FOREACH

$range = range(1,10);
var_dump($range);

foreach(range(1,10) as $v) { 
    echo $v." "; 
}

echo "<br>";

$marques = ["Mercedes", "BMW", "Toyota", "Tesla"];
$nbMarques = count($marques);

echo "<h3>Méthode for</h3>";
for ($i = 0; $i < $nbMarques; $i++) { 
    echo $marques[$i]."<br>";
}

echo "<h3>Méthode while</h3>";
$i = 0;
while($i < $nbMarques) {
    echo $marques[$i]."<br>";
    $i++;
}

echo "<h3>Méthode foreach</h3>";
foreach($marques as $marque) {
    echo $marque."<br>";
}


// TABLEAUX ASSOCIATIFS
// clé (key) -> valeur (value) (clé doit être unique)

$formateurs = [
    "stephane" => "mulhouse",
    "virgile" => "strasbourg",
    "micka" => "strasbourg",
    "dominique" => "colmar"
];

var_dump($formateurs);

// ksort -> trier sur la clé (A à Z)
// krsort -> trier sur la clé (Z à A) r = reverse
// asort -> trier sur la valeur (A à Z)
// arsort -> trier sur la valeur (Z à A)

ksort($formateurs);

foreach($formateurs as $prenom => $ville) {
    echo ucfirst($prenom)." habite ".mb_strtoupper($ville)."<br>";
}


$clients = [
    "stephane" => [
        "adresse" => "10 rue de la Gare",
        "cp" => "67000",
        "ville" => "STRASBOURG",
        "tel" => "0988776666"
    ],

    "virgile" => [
        "adresse" => "1 rue Principale",
        "cp" => "68100",
        "ville" => "MULHOUSE",
        "tel" => "0677889999"
    ]
];

var_dump($clients);
// echo $clients["virgile"]["cp"]." ".$clients["virgile"]["ville"];

foreach($clients as $prenom => $coordonnees) {
    echo ucfirst($prenom)." habite ".
                $coordonnees["adresse"]." ".$coordonnees["cp"]." ".$coordonnees["ville"]." et a comme n° de téléphone : ".$coordonnees["tel"]."<br>";
}


// FONCTIONS

echo afficherMessage(); 

function afficherMessage() : string {
    $message = "Voici mon message<br>";
    return $message;
}

echo calculerCarre(3);  // 9
echo calculerCarre("test");  // Erreur !
// echo pow(9, 3);

function calculerCarre($nombre) {
    if(gettype($nombre) == "integer") {
        $resultat = $nombre * $nombre;
        return $resultat."<br>";
    } else {
        return "Erreur: la valeur doit être un entier !<br>";
    }
}


echo calculerMoyenne([9, 10.5, 11, 18, 12])."<br>";
echo calculerMoyenne([19, 10, 3, 8, 19])."<br>";

$eleves = [
    "cindy" => [12, 9, 19, 17, 12, 13],
    "pascal" => [8, 9, 12, 10, 17]
];

foreach($eleves as $prenom => $notes) {
    echo "La moyenne de $prenom est : ".calculerMoyenne($notes)."<br>";
}

function calculerMoyenne(array $notes) : float {
    $nbNotes = count($notes);
    $sommeNotes = array_sum($notes);
    $moyenne = round($sommeNotes / $nbNotes, 2);

    return $moyenne;
}

echo pairOuImpair(4);
echo pairOuImpair(5);

function pairOuImpair($nombre) : string {

    if($nombre % 2 == 0) {   // % = modulo
        $resultat = "pair<br>";
    } else {
        $resultat = "impair<br>";
    }

    return "$nombre est $resultat";
}

echo repeterMot("Youpi", 6, " - ");
echo repeterMot("Hourra", 6, " / ");

function repeterMot(string $mot, int $nbRepetitions, string $separateur) {

    $resultat = "";
    foreach(range(1, $nbRepetitions) as $valeur) {
        $resultat .= $mot.$separateur;
    }

    return $resultat;
}

echo str_repeat("Bidule", 10);


