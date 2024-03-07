<?php

class Auteur 
{
    private string $nom;
    private string $prenom;
    private array $livres;

    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = [];
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function addLivre(Livre $livres)
    {
        $this->livres[] = $livres;
    }

    public function __toString()
    {
        return $this->prenom . " " . $this->nom;
    }

    public function afficherBibliographie()
    {
        $result = "<h2>Livres de " . $this . " : </h2>";

        foreach($this->livres as $livre)
        {
            $result .= $livre . "<br>"; 
        }
        return $result;
    }
    
}
?>