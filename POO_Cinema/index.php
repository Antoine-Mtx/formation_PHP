<?php

require "utile.php";

require "Personne.php";
require "Realisateur.php";
require "Acteur.php";
require "Genre.php";
require "Role.php";
require "Film.php";

$G1 = new Genre("Comédie");

$P1 = new Personne("Morane","Bob","homme","1953-12-24");

var_dump($P1);

$RE1 = new Realisateur("Ritchie","Guy","homme","1968-09-10");

echo $RE1->getNom();

$RE1->afficherFilmographie();
var_dump($RE1);

$A1a = new Acteur("Hardy","Tom","homme","1977-09-15");
$A1b = new Acteur("Butler","Gerard","homme","1969-11-13");

var_dump($A1a);

$F1 = new Film("RocknRolla",104,"2008-11-19",$G1,"Caïd londonien, Lenny travaille à l'ancienne. Ce qui ne l'empêche pas de savoir à qui graisser la patte et de pouvoir faire pression sur n'importe quel ministre, promoteur immobilier ou malfrat en vue. D'un simple coup de fil, Lenny est capable de soulever des montagnes. Mais comme le lui dit Archy, son fidèle lieutenant, Londres est en train de changer : les mafieux des pays de l'Est, comme les petits voyous, cherchent tous à bouleverser les règles du milieu. Désormais, c'est toute la pègre londonienne, des gros bonnets aux petits poissons, qui tente de se remplir les poches en se disputant le coup du siècle. Mais c'est Johnny Quid, rock star toxico qu'on croyait mort, qui a les cartes bien en main...",$RE1,[$A1a,$A1b]);

$F1->afficherInfos();
$F1->afficherCasting();
$RE1->afficherFilmographie();

$G2 = new Genre("Fantastique");

$A2 = new Acteur("Maguire","Tobey","homme","1975-05-27");
$A3 = new Acteur("Garfield","Andrew","homme","1983-08-20");
$A4 = new Acteur("Holland","Tom","homme","1996-06-01");

$RE2 = new Realisateur("Raimi","Sam","homme","1959-10-23");
$RE3 = new Realisateur("Webb","Marc","homme","1974-08-31");
$RE4 = new Realisateur("Watts","Jon","homme","1981-06-28");

$F2 = new Film("Spider-Man",121,"2002-06-12",$G2,"Orphelin, Peter Parker est élevé par sa tante May et son oncle Ben dans le quartier Queens de New York. Tout en poursuivant ses études à l'université, il trouve un emploi de photographe au journal Daily Bugle. Il partage son appartement avec Harry Osborn, son meilleur ami, et rêve de séduire la belle Mary Jane. Cependant, après avoir été mordu par une araignée génétiquement modifiée, Peter voit son agilité et sa force s'accroître et se découvre des pouvoirs surnaturels. Devenu Spider-Man, il décide d'utiliser ses nouvelles capacités au service du bien. Au même moment, le père de Harry, le richissime industriel Norman Osborn, est victime d'un accident chimique qui a démesurément augmenté ses facultés intellectuelles et sa force, mais l'a rendu fou. Il est devenu le Bouffon Vert, une créature démoniaque qui menace la ville. Entre lui et Spider-Man, une lutte sans merci s'engage.)",$RE2,[$A2]);
$F3 = new Film("The Amazing Spider-Man",137,"2012-07-04",$G2,"Abandonné par ses parents lorsqu’il était enfant, Peter Parker a été élevé par son oncle Ben et sa tante May. Il est aujourd’hui au lycée, mais il a du mal à s’intégrer. Comme la plupart des adolescents de son âge, Peter essaie de comprendre qui il est et d’accepter son parcours. Amoureux pour la première fois, lui et Gwen Stacy découvrent les sentiments, l’engagement et les secrets. En retrouvant une mystérieuse mallette ayant appartenu à son père, Peter entame une quête pour élucider la disparition de ses parents, ce qui le conduit rapidement à Oscorp et au laboratoire du docteur Curt Connors, l’ancien associé de son père. Spider-Man va bientôt se retrouver face au Lézard, l’alter ego de Connors. En décidant d’utiliser ses pouvoirs, il va choisir son destin…)",$RE3,[$A3]);
$F4 = new Film("Spider-Man : No Way Home",149,"2021-12-15",$G2,"Pour la première fois dans son histoire cinématographique, Spider-Man, le héros sympa du quartier est démasqué et ne peut désormais plus séparer sa vie normale de ses lourdes responsabilités de super-héros. Quand il demande de l'aide à Doctor Strange, les enjeux deviennent encore plus dangereux, le forçant à découvrir ce qu'être Spider-Man signifie véritablement.",$RE4,[$A4]);
