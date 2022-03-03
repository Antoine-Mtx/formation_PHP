<?php

class Interpretation {
    private Film $_film;
    private Role $_role;
    private Acteur $_acteur;

    function __construct($film,$role,$acteur){
        $this->_film = $film;
        $this->_role = $role;
        $this->_acteur = $acteur;
        
        $this->_film->ajouterInterpretation($this);
        $this->_role->ajouterInterpretation($this);
        $this->_acteur->ajouterInterpretation($this);
    }
    function __toString(){
        return "<p>L'acteur ".$this->_acteur." interprête le rôle de ".$this->_role." dans le film ".$this->_film.".</p>";
    }

    public function getFilm() {
        return $this->_film;
    }
    public function getRole() {
        return $this->_role;
    }
    public function getActeur() {
        return $this->_acteur;
    }

}