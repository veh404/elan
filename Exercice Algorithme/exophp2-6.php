
<?php 

function alimenterListeDeroulante($target) {

   echo '<select name="genre" id="gender-select">';

        foreach($target as $val){
          echo '<option value=">'.$val.'">'.$val.'</option>';
    }
    echo '</select>';
}
$elements = array("Monsieur","Madame","Mademoiselle");

alimenterListeDeroulante($elements);


?>