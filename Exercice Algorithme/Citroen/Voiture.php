
<?php

class Voiture {   
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_vitesseActuelle;
    private $_etatVoiture;
    public function __construct($marque,$modele,$nbPortes)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = 0;
        $this->_etatVoiture = false;

    }

    public function getmarque()
    {
        return $this->_marque;}

    public function getmodele()
    {
        return $this->_modele;}

    public function getnbPortes()
    {
        return $this->_nbPortes;}

    public function getvitesseActuelle()

    {
        return $this->_vitesseActuelle;
    }

    public function __toString()
  {
    return $this->_marque. " ". $this->_modele. $this->getnbPortes(). " ". $this->_vitesseActuelle;
}

    public function demarrer(){

    $this -> _vitesseActuelle = $this -> _vitesseActuelle;
    $this -> _etatVoiture = true;

    return "Le véhicule ". $this->_marque. " ". $this->_modele. " démarre<br><br>";
        }
    public function accelerer($acceleration){
        if($this->_etatVoiture){
        $this -> _vitesseActuelle = $this -> _vitesseActuelle + $acceleration;
        return "Le véhicule ". $this->_marque. " ". $this->_modele. " accélère de ". $this -> _vitesseActuelle. "km / h<br><br>";
    }
}

    public function ralentir($ralentissement){
        if($this->_etatVoiture){
        $this -> _vitesseActuelle = $this -> _vitesseActuelle - $ralentissement;
        return "Le véhicule ". $this->_marque. " ". $this->_modele. " ralenti de ". $this -> _vitesseActuelle. "km / h<br><br>";
    }

    }
    public function stopper(){

        $this->_etatVoiture = false;
        $this -> _vitesseActuelle = 0;
        return "Le véhicule ". $this->_marque. " ". $this->_modele. " est stoppé<br><br>";

        }

}

?>