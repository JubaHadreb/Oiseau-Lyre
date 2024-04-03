<?php

session_start();

if(!isset($_SESSION['connecte'])){

	header('location:../../index.php');

}

require'../connexion.php';

$id = $_GET['id'];

$sql = $connexion->query(" SELECT image_photo, image_vignette FROM photos WHERE galerie_id='$id' ");

while( $ligne = $sql->fetch() ){	

	$source = $ligne['image_photo'];
	unlink('../../img/galeries/photos/source/'.$source);
	$vignette = $ligne['image_vignette'];
	unlink('../../img/galeries/photos/vignette/'.$vignette);

}

$connexion->exec(" DELETE FROM photos WHERE galerie_id='$id' ");
$connexion->exec(" DELETE FROM galeries WHERE id_galerie='$id' ");

header('location: galeries.php#admin');

?>