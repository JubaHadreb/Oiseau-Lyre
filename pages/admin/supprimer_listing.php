<?php

session_start();

if(!isset($_SESSION['connecte'])){

	header('location:../../index.php');

}

require'../connexion.php';

$id = $_GET['id'];
$cible = $_GET['cible'];

if($cible == "adherents"){
	
	$mail = 'mail_adherent';
	
}else if($cible == "benevoles"){
	
	$mail = 'mail_benevole';
	
}else if($cible == "donateurs"){
	
	$mail = 'mail_donateur';
	
}else if($cible == "partenaires"){
	
	$mail = 'mail_partenaire';
	
}else if($cible == "salaries"){
	
	$mail = 'mail_salarie';
	
}

$new_mail = '';

$connexion->exec(" UPDATE ".$cible." SET ".$mail."='$new_mail' WHERE id='$id' ");

header("location: listing.php?cible='.$cible.'#admin");

?>