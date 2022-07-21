<?php


class Compte {
    private string $_type;
    private $_devise;
    private int $_solde;
    private Voiture $_Voiture;

    public function __construct($type,$solde,$devise,$Voiture)
    {
        $this->_type = $type;
        $this->_solde= $solde;
        $this->_devise = $devise;
        $this->_Voiture = $Voiture;
        $this->_Voiture->ajouterCompte($this);
    }
    public function gettype()
    {return $this->_type;}
    public function getdevise()
    {return $this->_devise;}
    public function getsolde()
    {return $this->_solde;}
    public function getVoiture()
    {return $this->_Voiture;}

    public function credit($depot){
    $this -> _solde = $this -> _solde + $depot;
    }
    public function retrait($retrait){
    $this -> _solde = $this -> _solde - $retrait;
    return $this -> _solde;
    }
    public function virement(float $virMontant, Compte $compteCible)
    {
    $this->retrait($virMontant);
    $compteCible->credit($virMontant);
    }



    public function __toString()
    {
        return $this->_type. " (".$this->_devise. ") : "
        .$this->getsolde().  " ".$this->_devise;
    }
}
