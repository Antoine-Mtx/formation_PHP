<?php

require "Auteur.php";
require "Livre.php";

$a1 = new Auteur("King","Stephen");

$a1->afficherBibliographie();

$l1 = new Livre("Ca",1138,1986,20,$a1);
$l2 = new Livre("Simetierre",374,1983,15,$a1);
$l3 = new Livre("Le fléau",823,1978,14,$a1);
$l4 = new Livre("Shining",447,1977,16,$a1);
$l5 = new Livre("Shining",447,1977,16,$a1);

$a1->afficherBibliographie();