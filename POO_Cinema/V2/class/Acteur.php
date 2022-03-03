<?php

class Acteur extends Personne {
    private array $_listeInterpretations;

    function __construct(string $nom,string $prenom,string $sexe,$dateNaissance) {
        parent::__construct($nom,$prenom,$sexe,$dateNaissance);
        $this->_listeInterpretations = [];
    }

    public function getlisteInterpretations() {
        return $this->_listeInterpretations;
    }

    public function ajouterInterpretation(Interpretation $interpretation) {
        $this->_listeInterpretations []= $interpretation;
    }

    public function filmographieToDisplay() {
        $toDisplay = "";
        if (count($this->_listeInterpretations)==0) {
            if ($this->_sexe == "homme") {
                $toDisplay .= "<p>Aucun film repertorié pour l'acteur ".$this."</p>";
            } else {
                $toDisplay .= "<p>Aucun film repertorié pour l'actrice ".$this."</p>";
            }
        } else
        $toDisplay .= "Filmographie de $this :<ul>";
        foreach ($this->_listeInterpretations as $interpretation) {
            $toDisplay .= "<li>".$interpretation->getFilm()." avec le rôle de ".$interpretation->getRole()."</li>";
        }
        $toDisplay .= "</ul>";
        return $toDisplay;
    }
}