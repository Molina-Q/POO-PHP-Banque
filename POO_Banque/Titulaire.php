<?php

class Titulaire {

    private string $nom ;
    private string $prenom ;
    private dateTime $dateDeNaissance ;
    private string $ville ;
    private array $ensembleComptes ; 
    
    public function __construct(string $nom, string $prenom, string $dateDeNaissance, string $ville ) {
        $this->nom = $nom ;
        $this->prenom = $prenom ;
        $this->dateDeNaissance = new dateTime($dateDeNaissance) ;
        $this->ville = $ville ;

        $this->ensembleComptes = [] ;
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
    
    //function addCompte() et on lui donne le param Compte en va mettre dans le tableau ensembleComptes le param

    public function __toString()
    {
        return " Titulaire : ".$this->getPrenom()." ".$this->getPrenom()."<br> 
        ".$this->showCompte();
    }
    // méthodes

    public function addCompte(Compte $Objetcompte)
    {
        $this->ensembleComptes[] = $Objetcompte;
    }


    public function showCompte()
    {
        echo "Comptes : " ;
        foreach($this->ensembleComptes as $compte) {

            echo $compte->getLibelle()." ";
        }
    }

    public function getAge()
    {
        $dateNow = new DateTime("now");
        $dateTimeDeNaissance = $this->getDateDeNaissance();

        $agePersonne = date_diff($dateTimeDeNaissance, $dateNow)->format("%Y ans");

        return $agePersonne;
    }

    // méthode Titulaire -> Compte

    public function getSoldeAvecDevise(Compte $Objetcompte)
    {
        return $Objetcompte->getSoldeInitial().$Objetcompte->getDeviseMonetaire() ;
    }

    public function versementComptes(int $soldeVersement, Compte $compteCredite, Compte $compteDebite )
    {
        // $compteCredite = $compteCredite->ensembleComptes[1] ;
        // $compteDebite = $this->ensembleComptes[1] ;
        $soldeAdd = $compteCredite->getSoldeInitial() + $soldeVersement ;
        $soldeSub = $compteDebite->getSoldeInitial() - $soldeVersement ;
        $this->setSoldeInitial($soldeAdd) ;
        echo "Vous avez fait un virement de ".$soldeVersement.$compteCredite->getDeviseMonetaire()." de votre ".debite." a ".credite."
         votre balance pour votre".debite."est de : " etc.. pour credite;

        return $soldeCredite.$this->getDeviseMonetaire()." sont crédités à votre compte" ;
    }

    // public function debiterCompte($soldeDebite, $compteDebite)
    // {
    //     $soldeSub = $ensembleComptes[0]->getSoldeInitial() - $soldeDebite ;
    //     $this->setSoldeInitial($soldeSub) ;
    //     return $soldeDebite.$this->getDeviseMonetaire()." sont débités de votre compte" ;
    // }




    // public function __toString()
    // {
    //     return var_dump($this->ensembleComptes);
    // }
}


?>