<?php

function convertirDuree($duree) {
    if ($duree>=60) {
        return floor($duree/60)." h ".($duree%60)." min";
    }
    else {
        return ($duree%60)." min";
    }
}