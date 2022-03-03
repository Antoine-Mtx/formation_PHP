<?php

$civilites = array("Monsieur","Madame","Mademoiselle");

function alimenterListeDeroulante(string $label, array $list) {
    $toDisplay = 
        "<label for='$label'>$label :</label>
        <select name='$label' id='$label'>
            <option value='$label'>--sélectionnez l'option qui vous correspond--</option>";
    foreach ($list as $value) {
        $toDisplay .=
            "<option value='$value'>$value</option>";
    }
    $toDisplay .= 
        "</select>";
    return $toDisplay;
}