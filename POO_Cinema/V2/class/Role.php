<?php

class Role {
    private string $_personnage;
    private array $_listeInterpretations;

    function __construct(string $personnage) {
        $this->_personnage = $personnage;
        $this->_listeInterpretations = [];
    }
    function __toString() {
        return "<i>$this->_personnage</i>";
    }

    public function getPersonnage() {
        return $this->_personnage;
    }
    public function getListeInterpretations() {
        return $this->_listeInterpretations;
    } 
    public function ajouterInterpretation(Interpretation $interpretation) {
        $this->_listeInterpretations []= $interpretation;
    }

    public function listeInterpretationsToDisplay() {
        $toDisplay = "Acteurs ayant inteprêté le rôle de $this :<ul>";
        foreach ($this->_listeInterpretations as $interpretation) {
            $toDisplay .= "<li>".$interpretation->getActeur()." dans le film ".$interpretation->getFilm()."</li>";
        }
        $toDisplay .= "</ul>";
        return $toDisplay;
    }
}