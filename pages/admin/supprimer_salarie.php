<?php

session_start();

if(!isset($_SESSION['connecte'])){

	header('location:../../index.php');

}

require'../connexion.php';

$id = $_GET['id'];

$ligne = $connexion->query(" SELECT image_salarie FROM salaries WHERE id_salarie='$id' ")->fetch();

$image = $ligne['image_salarie'];
unlink('../../img/equipe/portraits/'.$image);

$connexion->exec(" DELETE FROM salaries WHERE id_salarie='$id' LIMIT 1 ");

header('location: salaries.php#admin');

?>