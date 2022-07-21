
<?php 

function genererCheckbox($target) {

        foreach($target as $val=>$check){

        echo '  <input type="checkbox"';
                if ($check > 0) {
                echo "checked";
        }

        echo '><label>'.$val.'</label><br>';
    } 
}

$elements = array('Choix 1' => 0,'Choix 2' => 0,'Choix 3' => 1,'Choix 4' => 0,);

genererCheckbox($elements);

?>