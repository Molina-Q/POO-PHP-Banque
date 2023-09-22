<?php

class Compte {

    private string $libelle ;
    private int $soldeInitial ;
    private string $deviseMonetaire ;
    private Titulaire $titulaire ;

    public function __construct(string $libelle, int $soldeInitial, string $deviseMonetaire, Titulaire $titulaire) {
        $this->libelle = $libelle ;
        $this->soldeInitial = $soldeInitial ;
        $this->deviseMonetaire = $deviseMonetaire ;
        $this->titulaire = $titulaire ;
        //un addCompte($this) pour le titulaire
        $this->titulaire->addCompte($this) ;
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

    public function getTitulaire()
    {
        return $this->titulaire;
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
    
    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;
    }

    // toString
    public function __toString()
    {
        return $this->getTitulaire() ;
    }
    
    // méthodes
    public function getInfosCompte()
    {
        return "Information compte bancaire : ".$this->getLibelle()." <br> appartient à : ".$this->getTitulaire()->getNom()." ".$this->getTitulaire()->getPrenom()."<br> 
        solde : ".$this->getSoldeInitial().$this->getDeviseMonetaire() ;
    }

}

?>