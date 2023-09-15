
<?php
require './vendor/autoload.php';
include './Vehicule.php';
$voiture = new Vehicule('Mercedes CLK', 4, 320);
$moto = new Vehicule('Honda CBR', 2, 260);
echo $voiture->detect();
echo '<br>';
echo $moto->detect();
echo '<br>';
echo"<p>Attention vous roulez à : ".$voiture->getVitesse()." km/h  </p>";
echo '<br>';
echo"<p>Attention vous roulez à : ".$moto->getVitesse()." km/h  </p>";
echo '<br>';
echo $voiture->plusRapide($moto);
echo '<br>';
dump($voiture);
?>

<!-- on appel la méthode get pour lire et la méthode set pour écrire  -->