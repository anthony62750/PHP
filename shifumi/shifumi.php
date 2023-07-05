<?php 
$tirageOrdi = ["Pierre","Feuille","Ciseau"]; // création tableau ordi
//shuffle($tirageOrdi); // mélange tableau ordi
$tirageJoueur = ["Pierre","Feuille","Ciseau"]; // création tableau joueur
$randomOrdi = $tirageOrdi[random_int(0,2)];
echo($randomOrdi);
echo("Bienvenue sur le jeu du shifumi sans le puit" . PHP_EOL);
echo("0 : Pierre" . PHP_EOL . "1 : Feuille" . PHP_EOL . "2 : Ciseau" . PHP_EOL);
$choixJoueur = readline("Votre choix ? " . PHP_EOL);
echo("Joueur : " . $tirageJoueur[$choixJoueur] . PHP_EOL . "Ordi : " . $randomOrdi . PHP_EOL);
switch($choixJoueur){
    case 0 :
        if($randomOrdi == "Feuille"){
            echo("Perdu ");
        }elseif($randomOrdi== "Ciseau"){
            echo("Gagné");
        }else{
            echo("égalite");
        }
    case 1 :
        if($randomOrdi == "Ciseau"){       
             echo("Perdu ");
        }elseif($randomOrdi == "Pierre"){
            echo("Gagné");
         }else{
            echo("égalite");
         }
    case 2 :
       if($randomOrdi == "Pierre"){
            echo("Perdu ");
       }elseif($randomOrdi == "Feuille"){
            echo("Gagné");
       }else{
            echo("égalite");
           }
}


