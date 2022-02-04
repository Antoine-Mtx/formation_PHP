<h1>Exercice 10</h1>
<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1€.</p>

<h2>Résultat</h2>

<?php

$montantAPayer = random_int(10,200);
$montantVerse = 10*floor($montantAPayer/10) + 10*random_int(1,9);
$rendu = $montantVerse - $montantAPayer;

echo "Montant à payer : $montantAPayer €</br>";
echo "Montant versé : $montantVerse €</br>";
echo "Montant à rendre : $rendu €</br>";

echo"************************************</br>";
echo "Rendue de monnaie :</br>";
echo floor($rendu/10)." billet(s) de 10€ - ".floor(($rendu%10)/5)." billet de 5€ - ".floor(($rendu%5)/2)." pièce(s) de 2€ - ".($rendu%2)." pièce de 1€";

// je me suis servi pour chaque valeur usuelle de monnaie de l'arrondi à l'entier inférieur du montant à rendre auquel j'ai préalablement soustrait les rendus des monnaies de valeur supérieure (grâce au modulo) 