
<?php
class Exemple{
    public $taille;
    public $poid;
    public $nom;
    public function __construct($newNom,$newTaille, $newPoid){
        $this->nom = $newNom;
        $this->taille = $newTaille;
        $this->poid = $newPoid;
    }
    public function crie(){
        switch ($this->nom) {
            case 'chien':
                echo 'ouaf';
                break;
            case 'chat':
                echo 'miaou';
                break;
            case 'oiseau':
                echo 'cuicui';
                break;
            default:
                echo 'l\'animal n\'existe pas';
                break;
        }
    }
    public function __toString()
    {
        return $this->nom.' '.$this->taille.' '.$this->poid;
    }
}
?>