<!-- Exercice 3 Bonus :
Créer une classe Personnage qui va contenir les éléments suivants :
-nom, force, défense, vie
-un méthode pour attaquer (elle va soustraire à la vie du personnage la valeur de attaque (attaquant) à défense (notre personnage),
Créer une classe Combat qui  va contenir éléments suivants :
-nbr de tour, score joueur 1, score joueur 2,
-Une méthode qui va lancer les combats (elle va appeler la méthode attaque du joueur 1), (appeler la méthode d'attaque du joueur 2). Cela va s'exécuter autant de tour que la valeur nbr de tour. Celui qui arrive à zéro à perdu.
Ella va afficher le nom du gagnant.  -->

<?php

class Personnage {

    public ?string $nom;
    public ?int $force;
    public ?int $defense;
    public ?int $vie;

    public function __construct(?string $newNom, ?int $newForce, ?int $newDefense, ?float $newVie){
        $this->nom = $newNom;
        $this->force = $newForce;
        $this->defense = $newDefense;
        $this->vie = $newVie;
}



}
?>