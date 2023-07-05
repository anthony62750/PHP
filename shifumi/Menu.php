<?php

$modeDeJeu = 0;
$modeDeJeu=readline("Bonjour et bienvenu dans le shifumi, veuillez choisir votre mode de jeu entre 1 et 2 joueurs : ");
if($modeDeJeu == 1 || $modeDeJeu == 2){
    switch($modeDeJeu){
        case 1 :
            require("shifumi.php");
        case 2 :
            require("shifumi2joueurs.php");
    }
}else{
    echo("choisir entre 1 et 2 !" . PHP_EOL);
}
