<?php

require "Titulaire.php";
require "CompteBancaire.php";

$t1 = new Titulaire("MORTUREUX","Antoine","1988-01-22","Strasbourg");

echo $t1;

$cb1 = new CompteBancaire("livret A",150,"€",$t1);

$cb2 = new CompteBancaire("compte courant",50,"€",$t1);

echo $t1;

echo $cb1->getInfos();
echo $cb2->getInfos();

$cb1->virer(1000,$cb2);
$cb2->virer(25,$cb1);

echo $cb1->getInfos();
echo $cb2->getInfos();