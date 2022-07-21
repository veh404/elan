
<?php 

function afficherTableau($target) {

    foreach($target as $val){

        var_dump($val);
        echo "<br>";
    } 
 }

$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));

afficherTableau($tableauValeurs);
?>