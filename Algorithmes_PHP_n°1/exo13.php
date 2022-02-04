<h1>Exercice 13</h1>
<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?php

$notes = [];

for ($i=1; $i <=10 ; $i++) { 
    array_push($notes, random_int(0,20)); //array_push s'applique directement à la variable
}

var_dump($notes);

echo "Les notes obtenues par l'élève sont : ".implode(" ",$notes);

// $sommeNotes=0;
// foreach ($notes as $note) {
//     // echo "$note ";
//     $sommeNotes += $note; 
// }

echo "</br>Sa moyenne générale est donc de : ".round((array_sum($notes)/count($notes)),2);