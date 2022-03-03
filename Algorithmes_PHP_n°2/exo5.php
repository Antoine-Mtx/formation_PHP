<?php

$nomsInput = 
    [
        "Nom" => "text",
        "Prénom" => "text",
        "Ville" => "text"
    ];

function afficherInput(array $InputFields) {
    $toDisplay = "";    
    foreach ($InputFields as $label => $type) {
        $toDisplay .=   "<div class='form'>
                            <label for='$label'>$label : </label>
                            <input type='$type' name='$label' id='$label' required>
                        </div>";
    }
    return $toDisplay;
}