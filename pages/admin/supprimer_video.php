<?php

session_start();

if(!isset($_SESSION['connecte'])){

	header('location:../../index.php');

}

require'../connexion.php';

$id = $_GET['id'];

$connexion->exec(" DELETE FROM videos WHERE id_videos='$id' LIMIT 1 ");

header('location: videos.php#admin');

?>