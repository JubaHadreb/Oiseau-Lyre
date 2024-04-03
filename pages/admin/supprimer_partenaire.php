<?php

session_start();

if(!isset($_SESSION['connecte'])){

	header('location:../../index.php');

}

require'../connexion.php';

$id = $_GET['id'];

$ligne = $connexion->query(" SELECT logo_partenaire FROM partenaires WHERE id_partenaire='$id' ")->fetch();

$image = $ligne['logo_partenaire'];
unlink('../../img/actualites/partenaires/'.$image);

$connexion->exec(" DELETE FROM partenaires WHERE id_partenaire='$id' LIMIT 1 ");

header('location: partenaires.php#admin');

?>