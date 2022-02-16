<?php

class Casting {
    private $_film;
    private $_distributionRoles;

    function __construct(Film $film, array $distributionRoles) {
        $this->_film = $film;
        $this->_distributionRoles = $distributionRoles;
    }

    function __toString() {
        $toDisplay = "Dans le film ".$this->_film." : <ul>";
        foreach ($this->_distributionRoles as $interpretation) {
            $toDisplay .= "<li>".$interpretation[0]." interprète le personnage de ".$interpretation[1]."</li>";

        }
        $toDisplay .= "</ul>";
        return $toDisplay;
    }

    public function remplaceActeur(Acteur $acteurSortant, Acteur $acteurRentrant) {
        foreach ($this->_distributionRoles as $acteur => $role) {
            if ($acteur == $acteurSortant) {
                $acteur = $acteurRentrant;
            }
        }
    }

    public function getDistributionRoles() {
        return $this->_distributionRoles;
    }
}
