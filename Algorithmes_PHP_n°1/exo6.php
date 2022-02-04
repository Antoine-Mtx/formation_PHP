<h1>Exercice 6</h1>
<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex: 20 % -> 0.2)</p>

<h2>Résultat</h2>

<?php

$nbArticles = random_int(1,10);
$prixUnitaireHT = random_int(10,100);
$TVA = 0.20;

$MontantTTC = round($nbArticles*$prixUnitaireHT*(1+$TVA),2) ;

echo "Prix unitaire de l'article : $prixUnitaireHT €</br>";
echo "Quantité : $nbArticles</br>";
echo "Taux de TVA : $TVA</br>";
echo "Le montant de la facture à régler est de : $MontantTTC €";