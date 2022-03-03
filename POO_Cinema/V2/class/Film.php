<?php

class Film {
    private string $_titre;
    private int $_duree;
    private DateTime $_dateSortie;
    private Genre $_genre;
    private string $_synopsis;
    private Realisateur $_realisateur;
    private array $_listeInterpretations;


    function __construct(string $titre, int $duree, $dateSortie, Genre $genre, string $synopsis, Realisateur $realisateur){
        $this->_titre = $titre;
        $this->_duree = $duree;
        $this->_dateSortie = new DateTime($dateSortie);
        $this->_genre = $genre;
        $this->_synopsis = $synopsis;
        $this->_realisateur = $realisateur;
        $this->_listeInterpretations = [];
        if (! in_array($this, $realisateur->getFilmographie())) {
            $realisateur->ajouterFilm($this);
        }
        if (! in_array($this, $genre->getListeFilms())) {
            $genre->ajouterFilm($this);
        }
    }
    function __toString() {
        return "« ".$this->_titre." »";
    }

    public function getTitre() {
        return $this->_titre;
    }
    public function getDuree() {
        return $this->_duree;
    }
    public function getDateSortie() {
        return $this->_dateSortie;
    }
    public function getGenre() {
        return $this->_genre;
    }
    public function getSynopsis() {
        return $this->_synopsis;
    }
    public function getRealisateur() {
        return $this->_realisateur;
    }
    public function getlisteInterpretations() {
        return $this->_listeInterpretations;
    }

    public function ajouterInterpretation(Interpretation $interpretation) {
        $this->_listeInterpretations []= $interpretation;
    }

    public function infosToDisplay() {
        return "<p>Informations sur le film :</p>
                <ul>
                    <li> Titre : $this</li>
                    <li> Durée : ".convertirDuree($this->_duree)."</li>
                    <li> Date de sortie : ".date_format($this->_dateSortie,"Y-m-d")."</li>
                    <li> Genre : <u>".($this->_genre)->getNomGenre()."</u></li>
                    <li> Synopsis : ".$this->_synopsis."</li>
                    <li> Réalisateur : <b>".$this->_realisateur."</b></li>
                </ul>";
    }
    public function castingToDisplay() {
        $toDisplay = "Casting du film $this :<ul>";
        foreach ($this->_listeInterpretations as $interpretation) {
            $toDisplay .= "<li>".$interpretation->getActeur()." dans le rôle de ".$interpretation->getRole()."</li>";
        }
        $toDisplay .= "</ul>";
        return $toDisplay;
    }
}