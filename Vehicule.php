<!-- Exercice 2 POO :
-Créer un fichier Vehicule.php qui va contenir la classe,
-Dans ce fichier recréer la classe Vehicule comme dans le cours (attributs et méthodes),
-Créer un fichier test_objet.php au même niveau que vehicule.php,
-Appeler avec require() ou include() le fichier de la classe Vehicule,
-Instancier 2 nouveaux Vehicules dans le fichier test_objet.php avec les paramètres suivants :
-Objet voiture (nomVehicule = « Mercedes CLK », nbrRoue = 4, vitesse 250),
-Objet moto (nomVehicule = « Honda CBR », nbrRoue = 2, vitesse = 280),
-Créer une fonction detect() qui détecte si le véhicule est une moto ou une voiture (la méthode retourne une string  moto ou voiture avec return) dans le fichier de classe vehicule.php,
-Exécuter la méthode detect() sur les 2 objets voiture et moto dans le fichier test_objet.php.
-Afficher le type de Vehicule dans le fichier test_objet.php,
-Créer une méthode boost qui ajoute 50 à la vitesse d’un objet dans le fichier de classe Vehicule.php,
-Appliquer la méthode boost a la voiture dans le fichier test_objet.php,
-Afficher la nouvelle vitesse de la voiture dans le fichier test_objet.php.

Bonus :
-Créer une méthode plusRapide() dans le fichier vehicule.php qui compare la vitesse des différents véhicules (moto et voiture) et retourne le Vehicule le plus rapide des 2 avec un return.
-Exécuter la méthode plusRapide() dans le  fichier test_objet.php.
-Afficher le Vehicule le plus rapide dans le fichier test_objet.php.  -->

<?php 
class Vehicule{ 
private ?string $nomVehicule ; 
private ?int $nbrRoue; 
private ?float $vitesse ; 

public function getNomVehicule():?string{
    return $this->nomVehicule;
}
public function setNomVehicule(?string $newnomVehicule):void{
    $this->nomVehicule = $newnomVehicule;
} 

public function getNbrRoue():?int{
    return $this->nbrRoue;
}
public function setNbrRoue(?int $newNbrRoue):void{
    $this->nbrRoue = $newNbrRoue;
} 

public function getVitesse():?int{
    return $this->vitesse;
}
public function setVitesse(?int $newVitesse):void{
    $this->vitesse = $newVitesse;
} 

    public function __construct(?string $newNomVehicule, ?int $newNbrRoue, ?float $newVitesse){
    $this->nomVehicule = $newNomVehicule;
    $this->nbrRoue = $newNbrRoue;
    $this->vitesse = $newVitesse;
} 

    public function detect():string{
    if($this->nbrRoue == 4){
        return $this->nomVehicule .' est une voiture '; 
}else{
    return $this->nomVehicule.' est une moto ' ;

}
    }

    public function boost():void{
    $this->vitesse +=50;
}

    public function plusRapide(Vehicule $rival){
        if($this->vitesse > $rival->vitesse){
            return $this->nomVehicule .' est le véhicule le plus rapide';
        }else{
            return $rival->nomVehicule.' est le véhicule le plus rapide';
        }
}
}
?>
