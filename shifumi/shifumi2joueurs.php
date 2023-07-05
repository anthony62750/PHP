<?php 
//shuffle($tirageOrdi); // mélange tableau ordi
$tirageJoueur = ["Pierre","Feuille","Ciseau"]; // création tableau joueur
$joueur1 = ""; $joueur2 = "";
$resultat = true;
echo("Bienvenue sur le jeu du shifumi sans le puit !! " . PHP_EOL);
while($resultat /*== true*/){
    echo("0 : Pierre" . PHP_EOL . "1 : Feuille" . PHP_EOL . "2 : Ciseau" . PHP_EOL);
    $joueur1 = readline("Choix joueur 1 : ");
    $joueur2 = readline("Choix joueur 2 : ");
    echo("Joueur 1 : " . $tirageJoueur[$joueur1] . PHP_EOL . "Joueur 2 : " . $tirageJoueur[$joueur2] . PHP_EOL);
    switch($joueur1){
        case 0 :
            if($tirageJoueur[$joueur2] == "Feuille"){
                $resultat= false;
                echo("Perdu0 ");
            }elseif($tirageJoueur[$joueur2] == "Ciseau"){
                $resultat= false;
                echo("Gagné0");
            }else{
                echo("Egalité0" . PHP_EOL . "Recommencer :" . PHP_EOL);
                break;
            }
        case 1 :
            if($tirageJoueur[$joueur2] == "Ciseau"){ 
                $resultat= false;      
                echo("Perdu1 ");
            }elseif($tirageJoueur[$joueur2] == "Pierre"){
                $resultat= false;
                echo("Gagné1");
            }else{
                echo("Egalité1" . PHP_EOL . "Recommencer :" . PHP_EOL);
                break;
            }
        case 2 :
            if($tirageJoueur[$joueur2] == "Pierre"){
                $resultat= false;
                echo("Perdu2 ");
            }elseif($tirageJoueur[$joueur2] == "Feuille"){
                $resultat= false;
                echo("Gagné2");
            }else{
                echo("Egalité2" . PHP_EOL . "Recommencer :" . PHP_EOL);
                break;
                }
    }
}
