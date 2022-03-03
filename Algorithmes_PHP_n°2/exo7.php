<?php

$choices = 
    [
        "choix 1" => "",
        "choix 2" => "checked",
        "choix 3" => ""
    ];

function genererCheckBox(array $associativeArray) {
    $toDisplay = "";
    foreach ($associativeArray as $key => $value) {
        $toDisplay .=   "<div>
                            <input type='checkbox' id='$key' name='$key' $value>
                            <label for='$key'>$key</label>
                        </div>";
    }
    return $toDisplay;  
}