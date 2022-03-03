<?php

function formaterDateFr(string $dateText) {
    $fmt = new IntlDateFormatter(
        'fr_FR',
        IntlDateFormatter::FULL,
        IntlDateFormatter::NONE,
        'Europe/Paris',
        IntlDateFormatter::GREGORIAN
    );
    
    $date = new DateTime($dateText);
    return "<p>La date à afficher est « " . ucfirst($fmt->format($date))." » </p>";
}