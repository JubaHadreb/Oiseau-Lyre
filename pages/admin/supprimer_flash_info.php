<?php

session_start();

if(!isset($_SESSION['connecte'])){

	header('location:../../index.php');

}

require'../connexion.php';

$id = $_GET['id'];

$connexion->exec(" DELETE FROM flash_info WHERE id_info='$id' LIMIT 1 ");

header('location: flash_info.php#admin');

?>