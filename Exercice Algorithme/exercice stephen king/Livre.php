<?php


class Livre {
    private string $_titre;
    private int $_pages;
    private $_prix;
    private Auteur $_auteur;

    public function __construct($titre,$pages,$prix,$annee,$auteur)
    {$this->_titre = $titre;
        $this->_prix= $prix;
        $this->_pages = $pages;
        $this->_annee = $annee;
        $this->_auteur = $auteur;
        $this->_auteur->ajouterLivre($this);
    }
    public function gettitre()
    {return $this->_titre;}
    public function getpages()
    {return $this->_pages;}
    public function getprix()
    {return $this->_prix;}
    public function getauteur()
    {return $this->_auteur;}


    public function __toString()
    {
        return $this->_titre. " (".$this->_annee. ") : ".$this->_pages." pages / ". $this->getprix().  " €<br>";
    }
}
