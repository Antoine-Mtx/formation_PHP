<?php

$civilites = ["Monsieur","Madame","Mademoiselle"];

function afficherRadio(string $label,array $list) {
    $toDisplay = 
            "<label for='$label'>$label : </label>";
    foreach ($list as $value) {
        $toDisplay .=   
            "<div>
                <input type='radio' id='$value' name='$label' value='$value'>
                <label for='$value'>$value</label>
            </div>";
    }
    return $toDisplay;  
}