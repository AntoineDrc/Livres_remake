<?php 

class Livre
{
    private string $titre;
    private string $nbPage;
    private DateTime $annee;
    private int $prix;
    private Auteur $auteur;

    public function __construct(string $titre, string $nbPage, string $annee, int $prix, Auteur $auteur)
    {
        $this->titre = $titre;
        $this->nbPage = $nbPage;
        $this->annee = New DateTime($annee);
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->addLivre($this);
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    public function getNbPage()
    {
        return $this->nbPage;
    }

    public function setNbPage($nbPage)
    {
        $this->nbPage = $nbPage;

        return $this;
    }

    public function getAnnee()
    {
        return $this->annee->format("Y");
    }

    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function getAuteur()
    {
        return $this->auteur;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }
    
    public function __toString()
    {
       return "« " . $this->titre . " » sortie en " . $this->getAnnee() . ". " . "Nombre de pages " . $this->nbPage . ", à " . $this->prix . " €";
    }
}
?>