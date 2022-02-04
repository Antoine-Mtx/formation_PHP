<h1>Exercice 7</h1>
<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge:
    <ul>
        <li>Poussin: entre 6 et 7 ans</li>
        <li>Pupille: entre 8 et 9 ans</li>
        <li>Minime: entre 10 et 11 ans</li>
        <li>Cadet: à partir de 12 ans</li>
        <li>Si la catégorie n’est pas gérée, merci de le préciser.</li>
    </ul>
</p>

<h2>Résultat</h2>

<?php

$age=random_int(0,14);

if ($age>=6 && $age<=7) {
    $categorie = "Poussin";
} else if ($age>=8 && $age<=9) {
    $categorie = "Pupille";
} else if ($age>=10 && $age<=11) {
    $categorie = "Minime";
} else if ($age>=12 && $age<=14) {
    $categorie = "Cadet";
} else {
    $categorie = "non gérée";
}

if ($categorie == "non gérée") {
    echo "Un enfant de $age an(s) n'appartient à aucune catégorie";
} else {
    echo "L’enfant qui a $age ans appartient à la catégorie « $categorie »";
}