<?php

class Voiture {
    protected string $_marque;
    protected string $_modele;
    protected int $_nbPortes;
    protected bool $_allumage;
    protected float $_vitesseActuelle;

    function __construct(string $marque, string $modele, int $nbPortes)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_allumage = false;
        $this->_vitesseActuelle = 0;
    }
    function __toString() {
        return "$this->_marque $this->_modele";
    }

    public function getMarque() {
        return $this->_marque;
    }
    public function getModele() {
        return $this->_modele;
    }
    public function getNbPortes() {
        return $this->_nbPortes;
    }
    public function getVitesseActuelle() {
        return $this->_vitesseActuelle;
    }

    public function setVitesseActuelle($nouvelleVitesse) {
        return $this->_vitesseActuelle = $nouvelleVitesse;
    }


    public function demarrer() {
        $this->_allumage = true;
        return "Le véhicule $this démarre";
    }
    public function accelerer(float $acceleration) {
        if (! $this->_allumage) {
            return "<p>Le véhicule $this veut accélérer de $acceleration km/h<br>Pour accélérer, il faut démarrer le véhicule $this</p>";
        } else {
        $this->_vitesseActuelle += $acceleration; 
        return "<p>Le véhicule $this accélère de $acceleration km/h</p>";
        }
    }
    public function stopper() {
        if (! $this->_allumage) {
            return "<p>Le véhicule $this n'est pas démarré</p>";
        } else {        
        $this->_vitesseActuelle = 0;
        $this->_allumage = false;
        return "<p>Le véhicule $this est à l'arrêt</p>";
        }
    }
    public function ralentir($deceleration) {
        if (! $this->_allumage) {
            return "<p>Le véhicule $this veut décélérer de $deceleration km/h<br>Pour décélérer, il faut démarrer le véhicule $this</p>";
        } else if ($deceleration > $this->_vitesseActuelle) {
            return  "<p>Le véhicule $this veut décélérer de $deceleration km/h<br>
                    Le véhicule a une vitesse actuelle de seulement $this->_vitesseActuelle km/h<br>
                    Le véhicule $this décélère donc de $this->_vitesseActuelle km/h</p>";
        } else {
        $this->_vitesseActuelle -=  $deceleration; 
        return "<p>Le véhicule $this décélère de $deceleration km/h</p>";
        }
    }

    public function afficherVitesseActuelle() {
        return "<p>La vitesse du véhicule $this est de : $this->_vitesseActuelle km/h</p>";
    }

    public function afficherInfos() {
        $toDisplay = "<p>Infos sur le véhicule $this : </p>";
        $toDisplay .= "********************";
        $toDisplay .= "<ul>";
        $toDisplay .= "<li>Marque : $this->_marque</li>";
        $toDisplay .= "<li>Modèle : $this->_modele</li>";
        $toDisplay .= "<li>Nombre de Portes : $this->_nbPortes</li>";
        $toDisplay .= "<li>Vitesse actuelle : $this->_vitesseActuelle km/h</li>";
        $toDisplay .= "</ul>";
        return $toDisplay;
    }
}

$v1 = new Voiture("Peugeot","408",5);
$v2 = new Voiture("Citroën","C4",3);