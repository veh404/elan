<h1>Introduction PHP</h1>

<?php


// EXERCICE 14

$origin = new DateTime();
$target = new DateTime('17-01-1985');
$interval = $origin->diff($target);
echo $interval->format('Age de la personne: %Y ans %m mois %d jours');


