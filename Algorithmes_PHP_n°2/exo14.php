<?php

class VoitureElec extends Voiture {
    private $_autonomie;

    function __construct(string $marque, string $modele, int $nbPortes, int $autonomie) {
        parent::__construct($marque,$modele,$nbPortes);
        $this->_autonomie = $autonomie;
    }

    public function getAutonomie() {
        return $this->_autonomie;
    }

    public function setAutonomie($nouvelleAutonomie) {
        $this->_autonomie = $nouvelleAutonomie;
    }

    public function afficherInfos() {
        $toDisplay = "<p>Infos sur le véhicule $this : </p>";
        $toDisplay .= "********************";
        $toDisplay .= "<ul>";
        $toDisplay .= "<li>Marque : $this->_marque</li>";
        $toDisplay .= "<li>Modèle : $this->_modele</li>";
        $toDisplay .= "<li>Autonomie : $this->_autonomie km</li>";
        $toDisplay .= "<li>Nombre de Portes : $this->_nbPortes</li>";
        $toDisplay .= "<li>Vitesse actuelle : $this->_vitesseActuelle km/h</li>";
        $toDisplay .= "</ul>";
        return $toDisplay;
    }
}

$ve1 = new VoitureElec("BMW","I3",5,100);