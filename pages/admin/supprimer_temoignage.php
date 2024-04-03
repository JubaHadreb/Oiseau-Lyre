<?php

session_start();

if(!isset($_SESSION['connecte'])){

	header('location:../../index.php');

}

require'../connexion.php';

$id = $_GET['id'];

$connexion->exec(" DELETE FROM temoignages WHERE id_temoignage='$id' LIMIT 1 ");

header('location: temoignages.php#admin');

?>