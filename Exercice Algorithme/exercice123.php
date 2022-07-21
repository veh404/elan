
<?php 

class Texte
{
    private $texte;

    function __construct($texte){
        $this->texte = $texte;
    }

    public function convertirMajRouge() {

        "<span style='color: red;'>echo strtoupper($this->texte)</span>";
    }
}

$garfield = New Texte("J'ai pas du tout aimé le film Garfield.");

$garfield->convertirMajRouge();
?>