<?php
class Utilisateur{
    private ?string $nom;
    private ?string $prenom;

    public function __construct(?string $nom, ?string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    public function getNom():?string{
        return $this->nom;
    }
    public function setNom(?string $nom){
        $this->nom = $nom;
    }
    public function getPrenom():?string{
        return $this->prenom;
    }
    public function setPrenom(?string $prenom){
        $this->prenom = $prenom;
    }
}
?>


<!-- Exercice 1 héritage POO :
Depuis l'exemple d'héritage (Utilisateur.php, Admin.php, heritage.php) ajouter les éléments suivants :

heritage.php :
-Créer 4 Utilisateurs,
-Créer 1 Admin,
-Bannir les 4 Utilisateurs grâce à la méthode banUser de la classe Admin.
-Afficher la liste des Utilisateurs bannis grace à la méthode getBans de la classe Admin (utiliser une boucle foreach pour parcourir le tableau).
