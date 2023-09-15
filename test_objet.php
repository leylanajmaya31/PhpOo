<?php
include './Maison.php';
$habitation = new Maison('maison1',120,200,2);
$studio = new Maison('studio',5,10, null);
$habitation->longueur=200;
var_dump($habitation);
echo"<p>la surface de ".$habitation->nom." est égale à : " .$habitation->surface()." m2</p>";
echo"<p>la surface de ".$studio->nom." est égale à : " .$studio->surface()." m2</p>";
?>