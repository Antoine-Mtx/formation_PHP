<h1>Exercice 14</h1>
<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php

$dateBirth = new DateTime("1985-01-17");
$dateToday = new DateTime();

$age = date_diff($dateToday,$dateBirth);

echo "Age de la personne : ".($age->y)." ans ".($age->m)." mois ".($age->d)." jours";

var_dump($age);