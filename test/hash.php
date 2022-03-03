<?php

$password = "AAA002";

$hash = password_hash($password, PASSWORD_DEFAULT);

echo "Mot de passe en clair : $password<br>";
echo "Mot de passe hashé : $hash<br>";

$plainPassword = "AAA002";

echo (password_verify($plainPassword, $hash)) ? "<span style='color:green'>Mot de passe valide !</span>" : "<span style='color:red'>Mot de passe invalide !</span>";