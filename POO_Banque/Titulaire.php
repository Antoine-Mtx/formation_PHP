<?php

class Titulaire {
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateDeNaissance;
    private string $_ville;
    private array $_comptesBancaires;

    function __construct($nom,$prenom,$dateDeNaissance,$ville) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateDeNaissance = new DateTime($dateDeNaissance);
        $this->_ville = $ville;
        $this->_comptesBancaires = [];
    }

    public function __toString(){
        return "Informations sur le titulaire :
            <ul>
                <li>Nom : ".$this->_nom."</li>
                <li>Prénom : ".$this->_prenom."</li>
                <li>Date de naissance : ".$this->_dateDeNaissance->format("d/m/Y")."</li>
                <li>Age : ".$this->getAge()." ans</li>
                <li>Ville : ".$this->_ville."</li>
                <li>Comptes bancaires : ".implode(" / ",$this->_comptesBancaires)."</li>
            </ul>";
    }

    public function getPrenom(){
        return $this->_prenom;
    }
    public function getNom(){
        return $this->_nom;
    }
    public function getAge(){
        $dateToday = new DateTime();
        $age = date_diff($dateToday,$this->_dateDeNaissance);
        return $age->y;
    }
    public function ajouterCompte(CompteBancaire $compteAjoute){
        $this->_comptesBancaires []= $compteAjoute;        
    }
}
 