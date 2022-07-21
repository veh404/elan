
<?php 

function afficherRadio($target) {

    echo '<div>';
    foreach($target as $val){
 
        echo '<input type="radio"><label>'.$val.'</label><br>';
    } 
    echo '</div>';
}

 $nomsRadio = array("Monsieur","Madame","Autre");
 
afficherRadio($nomsRadio);

?>