
<?php 

function alimenterListeDeroulante($target) {

    echo '<select name="genre" id="gender-select">';
 
         foreach($target as $val){
           echo '<option value=">'.$val.'">'.$val.'</option>';
     }
     echo '</select>';
 }

 function afficherInput($target) {

    foreach($target as $val){

      echo '<form method="post">'.$val.'</form><input type="text" id="'.$val.'">';

    }
}

$nomsInput = array("Nom","Prénom","Adresse E-mail","Ville","Sexe");
$elements = array("-- Intitulé de Formation --","Développeur Logiciel","Designer Web","Intégrateur","Chef de Groupe");

afficherInput($nomsInput);
echo "<br><br>";
alimenterListeDeroulante($elements);
echo "<br><br>";
echo '<input type="submit" value="bouton">';
?>