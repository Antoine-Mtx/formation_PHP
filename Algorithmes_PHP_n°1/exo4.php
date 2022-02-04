<h1>Exercice 4</h1>
<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php

$chaineDeCaracteres = "Engage le jeu que je le gagne";

$chaineDeCaracteres_sans_espaces = str_replace(" ","",$chaineDeCaracteres);

$chaineDeCaracteres_sans_espaces_en_minuscules = strtolower($chaineDeCaracteres_sans_espaces);

if (strrev($chaineDeCaracteres_sans_espaces_en_minuscules) == $chaineDeCaracteres_sans_espaces_en_minuscules){
    echo "La phrase « $chaineDeCaracteres » est un palindrome.";
} else {
    echo "La phrase « $chaineDeCaracteres » n'est pas un palindrome.";
};