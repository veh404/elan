
<?php 

class Texte
{
    private $texte;

    function __construct($texte){
        $this->texte = $texte;
    }

    public function convertirMajRouge() {

        echo mb_strtoupper("<span style='color: red;'>$this->texte</span>");
    }
}

$garfield = New Texte("J'ai pas du tout aimé le film Garfield.");

$garfield->convertirMajRouge();

?>