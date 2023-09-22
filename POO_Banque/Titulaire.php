<?php

class Titulaire {

    private string $nom ;
    private string $prenom ;
    private \DateTime $dateDeNaissance ;
    private string $ville ;
    private array $comptes ; 
    
    public function __construct(string $nom, string $prenom, string $dateDeNaissance, string $ville ) {
        $this->nom = $nom ;
        $this->prenom = $prenom ;
        $this->dateDeNaissance = new \DateTime($dateDeNaissance) ;
        $this->ville = $ville ;

        $this->comptes = [] ;
    }
    
    // getter
    public function getNom()
    {
        return $this->nom;
    }
    
    public function getPrenom()
    {
        return $this->prenom;
    }
    
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }
    
    public function getVille()
    {
        return $this->ville;
    }
    
    // setter
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;
    }
    
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    // toString
    public function __toString()
    {
        return var_dump($this->comptes);
    }

    // méthodes
    public function addCompte(Compte $compteObjet)
    {
        $this->comptes[] = $compteObjet;
    }

    public function showCompte()
    {
        foreach($this->comptes as $compte) {
            echo $compte->getLibelle()." " ;
        }
    }
    
    public function getAge()
    {
        $dateNow = new \DateTime("now");
        $dateTimeDeNaissance = $this->getDateDeNaissance();
        
        $agePersonne = date_diff($dateTimeDeNaissance, $dateNow)->format("%Y ans");
        
        return $agePersonne;
    }
    
    public function getSoldeAvecDevise(Compte $compteObjet)
    {
        return $compteObjet->getSoldeInitial().$compteObjet->getDeviseMonetaire() ;
    }

    public function debiteCompte(int $solde, Compte $compteDebite)
    {
        $soldeSub = $compteDebite->getSoldeInitial() - $solde ;
        // $soldeSub -= $compteDebite->getSoldeInitial() ;
        $compteDebite->setSoldeInitial($soldeSub) ;
    }

    public function crediteCompte(int $solde, Compte $compteCredite)
    {
        $soldeAdd = $compteCredite->getSoldeInitial() + $solde ;
        $compteCredite->setSoldeInitial($soldeAdd) ;
    }

    public function versementComptes(int $solde, Compte $compteDebite, Compte $compteCredite )
    {
        $this->debiteCompte($solde, $compteDebite);
        $this->crediteCompte($solde, $compteCredite);
        
        return "<p> ".$this->getPrenom()." ".$this->getNom()." a fait un virement de ".$solde.$compteDebite->getDeviseMonetaire()." de son
        ".$compteDebite->getLibelle()." a son ".$compteCredite->getLibelle()." </p>";
    }

    public function getInfoTitulaire()
    {
    echo "Information titulaire : ".$this->getNom()." ".$this->getPrenom()." <br> ville : ".$this->getVille()." <br> age : ".$this->getAge()."<br> 
    comptes : "; 

    foreach($this->comptes as $compte) {
        echo $compte->getLibelle()." , " ;
    } ;
    }

        
    // public function getInfosCompte
}
    
    
?>