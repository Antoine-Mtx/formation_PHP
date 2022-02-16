<?php

class Role {
    private string $_personnage;
    private array $_interpretes;

    function __construct(string $personnage, Acteur $acteur) {
        $this->_personnage = $personnage;
        $this->_interpretes []= $acteur;
    }

    function __toString() {
        return $this->_personnage;
    }

    public function getInterpretes() {
        return $this->_interpretes;
    } 

    public function ajouterInterprete(Acteur $acteur) {
        $this->_interpretes []= $acteur;
    }

    public function InterpretesToDisplay() {
        $toDisplay = "<p>Interpétations pour le rôle de « ".$this." »</p><ul>";
        foreach ($this->_interpretes as $film => $acteur) {
            $toDisplay .= "<li>".$acteur." dans ".$film."</li>";
        }
        $toDisplay .= "</ul>";
        return $toDisplay;
    }
}