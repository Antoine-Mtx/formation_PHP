<?php

$champsInput =  [
                    "Nom" => "text",
                    "Prénom" => "text",
                    "Mail" => "email",
                    "Ville" => "text",
                ];

$genre = ["Homme","Femme","Autre"];

$intituleFormation = ["Développeur Web", "Designer Web","Intégrateur","Chef de Projet"];

function afficherFormulaire($champsInput,$genre,$intituleFormation) {
    $toDisplay = "<form>";
    $toDisplay .=   afficherInput($champsInput);
    $toDisplay .=   "<div class='form'>".afficherRadio("Genre",$genre)."</div>";
    $toDisplay .=   "<div class='form'>".alimenterListeDeroulante("Formation", $intituleFormation)."</div>";
    $toDisplay .=   "<br><button type='submit'>Soumettre</button>";
    $toDisplay .= "</form>";
    return $toDisplay;
}