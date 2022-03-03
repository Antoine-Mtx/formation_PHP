<?php

function validerEmail(string $adresseMail) {
    if (filter_var($adresseMail, FILTER_VALIDATE_EMAIL)) {
        echo "<p>L'adresse email '$adresseMail' est considérée comme valide.</p>";
    } else {
        echo "<p>L'adresse email '$adresseMail' est considérée comme invalide.</p>";
    }
}

$email1 = "elan@elan-formation.fr";
$email2 = "contact@elan";
