<?php

session_start();
//indispensable pour tester la variable de sesssion

if(!isset($_SESSION['connecte'])){
//est ce que la var de session n'existe pas

	header('location:../../index.php');

}

if(isset($_GET['deconnecte'])){
//a t'on cliqué sur déconecté

	unset($_SESSION['connecte']);//supprime la var de session
	session_destroy();//arréte la session
	header('location:../../index.php');

}

require'../connexion.php';

?>
		
		<?php require'header.php'; ?>
		
		<div id="contenu_admin">
		
		
		
		</div>
	
		<?php require'footer.php'; ?>