<?php

require "Titulaire.php";
require "CompteBancaire.php";

$t1 = new Titulaire("MORTUREUX","Antoine","1988-01-22","Strasbourg");

echo $t1;

$cb1 = new CompteBancaire("livret A",0,"€",$t1);

$cb2 = new CompteBancaire("compte courant",50,"€",$t1);

echo $t1;

echo $cb1->getInfos();
echo $cb2->getInfos();

$cb1->virer(100,$cb2);

echo $cb1->getInfos();
echo $cb2->getInfos();