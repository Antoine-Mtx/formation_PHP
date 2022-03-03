<?php

class Film {
    private string $_titre;
    private int $_duree;
    private DateTime $_dateSortie;
    private Genre $_genre;
    private string $_synopsis;
    private Realisateur $_realisateur;
    private Casting $casting;


    function __construct(string $titre,int $duree, $dateSortie, Genre $genre,string $synopsis, Realisateur $realisateur, array $distributionRoles){
        $this->_titre = $titre;
        $this->_duree = $duree;
        $this->_dateSortie = new DateTime($dateSortie);
        $this->_genre = $genre;
        $this->_synopsis = $synopsis;
        $this->_realisateur = $realisateur;
        $this->_casting = new Casting($this, $distributionRoles);
        if (! in_array($this, $realisateur->getFilmographie())) {
            $realisateur->ajouterFilm($this);
        }
    }

    function __toString() {
        return $this->_titre;
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
    public function getCasting() {
        return $this->_casting;

    }
    public function infosToDisplay() {
        return "<p>Informations sur le film :</p>
                <ul>
                    <li> Titre : ".$this->_titre."</li>
                    <li> Durée : ".convertirDuree($this->_duree)."</li>
                    <li> Date de sortie : ".date_format($this->_dateSortie,"Y-m-d")."</li>
                    <li> Genre : ".($this->_genre)->getNomGenre()."</li>
                    <li> Synopsis : ".$this->_synopsis."</li>
                    <li> Réalisateur : ".$this->_realisateur."</li>
                    <li>".$this->_casting."</li>
                </ul>";
    }
}