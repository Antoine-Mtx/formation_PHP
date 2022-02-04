<h1>Exercice 15</h1>
<p>Créer une classe Personne (nom, prénom et date de naissance).Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.
</br>$p1 = new Personne("DUPONT","Michel", "1980-02-19");
</br>$p2 = new Personne("DUCHEMIN","Alice", "1985-01-17");
</p>

<h2>Résultat</h2>

<?php

class Personne {
    private $_nom;
    private $_prenom;
    private $_dateNaissance;

    function __construct($nom, $prenom, $dateNaissance) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = $dateNaissance;
    }
    public function getNom() {
        return $this->_nom;
    }
    public function getPrenom() {
        return $this->_prenom;
    }
    public function getDateNaissance() {
        return $this->_dateNaissance;
    }
    public function getAge() {
        $dateBirth = new DateTime($this->_dateNaissance);
        $dateToday = new DateTime();
        $age=date_diff($dateToday,$dateBirth);
        return ($age->y);
    }
    public function setNom($newName) {
        $this->_nom=$newName;
    }
}

$p1 = new Personne("DUPONT","Michel","1980-02-19");

echo ($p1->getPrenom())." ".($p1->getNom())." a ".($p1->getAge())." ans";

$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");

echo "</br>".($p2->getPrenom())." ".($p2->getNom())." a ".($p2->getAge())." ans";

