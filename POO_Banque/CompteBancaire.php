<?php

class CompteBancaire {
    private string $_libelle;
    private float $_solde;
    private string $_devise;
    private Titulaire $_titulaire;

    function __construct($libelle,$solde,$devise,$titulaire) {
        $this->_libelle = $libelle;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $titulaire->ajouterCompte($this);
    }

    public function __toString(){
        return $this->_libelle;
    }
    public function getInfos(){
        return "Bonjour ".$this->_titulaire->getPrenom()." ".$this->_titulaire->getNom().", votre compte bancaire : « ".$this->_libelle." » présente un solde de <b>".$this->_solde." ".$this->_devise."</b></br></br>";
    }
    public function crediter(float $montant) {
        $this->_solde += $montant; 
    }
    public function debiter(float $montant) {
        $this->_solde -= $montant; 
    }
    public function virer(float $montant,CompteBancaire $compteBeneficiaire) {
        if ($montant <= $this->_solde) {
            $this->debiter($montant);
            $compteBeneficiaire->crediter($montant);
        } else {
            echo "<p>« Virement impossible, le montant excède le solde de votre compte bancaire envoyeur »</p>";
        }
    }
}