<?php

$fmt = new IntlDateFormatter(
	'fr_FR',
	IntlDateFormatter::FULL,
	IntlDateFormatter::NONE,
	'Europe/Paris',
	IntlDateFormatter::GREGORIAN
);

$date = new DateTime("2018-02-23");
echo '<p>Le premier format affiché est « ' . $fmt->format($date)." » </p>";