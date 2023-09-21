<?php
require_once "Titulaire.php";
require_once "Compte.php" ;


// Afficher toutes les informations d'un(e) titulaire (dont l'âge) et l'ensemble des comptes 
// appartenant à celui(celle)-ci.

// Afficher toutes les informations d'un compte bancaire, notamment le nom / prénom du 
// titulaire du compte.
$ti1 = new Titulaire("DUPONT","Jean","1985-08-14","Nice") ;

$ti1Compte1 = new Compte("Livret A", 100, "&euro;", $ti1 ) ;
$ti1Compte2 = new Compte("Compte courant", 400, "&euro;", $ti1 ) ;

// echo "<p> ".$ti1->addCompte($ti1Compte1)." </p>";

// echo $ti1->showCompte();
// $ti1Compte2->getLibelle()


echo "<p> ".$ti1." </p>";

// echo "<p> ".$ti1Compte1." </p>";

?>