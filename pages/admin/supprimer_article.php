<?php

session_start();

if(!isset($_SESSION['connecte'])){

	header('location:../../index.php');

}

require'../connexion.php';

$id = $_GET['id'];

$ligne = $connexion->query(" SELECT image_articles FROM articles WHERE id_articles='$id' ")->fetch();

$image = $ligne['image_articles'];
unlink('../../img/article/image/'.$image);

$connexion->exec(" DELETE FROM articles WHERE id_articles='$id' LIMIT 1 ");

header('location: articles.php#admin');

?>