<?php

class Livre {
    private string $_titre;
    private int $_nbPages;
    private int $_anneeParution;
    private float $_prix;
    private Auteur $_auteur;

    function __construct($titre, $nbPages, $anneeParution, $prix, $auteur) {
        $this->_titre = $titre;
        $this->_nbPages = $nbPages;
        $this->_anneeParution = $anneeParution;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $auteur->addLivre($this);
    }
    public function __toString() {
        return "« ".($this->getTitre())." » (".($this->getAnneeParution()).") : ".($this->getNbPages())." pages / ".($this->getPrix())." €";
    }
    public function getTitre() {
        return $this->_titre;
    }
    public function getNbPages() {
        return $this->_nbPages;
    }
    public function getAnneeParution() {
        return $this->_anneeParution;
    }
    public function getPrix() {
        return $this->_prix;
    }
    public function getAuteur() {
        return $this->_auteur;
    }
    public function setPrix($nouveauPrix) {
        $this->_prix = $nouveauPrix;
    }
}