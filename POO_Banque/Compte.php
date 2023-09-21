<?php

class Compte {

    private string $libelle ;
    private int $soldeInitial ;
    private string $deviseMonetaire ;
    private Titulaire $titulaireUnique ;

    public function __construct(string $libelle, int $soldeInitial, string $deviseMonetaire, Titulaire $titulaireUnique) {
        $this->libelle = $libelle ;
        $this->soldeInitial = $soldeInitial ;
        $this->deviseMonetaire = $deviseMonetaire ;
        $this->titulaireUnique = $titulaireUnique ;
        //un addCompte($this) pour le titulaire
        $this->titulaireUnique->addCompte($this) ;
    }

    // getter
    public function getLibelle()
    {
        return $this->libelle;
    }

    public function getSoldeInitial()
    {
        return $this->soldeInitial;
    }

    public function getDeviseMonetaire()
    {
        return $this->deviseMonetaire;
    }

    public function getTitulaireUnique()
    {
        return $this->titulaireUnique;
    }

    // setter
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    public function setSoldeInitial($soldeInitial)
    {
        $this->soldeInitial = $soldeInitial;
    }

    public function setdeviseMonetaire($deviseMonetaire)
    {
        $this->deviseMonetaire = $deviseMonetaire;
    }

    public function setTitulaireUnique($titulaireUnique)
    {
        $this->titulaireUnique = $titulaireUnique;
    }

    // public function __toString()
    // {
    //     return "<p> ".$this->getLibelle()." : </p> 
    //     <p> Solde : ".$this->getSoldeAvecDevise()." </p>
    //     <p> Titulaire : ".$this->getTitulaireUnique().". </p>" ;
    // }

    // méthodes


}


?>