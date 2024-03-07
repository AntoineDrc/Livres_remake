<h1>Exercice livres</h1>

<p>
Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et 
leurs auteurs respectifs.
Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un 
auteur. Un auteur comporte un nom et un prénom.
Une méthode toString() sera appréciée dans chacune de vos classes.
Vous implémenterez une méthode afficherBibliographie() qui permettra d'afficher la bibliographie 
complète d'un auteur :
</p>

<h2>Résultat</h2>

<?php 

// Cette commande sert à charger les classes présentes dans un autre script
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

$auteur1 = new Auteur("Stephen", "King");

$livre1 = new Livre("Le bateau", "1245", "1998", 45, $auteur1);
$livre2 = new Livre("Mesandre", "986", "2002", 56, $auteur1);
$livre3 = new Livre("Bohemian", "1452", "2005", 60, $auteur1);

echo $auteur1->afficherBibliographie();

?>