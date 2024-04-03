<?php

session_start();

if(!isset($_SESSION['connecte'])){

	header('location:../../index.php');

}

require'../connexion.php';

$id = $_GET['id'];

$ligne = $connexion->query(" SELECT image_slider FROM slider WHERE id_slider='$id' ")->fetch();

$image = $ligne['image_slider'];
unlink('../../img/header/slider/slide/'.$image);

$connexion->exec(" DELETE FROM slider WHERE id_slider='$id' LIMIT 1 ");

header('location: slider.php#admin');

?>