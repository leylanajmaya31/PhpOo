<?php
class Admin extends Utilisateur{
    
    private array $bans; 

    public function __construct(?string $nom, ?string $prenom){
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->bans = [];
    }

    public function banUser ( Utilisateur $ban):void{
    $this->bans[] = $ban;
    }

    public function getBans ():array{
       return $this->bans;
    }

    public function debanUser(Utilisateur $deban){
        //Version avec méthode native
    unset ($this->bans[array_search($deban, $this->bans)]);
    // Autre version
    foreach ($this->bans as $key => $value) {
        if($value==$deban)
        unset($this->bans[$key]);
        return;
    }
    }

}

// array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false

?>

<!-- 
Classe Admin :
-un attribut bans de type array (tableau) en  private
-ajouter la ligne suivante dans le constructeur $this->bans = [];
-méthode banUser public qui prend un Utilisateur en entrée et qui ajoute au tableau bans l'objet Utilisateur,
-méthode getBans public qui retourne le tableau des Utilisateurs bans, -->

<!-- Bonus :
-ajouter une méthode public debanUser dans la classe Admin qui prend en entrée un Utilisateur et le supprime du tableau bans (suppression de la colonne ou se trouve l'Utilisateur),
-Vérifier si l'Utilisateur à bien été enlevé de bans avec la méthode getBans de la classe Admin.  -->