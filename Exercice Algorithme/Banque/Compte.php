<?php


class Compte {
    private string $_type;
    private int $_devise;
    private $_solde;
    private Titulaire $_Titulaire;

    public function __construct($type,$devise,$solde,$annee,$Titulaire)
    {
        $this->_type = $type;
        $this->_solde= $solde;
        $this->_devise = $devise;
        $this->_annee = $annee;
        $this->_Titulaire = $Titulaire;
        $this->_Titulaire->ajouterCompte($this);
    }
    public function gettype()
    {return $this->_type;}
    public function getdevise()
    {return $this->_devise;}
    public function getsolde()
    {return $this->_solde;}
    public function getTitulaire()
    {return $this->_Titulaire;}


    public function __toString()
    {
        return $this->_type. " (".$this->_annee. ") : "
        .$this->_devise." / ". $this->getsolde().  " ".$this->_annee;
    }
}
