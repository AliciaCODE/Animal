<?php

// Définition du fuseau horaire
date_default_timezone_set('Europe/Paris');

// Appel de la fonction d'autoload
require_once './functions/classAutoLoader.php';

// Chargement automatique avec une fonction de la SPL PHP
spl_autoload_register('classAutoloader');

/* On va chercher la classe Voiture
L'utilisation de l'autoloader rend les lignes suivantes inutiles
require_once './classes/Vehicule.php';
require_once './classes/Voiture.php';
*/

// Test de la class Log
$message = "Corona forever";
Log::logWrite('test');



// Maintenant, je peux instancier un objet avec l'opérateur new
// Les propriétés sont définies dans le constructeur
$voiture1 = new Voiture('Lada', 'Niva', 'moche', 1000);

// Invocation de la méthode pour chancer la couleur
$voiture1->setCouleur('encorePlusMoche');

// On change la vitesse de la voiture
$voiture1->setVitesse(10);

// On appelle le propriété privée "masse" en passant par son getter
echo $voiture1->getMasse();

// On change la masse du véhicule
$voiture1->setMasse(950);

// Regardons comment se comporte notre objet
var_dump($voiture1);


