<!-- Créer un fichier test_objet.php qui va nous servir de fichier d’exécution,
Créer une nouvelle classe Maison Maison.php qui va contenir les attributs suivants :
-nom, longueur, largeur.
Instancier une nouvelle Maison dans le fichier test_objet.php avec les valeurs de votre choix (nom, longueur et largeur),
-Créer une méthode surface qui calcule et affiche la superficie de la Maison (longueur * largeur) dans la classe Maison.
-Appeler la méthode surface et afficher sous la forme suivante le résultat : 
"<p>la surface de nomMaison est égale à : x m2</p>".
Bonus 
Ajouter un attribut nbrEtage à la classe Maison,
Modifier la méthode surface pour qu’elle prenne en compte le paramètre nbrEtage. -->
<?php
class Maison{
    public ?string $nom;
    public ?float $longueur;
    public ?float $largeur;
    public ?int $nbrEtage;
    

    public function __construct(?string $newNom, ?float $newLongueur, ?float $newLargeur, ?int $newNbrEtage){
        $this->nom = $newNom;
        $this->longueur = $newLongueur;
        $this->largeur = $newLargeur;
        $this->nbrEtage = $newNbrEtage;
    }
    public function surface():float{
        if($this->nbrEtage > 0){
        return $this->longueur*$this->largeur*($this->nbrEtage+1);
    }else{
        return $this->longueur*$this->largeur;
    }
}
}
?>