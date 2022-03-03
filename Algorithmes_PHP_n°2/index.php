<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php
    require "exo1.php";
    require "exo2.php";
    require "exo3.php";
    require "exo4.php";
    require "exo5.php";
    require "exo6.php";
    require "exo7.php";
    require "exo8.php";
    require "exo9.php";
    require "exo10.php";
    require "exo11.php";
    require "exo12.php";
    require "exo13.php";
    require "exo14.php";
    require "exo15.php";

    echo "<p class='exo'>Exo 1</p>";

    echo convertirMajRouge("Mon texte en paramètre");

    echo "<p class='exo'>Exo 2</p>";

    echo afficherTableauAssociatifHTML("Pays", "Capitales", $capitales);

    echo "<p class='exo'>Exo 3</p>";

    echo afficherLienHypertexte("Elan Formation", "https://elan-formation.eu/accueil");

    echo "<p class='exo'>Exo 4</p>";

    echo afficherTableauAssociatifHTML2("Pays", "Capitales", "Wikipedia", $capitales2);

    echo "<p class='exo'>Exo 5</p>";

    echo afficherInput($nomsInput);

    echo "<p class='exo'>Exo 6</p>";

    echo alimenterListeDeroulante("Civilité", $civilites);

    echo "<p class='exo'>Exo 7</p>";

    echo genererCheckBox($choices);

    echo "<p class='exo'>Exo 8</p>";

    echo repeterImage("http://my.mobirise.com/data/userpic/764.jpg", 4);

    echo "<p class='exo'>Exo 9</p>";

    echo afficherRadio("Civilité", $civilites);

    echo "<p class='exo'>Exo 10</p>";

    echo afficherFormulaire($champsInput, $genre, $intituleFormation);

    echo "<p class='exo'>Exo 11</p>";

    echo formaterDateFr("2018-02-23");

    echo "<p class='exo'>Exo 12</p>";

    afficherInfos($tableauValeurs);

    echo "<p class='exo'>Exo 13</p>";

    echo $v1->demarrer();
    echo $v1->accelerer(50);
    echo $v2->demarrer();
    echo $v2->stopper();
    echo $v2->accelerer(20);
    echo $v1->afficherVitesseActuelle();
    echo $v2->afficherVitesseActuelle();

    echo $v1->afficherInfos();
    echo $v2->afficherInfos();

    echo $v1->ralentir(80);
    echo $v2->ralentir(30);

    echo "<p class='exo'>Exo 14</p>";

    echo $ve1->afficherInfos();

    echo "<p class='exo'>Exo 15</p>";

    echo validerEmail($email1);
    echo validerEmail($email2);
?>

</body>
</html>