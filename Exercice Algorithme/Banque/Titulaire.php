
<?php

class Titulaire {   
    private array $_Comptes;
    private $_nom;
    private $_prenom;
    private $_naissance;
    private $_ville;
    public function __construct($nom,$prenom,$naissance,$ville)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_naissance = new DateTime($naissance);
        $this->_ville = $ville;
        $this->_Comptes = [];
    }
    public function getnom()
    {
        return $this->_nom;}
    public function getprenom()
    {
        return $this->_prenom;}
    public function getnaissance()
    {
        return $this->_naissance;}
    public function getage()
    {
        $origin = new DateTime();
        $interval = $this->_naissance->diff($origin);
        return $interval->format('%Y ans');
    }
    public function getville()
    {return $this->_ville;}
    public function ajouterCompte($Compte){
        array_push($this->_Comptes, $Compte);
    }

    public function __toString()
  {
    return $this->_nom. " ". $this->_prenom. $this->getage(). " ". $this->_ville;
}
    public function __afficherComptes()
    {
    if(count($this->_Comptes) > 0){
        echo "$this<br><br> ";
        foreach($this->_Comptes as $compte)
         echo "". $compte. "<br>";
        }

else {
    echo "$this n'a pas de comptes";
}

}
}
?>