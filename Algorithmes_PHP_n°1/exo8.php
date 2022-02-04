<h1>Exercice 1</h1>
<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme indentée classique.</p>

<h2>Résultat</h2>

<?php

$nb=random_int(0,9);

echo "Solution While pour la table de $nb :</br></br>";

$i=1;
while ($i <= 9) {
    echo "$i * $nb = ".($i*$nb)."</br>";
    $i++;
}

$nb=random_int(0,9);

echo "</br>Solution For pour la table de $nb :</br></br>";

for ($i=1; $i <10 ; $i++) { 
    echo "$i * $nb = ".($i*$nb)."</br>";
}

$nb=random_int(0,9);

echo "</br>Solution ForEach pour la table de $nb :</br></br>";

foreach (range(1,9) as $i) {
    echo "$i * $nb = ".($i*$nb)."</br>";
}