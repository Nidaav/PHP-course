<?php

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //LES VARIABLES ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// $prenom = 'Marc';
// $nom = 'Doe';
// $note1 = 10;
// $note2 = 20;
// $moyenne = ($note1 + $note2) /2;

// echo "Bonjour $prenom $nom vous avez eu une moyenne de $moyenne";


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //LES TABLEAUX ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// $eleve = [
//   [
//     'nom' => 'Doe',
//     'prenom'=> 'Marc',
//     'notes' => [10, 20, 15]
//   ],[
//     'nom' => 'Lanister',
//     'prenom'=> 'Tywin',
//     'notes' => [4, 7, 11]
//   ]
// ];
// $eleve[1]['notes'][] = 16;
// print_r($eleve[1]['notes'][3]);
// "Echo" sert à afficher du texte, formaté en HTML ou non. Il n'utilise pas de parenthèses, ce qui aide à faire un code propre.
// "print_r", quand à lui, écrit une information "lisible" à propos d'une variable ambigüe, comme un array ou une requête.


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // LES CONDITIONS ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



  // if , elseif et else

// readline() permet de consulter l'input dans le terminal
// $note = (int)readline('Entrez votre note :');
// if ($note > 10) {
//   echo "Bravo, vous êtes au dessus de la moyenne";
// } elseif ($note === 10) {
//   echo 'Vous avez tout juste la moyenne';
// } else {
//   echo "Vous n'avez pas la moyenne, petite merde";
// }


  // switch & case

// $action = (int)readline('Entrez votre action : (1: attaquer, 2: défendre, 3: passer mon tour)');
// switch($action){
//   case 1:
//     echo "J'attaque";
//     break;
//   case 2:
//     echo "Je défend";
//     break;
//     case 3:
//       echo "On se retrouve au tour suivant";
//       break;
//     default:
//       echo 'Commande inconnue';;
// }

  // Les conditions && et ||

// $time = (int)readline('Entrez l\'heure actuelle :');
// if (($time >= 8 && $time <= 12) || ($time >= 14 && $time <= 18))  {
//   echo'Le magasin est ouvert';
// } else {
//   echo'Le magasin est fermé, revenez plus tard.';
// }


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // LES BOUCLES ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// $chiffre = null;
// while ($chiffre !== 10) {
//   $chiffre = (int)readline('Entrez une valeur : ');
// }
// echo 'Bravo vous avez gagné';

// $notes = [10, 15, 17];
// echo 'Voici les notes :'. "\n";
// for ($i = 0; $i < 3; $i++) {
//   echo '- ' . $notes[$i] . "\n";
// }

// $notes = [10, 15, 17];
// $eleves = [
//   'cm2' => ['Jean', 'Marc', 'Franck', 'Paul'],
//   'cm1' => ['Mathieu', 'Romain', 'Maël', 'Jules']
// ];

// // Après le AS on peut indiquer la duo clé/valeur, ou juste la valeur
// foreach($eleves as $classe => $listEleves) {
//   echo "La classe $classe est constitué de: \n";
//   foreach ($listEleves as $eleve) {
//     echo " - $eleve \n";
//   }
//   echo "\n";
// }


// Demande à l'user de rentrer une note OU de taper le mot "fin"
// Les notes sont un array, à la fin on l'affiche sous forme de liste
// $notes = [];
// $action = null;

// while ($action !== 'fin') {
//   $action = readline("Entrez une nouvelle note ou 'fin' pour terminer : \n");
//   if ($action === 'fin') {
//     break;
//   } else {
//     array_push($notes, $action);
//   }
// }

// foreach ($notes as $note) {
//   echo "- $note \n";
// }


// On demande à l'user de rentrer un créneau
// On demande l'heure de début et l'heure de fin
// On vérifie que l'heure de début est inf à l'heure de fin
// On demande si on veut rajouter un nouveau créneau (o/n)

// On demande à l'user de rentrer une heure
// On afficher l'état d'ouverture du magasin

// $creneaux = [];
// $action = null;
// while (true) {
//   $ouverture = (int)readline("Entrez l'horaire d'ouverture : \n");
//   $fermeture = (int)readline("Entrez l'horaire de fermeture : \n");
//   if ($ouverture >= $fermeture) {
//     readline('Tu te crois malin ?');
//   } else {
//     $creneaux[] = [$ouverture, $fermeture];
//     $action = readline('Voulez vous ajouter un nouvel horaire ? (o/n) ' . "\n");
//     if ($action === 'n') {
//       break;
//     }
//   }
// }

// echo "Le magasin est ouvert de \n";
// foreach ($creneaux as $k => $creneau) {
//   if ($k > 0) {
//     echo 'et de ';
//   }
//   echo "$creneau[0]h à $creneau[1]h \n";
// }

// $heure = (int)readline("A quelle heure voulez-vous visiter le magasin ?");
// $creneauTrouve = false;
// foreach ($creneaux as $creneau) {
//   if($heure >= $creneau[0] && $heure <= $creneau[1] ) {
//     $creneauTrouve = true;
//     break;
//   }
// }

// if ($creneauTrouve) {
//   echo 'Le magason sera ouvert';
// } else {
//   echo "Désolé, le magasin sera fermé";
// }


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // LES FONCTIONS /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// $variable = readline('blabla');
// var_dump(1234, 13.23231, "aeazeazxff", false, null);

// La string est elle un palindrome ?
// On use la fct strrev() pour reverse la str, et strtolower() pour tout avoir en lower case, strtoupper pour upperCase
// $word = strtolower(readline("Entrez le mot a vérifier : "));

// if ($word == strrev($word)) {
//   echo "C'est un palindrôme";
// } else {
//   echo "Dommage";
// }
// $notes = [10, 20, 12];
// $sum = array_sum($notes);  //somme des valeurs de l'array
// $count = count($notes);   //nombre de valeurs dans l'array
// echo "Vous avez ". round($sum / $count) . " de moyenne";    //round() permet d'arrondir la valeur (le second argument = nb de chiffre après la ,)
// array_push($notes, 16, 17);
// print_r($notes);
// $notesReversed = array_reverse($notes);
// sort($notes);         //Permet de trier un tableau en ordre croissant, plusieurs attributs peuvent etre ajouté pour spécifier le tri
// exit('Fin du programme') ou die('Same');     //équivalent d'un break, ca cut le code ici
// $insultes = ['merde', 'con'];

// $asterisque = [];
// foreach ($insultes as $insulte) {

//   $asterisque[] = substr($insulte, 0, 1) . str_repeat('*', strlen($insulte) - 1); // substr($array, startIndex, endIndex) return un segment de la string
// }

// $sen = readline("Entrez votre phrase : ");

// // foreach ($insultes as $insulte) {
// //   $taille = strlen($insulte);       // strlen()  =  la taille de la string
// //   $replace = str_repeat('*', $taille);      // str_repeat() répète le premier argument le nombre de fois du second argument
// //   $sen = str_replace($insulte, $replace, $sen);   // str_replace() remplace toutes les occurences dans une string
// // }
// // On peut faire bcp plus court :
// $sen = str_replace($insultes, ['*****', '***'], $sen);
// echo $sen;



    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // LES FONCTIONS UTILISATEURS //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// $nom = 'Doe';
// function bonjour ($prenom = null, $nom = null) {
//   global $nom;      //Donne accès à la variable qui est externe à la fct, mais c'est une mauvaise pratique.
//   if ($nom === null) {            // Rend le paramètre optionnel
//     return "Bonjour \n";
//   }
//   return 'Bonjour ' . $prenom . " " . $nom . "\n";
// }
// bonjour('Marion');

// function repondre_oui_non ($phrase) {
//   while (true) {      // Juste une boucle qui se stop à "n"
//     $reponse = readline($phrase . "(o)Oui/(n)Non ");
//     if ($reponse === 'n') {
//       return true;
//     } elseif ($reponse === 'n') {
//       return false;
//     } else {

//     }
//   }
// }
// $resultat = repondre_oui_non('Voulez vous continuer ?');
// var_dump($resultat);

// function demander_creneau($phrase = 'Veuillez entrer un créneau') {   //fct qui demande l'horaire d'ouverture / fermeture
//   echo $phrase . "\n";
//   while (true) {
//     $ouverture = (int)readline("Heure d'ouverture : ");
//     if ($ouverture >= 0 && $ouverture <= 23 ) {     //check si c'est un horaire possible
//       break;
//     }
//   }
//   while (true) {
//     $fermeture = (int)readline("Heure d'fermeture : ");
//     if ($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture) { //check si c'est un horaire possible
//       break;
//     }
//   }
//   return [$ouverture, $fermeture];        //Création d'un array d'un créneaux
// }
// $creneau = demander_creneau();  //on stocke ces créneaux dans une variable
// $creneau2 = demander_creneau('Veuillez entrer votre créneau'); //demande de deuxième créneau
// var_dump($creneau, $creneau2);
// // On peut aussi utiliser des fonctions dans d'autres fct.

// On peut typer les paramètres  (string $phrase)
// function demo (string $param): array {
//   var_dump($param);
// }

// demo(1.2);
//malgré le typage, php ne renvoi pas d'érreur, il fait une conversion implicite. Pour le rendre plus strict :
// Si l'on indique declare(strict_types=1); au début de notre document, cela signifie que PHP ne fera plus de conversion implicite et que l'argument passé
// à demo sera obligatoirement une string.
  // function demo (): array {
// }
// On peut également typer le retour en indiquant avant l'ouverture des curly braces le type que l'on souhaite pour notre return


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // REQUIRE & INCLUDE //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// On peut utilise require ou include en début de fichier ou directement dans des fcts

// include 'filename.php';

// // include vérifie que le fichier existe pour le lire, mais s'il ne le trouve pas, le reste du script se déroule.

// require 'filename.php';

// // La grosse différence est que require vérifie que le fichier existe, et s'il n'est pas présent plante tout le script.

// require_once 'filename.php';

// Permet de n'improter le fichier qu'une unique fois, pour éviter des pbs de multiples lectures de fct par exemple.


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // PHP & HTML //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// PHP a la particularité de pouvoir être mélangé aisément à du code HTML pour le rendre dynamique
/* Pour chaque ligne de PHP on adapte donc cette synthaxe : <?php ....... ?>
Il existe des raccourcis pratiques : < ?php echo $title; ?>   =>   <?= $title ?> */
/* Mais c'est très similaire à du ruby embraqué */

// Les super globals ou super variables sont des fct accessibles partout dans notre script
// $GLOBALS, $_SERVER, $_GET, $_POST, $_FILES, $_COOKIE, $_SESSION, $_REQUEST, $_ENV;
/*  <?php print_r($server); ?> */
// <?php
// function nav_item (string $lien, string $titre): string {        //Cette fonction qui utilise une super variable permet de determiner l'affichage
//   $classe = 'nav-item';                                         // en fct d'un parametre de cette variable (un peu comme une requete api)
//   if ($_SERVER['SCRIPT_NAME'] === $lien) {
//     $classe = $classe . 'active';
//   }
//   return '<li class="' . $classe . '">
//     <a class="nav-link" href="' . $lien . '">
//     </li>';
// }

// HEREDOC & NOWDOC
// l'heredoc se caractérise par une synthaxe <<<EQT  (les 3 lettres sont arbitraires)
// nowdoc se caractérise par une synthaxe <<<'EQT' (les 3 lettres sont tjr arbitraires)
// Pour reprendre l'exemple précedent :
//   return '<li class="' . $classe . '">
//     <a class="nav-link" href="' . $lien . '">
//     </li>';
// devient :
//   return <<<HTML
//   <li class="$classe">
//     <a class="nav-link" href="$lien">$titre</a>
//   </li>
// HTML;        -> Il est important de ne pas laisser d'espace pour qu'Heredoc comprenne bien. (principal defaut)
// Ca donne qqe chose de bcp plus lisible .


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // FORMULAIRES //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Consulter le dossier jeu.php


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // DATES //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

define('CRENEAUX', [    //pour définir une constante
  [8, 12],
  [14, 19]
]);
var_dump(CRENEAUX);      // pas besoin d'use le $CRENEAUX pour utiliser les constantes

date($format, $timestamp);
// vidéo a 7 min
