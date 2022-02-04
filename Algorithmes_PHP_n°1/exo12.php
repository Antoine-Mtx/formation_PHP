<h1>Exercice 12</h1>
<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau  contenant  clé  et  valeur),  dire  bonjour  aux  différentes  personnes  dans  leur  langue respective (français ➔«Salut», anglais ➔«Hello», espagnol ➔«Hola»)</p>

<h2>Résultat</h2>

<?php

$formateurs = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

foreach ($formateurs as $prenom => $langue) {
    if ($langue == "FRA") {
        echo "Bonjour $prenom</br>";
    } else if ($langue == "ESP") {
        echo "Hola $prenom</br>";
    } else {
        echo "Hello $prenom</br>";
    }
}

echo "</br>Variante avec tableau trié :</br></br>";

ksort($formateurs); // effectue un tri par ordre croissant sur les clés mais renvoie un booléen ! Modifie la variable à laquelle on applique le tri

foreach ($formateurs as $prenom => $langue) {
    if ($langue == "FRA") {
        echo "Bonjour $prenom</br>";
    } else if ($langue == "ESP") {
        echo "Hola $prenom</br>";
    } else {
        echo "Hello $prenom</br>";
    }
}