<?php

function afficherLienHypertexte(string $text, string $url) {
    return "<a href='$url' target='_blank'>$text</a>";
}