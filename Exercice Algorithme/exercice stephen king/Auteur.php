
<?php

class Auteur {   
    private array $_Livres;
    private $_nom;
    private $_prenom;
    public function __construct($nom,$prenom)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_Livres = [];
    }
    public function getnom()
    {return $this->_nom;}
    public function getprenom()
    {return $this->_prenom;}
    public function ajouterLivre($Livre){
        array_push($this->_Livres, $Livre);
    }

    public function __toString()
  {
    return $this->_nom. " ". $this->_prenom;
}
    public function __afficherBibliographie()
    {
    if(count($this->_Livres) > 0){
        echo "$this<br><br> ";
        foreach($this->_Livres as $livre)
         echo "". $livre. "<br>";
        }

else {
    echo "$this n'a pas de livres";
}

}
}
?>