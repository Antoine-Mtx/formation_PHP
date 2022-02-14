<?php

class Genre {
    private string $_nomGenre;
    private array $_listeFilms ;

    function __construct($nomGenre) {
        $this->_nomGenre = $nomGenre;
        $this->_listeFilms = [];
    }

    public function getNomGenre() {
        return $this->_nomGenre;
    }

    public function ajouterFilm(Film $nouveauFilm) {
        $this->_listeFilms []= $nouveauFilm;
    }
}