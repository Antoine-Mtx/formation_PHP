<?php

class Auteur {
    private string $_nom;
    private string $_prenom;
    private array $_livres;

    function __construct($nom, $prenom) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_livres = [];
    }
    public function __toString() {
        return ($this->getPrenom())." ".($this->getNom());
    }
    public function getNom() {
        return $this->_nom;
    }
    public function getPrenom() {
        return $this->_prenom;
    }
    public function addLivre($nouveauLivre) {
        if (in_array($nouveauLivre,$this->_livres) == false) {
            $this->_livres []= $nouveauLivre;
        }
    }
    public function afficherBibliographie() {
        echo "<b>Bibliographie de ".$this." :</b></br></br>";
        if ($this->_livres == []) {
            echo "Aucune oeuvre répertoriée pour le moment</br></br>";
        }
        foreach ($this->_livres as $livre) {
            echo $livre."</br>";
        }
    }
}