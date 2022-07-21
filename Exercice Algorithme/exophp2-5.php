
<?php 

function afficherInput($target) {

        foreach($target as $val){
          echo '<form method="post">'.$val.'</form><input type="text" id="'.$val.'">';
    }
}
$nomsInput = array("Nom","Prénom","Ville");

afficherInput($nomsInput);

?>