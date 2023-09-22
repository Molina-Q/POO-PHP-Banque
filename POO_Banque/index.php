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

$ti2 = new Titulaire("DESPUIT", "Benoit", "1952-12-20","Londre") ;

$ti2Compte1 = new Compte("Livret B", 80, "&pound;", $ti2) ;
$ti2Compte2 = new Compte("Compte marchant", 20, "&pound;", $ti2) ;


// echo "<p> ".$ti1->addCompte($ti1Compte1)." </p>";

// echo $ti1->showCompte();
// $ti1Compte2->getLibelle()

echo "<p>Solde ".$ti1Compte1->getLibelle()." : ".$ti1->getSoldeAvecDevise($ti1Compte1)."</p> 
</p> Solde ".$ti1Compte2->getLibelle()." : ".$ti1->getSoldeAvecDevise($ti1Compte2)."</p>" ;

echo"<p>".$ti1->versementComptes(50,$ti1Compte1,$ti1Compte2)."</p>";

echo "<p> Solde ".$ti1Compte1->getLibelle()." : ".$ti1->getSoldeAvecDevise($ti1Compte1)."</p> 
</p> Solde ".$ti1Compte2->getLibelle()." : ".$ti1->getSoldeAvecDevise($ti1Compte2)."</p>" ;
echo "********************************************************************************** <br>" ;

echo "<p>".$ti1->getInfoTitulaire()."</p>" ;

echo "<p>".$ti1Compte1->getInfosCompte()."</p>" ;
echo "<p>".$ti1Compte2->getInfosCompte()."</p>" ;

echo "********************************************************************************** <br>" ;

echo "<p>Solde ".$ti2Compte1->getLibelle()." : ".$ti2->getSoldeAvecDevise($ti2Compte1)."</p> 
</p> Solde ".$ti2Compte2->getLibelle()." : ".$ti2->getSoldeAvecDevise($ti2Compte2)."</p>" ;

echo"<p>".$ti2->versementComptes(100,$ti2Compte1,$ti2Compte2)."</p>";

echo "<p> Solde ".$ti2Compte1->getLibelle()." : ".$ti2->getSoldeAvecDevise($ti2Compte1)."</p> 
</p> Solde ".$ti2Compte2->getLibelle()." : ".$ti2->getSoldeAvecDevise($ti2Compte2)."</p>" ;
echo "********************************************************************************** <br>" ;

echo "<p>".$ti2->getInfoTitulaire()."</p>" ;

echo "<p>".$ti2Compte1->getInfosCompte()."</p>" ;
echo "<p>".$ti2Compte2->getInfosCompte()."</p>" ;


?>