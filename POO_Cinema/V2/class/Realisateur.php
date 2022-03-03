<?php

class Realisateur extends Personne {
    private array $_filmographie;

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

    public function filmographieToDisplay() {
        if (count($this->_filmographie)==0) {
            $toDisplay = "<p>Aucun film repertorié pour ce réalisateur</p>";
        } else {
            $toDisplay = "Filmographie de $this :<ul>";
            foreach ($this->_filmographie as $film) {
                $toDisplay .= "<li>.$film.</li>";
            }
            $toDisplay .= "</ul>";
        }
        return $toDisplay;
    }
}