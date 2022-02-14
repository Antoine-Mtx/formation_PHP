<?php

class Film {
    private string $_titre;
    private int $_duree;
    private DateTime $_dateSortie;
    private Genre $_genre;
    private string $_synopsis;
    private Realisateur $_realisateur;
    private array $_listeActeurs;


    function __construct(string $titre,int $duree, $dateSortie, Genre $genre,string $synopsis, Realisateur $realisateur, array $listeActeurs){
        $this->_titre = $titre;
        $this->_duree = $duree;
        $this->_dateSortie = new DateTime($dateSortie);
        $this->_genre = $genre;
        $this->_synopsis = $synopsis;
        $this->_realisateur = $realisateur;
        $this->_listeActeurs = $listeActeurs;
        if (! in_array($this, $realisateur->getFilmographie())) {
            $realisateur->ajouterFilm($this);
        }
        foreach ($this->_listeActeurs as $acteur) {
            if (! in_array($this, $acteur->getFilmographie())) {
                $acteur->ajouterFilm($this);
            }
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
    public function afficherCasting() {
        echo "<p>Casting du film ".$this." :</p>
            <ul>";
                foreach ($this->_listeActeurs as $personnage => $acteur) {
                    echo "<li>".$personnage." interprêté par ".$acteur."</li>";
                }
            echo "</ul>";

    }
    public function afficherInfos() {
        echo "<p>Informations sur le film :</p>
                <ul>
                    <li> Titre : ".$this->_titre."</li>
                    <li> Durée : ".convertirDuree($this->_duree)."</li>
                    <li> Date de sortie : ".date_format($this->_dateSortie,"Y-m-d")."</li>
                    <li> Genre : ".($this->_genre)->getNomGenre()."</li>
                    <li> Synopsis : ".$this->_synopsis."</li>
                    <li> Réalisateur : ".$this->_realisateur."</li>
                    <li> Rôles : ";
                        foreach ($this->_listeActeurs as $personnage => $acteur) {
                            echo $personnage." interprêté par ".$acteur." / ";
                        }
                    echo "</li>
                </ul>";
    }
}