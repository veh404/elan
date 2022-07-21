
<?php 

function repeterImage($target,$nb) {

    for ($nb = $nb; $nb > 0; $nb--){

        echo '<img src="'.$target.'">';
    }
}

$url = 'https://c.tenor.com/eWaNEBXjETsAAAAM/sus-amogus.gif';

repeterImage($url,4);

?>