<?php 
$tirageOrdi = ["Pierre","Feuille","Ciseau"]; // création tableau ordi
//shuffle($tirageOrdi); // mélange tableau ordi
$tirageJoueur = ["Pierre","Feuille","Ciseau"]; // création tableau joueur
$resultat = true;
while($resultat /*== true*/){
    $randomOrdi = $tirageOrdi[random_int(0,2)];
   // echo($randomOrdi);
    echo("Bienvenue sur le jeu du shifumi sans le puit" . PHP_EOL);
    echo("0 : Pierre" . PHP_EOL . "1 : Feuille" . PHP_EOL . "2 : Ciseau" . PHP_EOL);
    $choixJoueur = readline("Votre choix ? ");
    echo("Joueur : " . $tirageJoueur[$choixJoueur] . PHP_EOL . "Ordi : " . $randomOrdi . PHP_EOL);
    switch($choixJoueur){
        case 0 :
            if($randomOrdi == "Feuille"){
                $resultat= false;
                echo("Perdu ");
            }elseif($randomOrdi == "Ciseau"){
                $resultat= false;
                echo("Gagné");
            }else{
                echo("Egalité0" . PHP_EOL);
                break;
            }
        case 1 :
            if($randomOrdi == "Ciseau"){ 
                $resultat= false;      
                echo("Perdu1 ");
            }elseif($randomOrdi == "Pierre"){
                $resultat= false;
                echo("Gagné1");
            }else{
                echo("Egalité1" . PHP_EOL);
                break;
            }
        case 2 :
            if($randomOrdi == "Pierre"){
                $resultat= false;
                echo("Perdu2 ");
            }elseif($randomOrdi == "Feuille"){
                $resultat= false;
                echo("Gagné2");
            }else{
                echo("Egalité2" . PHP_EOL);
                break;
                }
    }
}

