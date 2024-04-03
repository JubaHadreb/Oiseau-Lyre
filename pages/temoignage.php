<?php 

session_start();

$_SESSION['i']++;
 
require 'connexion.php';

$sql = $connexion->prepare(" SELECT * FROM temoignages ");
$sql->execute();

$nombre = $sql->rowCount();

if( $_SESSION['i'] == ($nombre)){

	$_SESSION['i'] = 0;

}

$sql = $connexion->query(' SELECT * FROM temoignages ORDER BY id_temoignage DESC LIMIT '.$_SESSION['i'].',1 ');	
$ligne = $sql->fetch();

echo '<p>«'.$ligne['contenu_temoignage'].'»</p>';
echo '<p>'.$ligne['auteur_temoignage'].'</p>';


?>