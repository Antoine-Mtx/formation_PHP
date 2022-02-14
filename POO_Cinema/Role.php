<?php

class Role {
    private string $_personnage;
    private array $_acteurs;

    function __construct(string $personnage, Acteur $acteur) {
        $this->_personnage = $personnage;
        $this->_acteurs []= $acteur;
    }

    function __toString() {
        return $this->_personnage;
    }

    public function getActeurs(){
        return $this->_acteurs;
    } 

    public function ajouterActeur($film, Acteur $acteur) {
        $this->_acteurs []= $acteur;
    }

    public function afficherActeurs() {
        echo "<p>Interpétations pour le rôle de « ".$this." »</p><ul>";
        foreach ($this->_acteurs as $film => $acteur) {
            echo "<li>".$acteur." dans ".$film."</li>";
        }
        echo "</ul>";
    }
}