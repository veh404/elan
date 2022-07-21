<h1>Introduction PHP</h1>

<?php


// EXERCICE 15
$origin = new DateTime();

class Livre {
    private $_titre;
    private $_pages;
    private $_prix;
    private $_annee;
    public function __construct($titre,$pages,$prix,$annee)
    {$this->_titre = $titre;
        $this->_prix= $prix;
        $this->_pages = $pages;
        $this->_annee = $annee;
    }
    public function gettitre()
    {return $this->_titre;}
    public function getpages()
    {return $this->_pages;}
    public function getprix()
    {return $this->_prix;}
    public function getannee()
    {return $this->_annee;}


    public function __toString()
    {
        return $this->_pages . " ".$this->_titre. " a ". $this->getprix(). " ans <br>";
    }
}

$p1 = new Livre("Ca","1138", "20", "1922-01-15", "Stephen King");
$p2 =new Livre("Simetierre","374", "15", "1983", "Stephen King");
$p3 = new Livre("Le Fléau","823", "14", "1978", "Stephen King");
$p4 =new Livre("Shining","447", "16", "1977", "Stephen King");


echo $p1;
echo $p2;
echo $p3;
echo $p4;