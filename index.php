<h1>Introduction au PHP</h1>

<?php

/*

commentaire sur plusieurs lignes

*/


// DECLARATION DE VARIABLES

$chaineDeCaracteres = "mon texte"; //string
$chaineDeCaracteres2 = "mon prix est très intéressant"; //string
$chaineDeCaracteres3 = "Mon prix est de";  // string
$entier = 50; //integer
$flottant = 9.99; //float
$booleen = true; // boolean (true or false)
$tableau1 = array("texte 1","texte 2","texte 3"); //array
$tableau2 = ["texte 1","texte 2"]; //array
$date = new DateTime(); //POO

// AFFICHAGE

echo "Test<br>"; //Test
echo $chaineDeCaracteres."<br>"; //mon texte
echo $chaineDeCaracteres2." ".$entier." euros<br>"; //mon prix est très intéressant 50 euros
echo "$chaineDeCaracteres3 $entier euros<br>"; //Mon prix est de 50 euros

// FONCTIONS CHAINES DE CARACTERES

echo "<br>";

// Compter le nombre de caractères (espaces compris !)

$nbCaracteres = strlen($chaineDeCaracteres);
echo "La phrase contient $nbCaracteres caractères<br>"; //on peut inclure la valeur d'une variable directement dans une chaîne de caractères
echo "La phrase contient ".strlen($chaineDeCaracteres)." caractères<br>"; //en revanche on doit utiliser l'opérateur . pour concaténer une fonction dans une chaîne de caractères

echo "<br>";

// Convertir une chaîne de caractères en majuscules

$chaineMajuscules = strtoupper($chaineDeCaracteres); //met en majuscules toute la chaîne de caractères (sauf les lettres avec accent)
echo "$chaineMajuscules <br>"; //MON TEXTE
$chaineMajuscules2 = mb_strtoupper($chaineDeCaracteres2); //met en majuscules toute la chaîne de caractères (y compris les lettres avec accent)
echo "$chaineMajuscules2 <br>"; //MON PRIX EST TRÈS INTÉRESSANT

echo "<br>";

// Compter le nombre de mots

$nbMots = str_word_count($chaineDeCaracteres);
echo "La phrase contient $nbMots mots<br>";

echo "<br>";

//FONCTION TABLEAUX

echo "<br>";

// Compter le nombre d'éléments présents dans un tableau
$tailleTableau1 = count($tableau1);
echo "le tableau 1 contient $tailleTableau1 éléments<br>";
echo "le tableau 2 contient ".count($tableau2)." éléments<br>";

echo "<br>";

// Accéder à la première valeur du tableau

echo $tableau1[0]."<br>";

echo "<br>";

//Déterminer la moyenne dans un tableau

$notes = [12,15,16,8,7,18];
$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes/count($notes),2); //on arrondit à la deuxième décimale
echo "la moyenne est $moyenne<br>";

echo "<br>";

// OPERATIONS MATHEMATIQUES

echo "<br>";

$nbArticles = 5;
$prixHT = 10.99;
$totalHT = $nbArticles * $prixHT;
echo "Le total HT est de $totalHT €<br>";

echo "<br>";

// Afficher le total TTC d'une facture

$tauxTVA = 0.20;
$totalTTC = $nbArticles * $prixHT * (1 + $tauxTVA);
echo "Le total TTC est de $totalTTC €<br>";

echo "<br>";

// Attention à ne pas mélanger les types !

$texte = "Texte";
$calcul = $texte - 5;
echo $calcul."<br>"; //Warning: A non-numeric value encountered in C:\laragon\www\formation_PHP\index.php on line 90 -5

// Connaître le type de la variable passée en paramètre

echo gettype($tableau1)."<br>"; // renvoie le type de la variable passée en paramètre
var_dump($tableau1); // renvoie les informations structurées d'une variable, Les tableaux et les objets sont explorés récursivement, avec des indentations, pour mettre en valeur leur structure.

echo "<br>";

// STRUCTURES DE CONTROLE

echo "<br>";

// IF

$prenom = "Georges";
$age = 22.5;

if ($age >= 18) {
    $resultat = "majeur";
} else {
    $resultat = "mineur";
}

echo "$prenom est $resultat<br>"; // Georges est majeur

echo "<br>";

//TERNAIRE

$result = $age >= 18 ? "majeur" : "mineur"; // peut être utile pour les conditions avec 2 cas de figure uniquement
echo "$prenom est $result<br>"; // Georges est majeur

echo "<br>";

// En fonction de l'âge, afficher une catégorie

/*
    si la personne a plus de 30 ans --> SENIOR
    si la personne a plus de 20 ans --> CADET
    sinon JUNIOR
*/

if (gettype($age) == "double" || gettype($age) == "integer") {
    if ($age >= 30) {
        $categorieAge = "SENIOR";
    } else if ($age<20) {
        $categorieAge = "JUNIOR";
    } else {
        $categorieAge = "CADET";
    }
    echo "la personne qui a $age ans est $categorieAge <br>";
}

echo "<br>";

// SWITCHCASE

/*
    si la valeur est 1 --> OK !
    si la valeur est 0 --> KO !
    sinon afficher "valeur non gérée"
*/

$valeur = 99;
switch($valeur) {
    case 0 : echo "KO!<br>"; break;
    case 1 : echo "KO!<br>"; break;
    default : echo "valeur non gérée";
}

echo "<br>";

// on peut également mettre la valeur du switch à true et tester des expressions booléennes

$age = 18;

if(gettype($age) == "double" || gettype($age) == "integer" ) {
    switch(true) {
        case $age >= 30: echo "SENIOR<br>"; break;
        case $age < 20: echo "JUNIOR<br>"; break;
        default: echo "CADET<br>";
    }
} else {
    echo "Veuillez saisir un âge numérique !<br>";
}

echo "<br>";

// LOOP

// Afficher les chiffres de 1 à 10

// FOR 

for($i=1;$i<=10;$i++) { // $i++  -->   $i = $i + 1
    echo $i." ";
}

echo "<br>";

// WHILE

$i=1;
while ($i <= 10) {
    echo $i." ";
    $i++;
}

echo "<br>";

// FOREACH

$range = range(1,10);
var_dump($range)."<br>"; //on ne peut pas afficher directement un objet via echo, on doit donc utiliser var_dump ou une boucle foreach

echo "<br>";

/*
foreach ($variable as $key => $value) {
    # code...
}
*/

foreach ($range as $key) {
    echo "$key ";
}

echo "<br>";

$marques = ["Mercedes", "BMW", "Toyota", "Tesla"];
$nbMarques = count($marques);

foreach ($marques as $marque) {
    echo "$marque ";
}

echo "<br>";

// TABLEAUX ASSOCIATIFS
// clé (key) -> valeur (value) (clé doit être unique)

echo "<br>";

$formateurs = [
    "stephane" => "mulhouse",
    "virgile" => "strasbourg",
    "micka" => "strasbourg",
    "dominique" => "colmar"
];

var_dump($formateurs);

echo "<br>";

// ksort -> trier sur la clé (A à Z)
// krsort -> trier sur la clé (Z à A) r = reverse
// asort -> trier sur la valeur (A à Z)
// arsort -> trier sur la valeur (Z à A)

ksort($formateurs); // on peut tout à fait trier un tableau associatif, par ordre de clé ou de valeur comme expliqué ci-dessus
var_dump($formateurs);

echo "<br>";

foreach ($formateurs as $prenom => $ville) {
    echo "$prenom travaille sur le centre de formation Elan de ".ucfirst($ville)."<br>";
}

echo "<br>";

// FONCTIONS

echo "<br>";

echo afficherMessage(); // on peut faire appel à une fonction avant de l'avoir déclarée

function afficherMessage() : string { // on peut spécifier le type de ce que la fonction doit retourner
    $message = "Voici mon message<br>";
    return $message;
}

echo calculerCarre(3)."<br>";  // 9
echo calculerCarre("test")."<br>";  // Erreur type argument

function calculerCarre($nombre) {
    if(gettype($nombre) == "integer") {
        $resultat = $nombre * $nombre;
        return $resultat."<br>";
    } else {
        return "Erreur: le nombre dont vous voulez le carré doit être un entier !<br>";
    }
}