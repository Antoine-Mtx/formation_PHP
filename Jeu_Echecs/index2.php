<!-- http://localhost/formation_PHP/Jeu_Echecs/index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Chess game</title>
</head>
    <body>
        <div id="plateau">
            <?php
                // $jeu_pieces_blanc = array("tour", "cavalier", "fou", "reine", "roi", "fou", "cavalier", "tour", "pion", "pion", "pion", "pion", "pion", "pion", "pion", "pion");
                // $jeu_pieces_noir = array("tour", "cavalier", "fou", "roi", "reine", "fou", "cavalier", "tour", "pion", "pion", "pion", "pion", "pion", "pion", "pion", "pion");
                
                $jeu_pieces_noir = array("&#9820;", "&#9822;", "&#9821;", "&#9819;", "&#9818;", "&#9821;", "&#9822;", "&#9820;", "&#9823;", "&#9823;", "&#9823;", "&#9823;", "&#9823;", "&#9823;", "&#9823;", "&#9823;");
                $jeu_pieces_blanc = array("&#9814;", "&#9816;", "&#9815;", "&#9812;", "&#9813;", "&#9815;", "&#9816;", "&#9814;", "&#9817;", "&#9817;", "&#9817;", "&#9817;", "&#9817;", "&#9817;", "&#9817;", "&#9817;");
                
                $nb_pieces = count($jeu_pieces_blanc);
                $i=0;
            
                for ($r=1; $r<=8 ; $r+=1) {
                    for ($c=1; $c<=8 ; $c+=1) {
                        if (($c+$r)%2==0 && $r<=2) {
                            echo "<div class='case blanche R".(9-$r)." C".$c."'><p>".$jeu_pieces_noir[$i]."</p></div>";
                        } else if (($c+$r)%2==1 && $r<=2) {
                            echo "<div class='case noire R".(9-$r)." C".$c."'><p>".$jeu_pieces_noir[$i]."</p></div>";
                        } else if (($c+$r)%2==0 && $r>1 && $r<7) {
                            echo "<div class='case blanche R".(9-$r)." C".$c."'></div>";
                        } else if (($c+$r)%2==1 && $r>1 && $r<7) {
                            echo "<div class='case noire R".(9-$r)." C".$c."'></div>";
                        } else if (($c+$r)%2==0 && $r>=7) {
                            echo "<div class='case blanche R".(9-$r)." C".$c."'><p class='piece'>".$jeu_pieces_blanc[$nb_pieces-$i-1]."</p></div>";
                        } else {
                            echo "<div class='case noire R".(9-$r)." C".$c."'><p>".$jeu_pieces_blanc[$nb_pieces-$i-1]."</p></div>";
                        }
                        $i=($i+1)%$nb_pieces;
                    }
                }
            ?>
        </div>    
    </body>
</html>