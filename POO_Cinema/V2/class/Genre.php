<?php

class Genre {
    private string $_nomGenre;
    private array $_listeFilms ;

    function __construct($nomGenre) {
        $this->_nomGenre = $nomGenre;
        $this->_listeFilms = [];
    }
    function __toString(){
        return "<u>".$this->_nomGenre."</u>";
    }

    public function getNomGenre() {
        return $this->_nomGenre;
    }
    public function getListeFilms() {
        return $this->_listeFilms;
    }

    public function ajouterFilm(Film $nouveauFilm) {
        $this->_listeFilms []= $nouveauFilm;
    }

    public function listeFilmsToDisplay() {
        $toDisplay = "Liste des films du genre ".$this->_nomGenre." (".count($this->_listeFilms)." au total) :<ul>";
        foreach ($this->_listeFilms as $film) {
            $toDisplay .= "<li>$film</li>";
        }
        $toDisplay .= "</ul>";
        return $toDisplay;
    }
}