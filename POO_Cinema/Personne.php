<?php

class Personne {
    private string $_nom;
    private string $_prenom;
    private string $_sexe;
    private DateTime $_dateNaissance;

    function __construct(string $nom,string $prenom,string $sexe,$dateNaissance){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe;
        $this->_dateNaissance = new DateTime($dateNaissance);
    }

    function __toString() {
        return $this->_prenom." ".$this->_nom;
    }

    public function getNom() {
        return $this->_nom;
    }
    public function getPrenom() {
        return $this->_prenom;
    }
    public function getSexe() {
        return $this->_sexe;
    }
    public function getDateNaissance() {
        return $this->_dateNaissance;
    }

    public function setNom($nouveauNom) {
        $this->_nom = $nouveauNom;
    }
}