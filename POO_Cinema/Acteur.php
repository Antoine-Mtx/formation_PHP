<?php

class Acteur extends Personne {
    private array $_filmographie;
    private array $_rolesInterpretes;

    function __construct(string $nom,string $prenom,string $sexe,$dateNaissance) {
        parent::__construct($nom,$prenom,$sexe,$dateNaissance);
        $this->_filmographie = [];
    }

    public function getFilmographie() {
        return $this->_filmographie;
    }

    public function ajouterFilm(Film $nouveauFilm) {
        $this->_filmographie []= $nouveauFilm;
    }

    public function ajouterRole(Role $role) {
        if (in_arrray($role,$this->rolesInterpretes) == false) {      
            $this->_rolesInterpretes []= $role;
        } else if (in_arrray($this,$role->getActeurs) == false) {
            $role->ajouterActeur($this);
        }
    }

    public function FilmographieToDisplay() {
        $toDisplay = "";
        if (count($this->_filmographie)==0) {
            $toDisplay .= "<p>Aucun film repertorié pour cet acteur</p>";
        } else
        $toDisplay .= "Films dans les lesquels apparaît ".$this." :<ul>";
        foreach ($this->_filmographie as $film) {
            $toDisplay .= "<li>".$film->_titre."</li>";
        }
        $toDisplay .= "</ul>";
        return $toDisplay;
    }
}