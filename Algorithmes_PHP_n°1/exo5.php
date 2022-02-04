<h1>Exercice 5</h1>
<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php

$Montant_aleatoire_francs = random_int(1,1000);
$Montant_aleatoire_conversion_euros = round($Montant_aleatoire_francs/6.5596,2);

echo "Montant en francs : $Montant_aleatoire_francs<br/>";
echo "$Montant_aleatoire_francs francs = $Montant_aleatoire_conversion_euros euros";