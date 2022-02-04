<h1>Exercice 9</h1>
<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, «non imposable»).</p>

<h2>Résultat</h2>

<?php

$tableau_genres = ["femme","homme"];

$age = random_int(0,80);
$genre = $tableau_genres[array_rand($tableau_genres)]; // un poil barbare de récupérer une valeur via une clé récupérée elle-même par une valeur sélectionnée aléatoirement

echo "Genre : $genre</br>";
echo "Age : $age</br>";

if ($genre == "femme" && $age >= 18 && $age <= 35) {
    $statut = "imposable";
} else if ($genre == "homme" && $age >= 20) {
    $statut = "imposable";
} else {
    $statut = "non imposable";
}

echo "</br>La personne est $statut.";
