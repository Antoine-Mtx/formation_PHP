<?php

$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));

function afficherInfos(array $tab) {
    foreach ($tab as $val) {
        var_dump($val);
    }
}
