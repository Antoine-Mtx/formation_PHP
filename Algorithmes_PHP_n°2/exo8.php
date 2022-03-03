<?php

function repeterImage(string $url,int $nbRepeats) {
    $toDisplay = "";
    for ($i=1; $i <=$nbRepeats ; $i++) { 
        $toDisplay .= "<img src='$url'>";
    }
    return $toDisplay;
}