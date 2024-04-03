<?php

require'connexion.php';

if(isset($_POST['go'])){//on a cliqué sur le bouton envoyer

	$user = $_POST['utilisateur'];
	$mdp = $_POST['mdp'];
	
	$user = addslashes($user);
	$mdp = addslashes($mdp);
	//protection contre les injections SQL
	//on remplace les ' ou les " par un \

$sql = $connexion->prepare(" SELECT * FROM admin WHERE utilisateur='$user' AND mdp='$mdp' ");

$sql->execute();

$nombre = $sql->rowCount(); //on compte les résultats

if($nombre == 0){//mauvaise identification

?>

<style>

#connexion .rouge{
	
	border: 1px solid red;
	
}

</style>

<?php

}else{// bon login, bon mdp
	
	$_SESSION['connecte'] = 'connecte';
	//on déclare une variable de session
	//son nom est connecte (son contenu n'a pas d'importance dans l'exemple)
	//elle existe tant que la sesion est active

	header('location: admin/admin.php');

	
	}
}

?>
		

<header>
	
	<div id="header">
	
			<div id="raison_social">
			
				<div id="plumes">
				
					<img src="../img/header/plumes.gif" alt="plumes_Oiseau Lyre">
					
				</div>
				
				<div id="texte">
				
					<h1>
					
						<p>Association</p>
						<p>Oiseau-Lyre</p>
						
					</h1>
					
				</div><!-- Fin du texte -->
				
			</div><!-- Fin de raison social -->
		
		<div class="separation1">
			
				<img src="../img/header/vertical.gif" alt="séparation vertical">
				
		</div>
		
		<div class="separation2"></div>
		
		<div id="nav_superieur">
		
			<div id="header_pages">
			
				<ul>
					<li><a href="bibliotheque_en_ligne.php#oups">Bibliotheque</a></li>
					<li><a href="galeries_photos.php#oups">Galeries</a></li>
					<li><a href="contact_et_coordonnees.php">Contact</a></li>
				</ul>
				
			</div><!-- Fin des pages -->
			
			<div id="reseaux">
			
				<ul>
					<li><a href="http://www.youtube.com/channel/UCujsnhnCvyT1dW40ImT1_tA" target="_blank" id="youtube"><span>youtube</span></a></li>
					<li><a href="http://twitter.com/OiseauLyre92" target="_blank" id="twitter"><span>twitter</span></a></li>
					<li><a href="http://www.facebook.com/association.oiseaulyre" target="_blank" id="facebook"><span>facebook</span></a></li>
					<!--<li><a href="#" id="linkedin"><span>linkedin</span></a></li>
					<li><a href="#" id="viadeo"><span>viadeo</span></a></li>-->
				</ul>
				
			</div><!-- Fin des reseaux -->
			
		</div><!-- Fin de nav superieur -->
		
		<div class="separation1">
			
				<img src="../img/header/vertical.gif" alt="séparation vertical">
				
		</div>
		
		<div class="separation2"></div>
	
		<div id="connexion">
		
			<?php
			
			if(!isset($_SESSION['connecte'])){
				
			?>
			
			<form action="../index.php" method="POST">
		
				<table>
				
					<tr>
					<td>Identifiant</td>
					<td class="droite"><input type="text" class="rouge" name="utilisateur" size="18" maxlength="18"></td>
					</tr>
					
					<tr>
					<td>Mot de passe</td>
					<td class="droite"><input type="password" class="rouge" name="mdp" size="18" maxlength="18"></td>
					</tr>
					
					<tr>
					<td colspan="2" class="droite"><input type="submit" id="bouton_connexion" name="go" value="Se connecter"></td>
					</tr>
				
				</table>
				
			</form>
			
			<?php
			
			}else{
		
				echo '<table>';	
				echo '<tr>';
				echo '<td><a href="admin/admin.php">Administration</a></td>';
				echo '<td><a href="admin/admin.php?deconnecte=1">Se déconnecter</a></td>';
				echo '</tr>';
				echo '</table>';
			
			}
			
			?>
		
		</div><!-- Fin de connexion -->
		
	</div><!-- Fin de l'id header -->

</header>
	
	<nav>
		
		<ul>
		
			<li id="nav_groupe01"><a href="../index.php" id="logo"><h1>Actualités</h1></a></li>
			
			<li id="nav_groupe02">
				<ul>
					<li><a href="qui_sommes_nous.php" id="qui_sommes_nous"><span>Qui sommes nous?</span></a></li>
					<li><a href="nos_activites.php" id="activites"><span>Nos activités</span></a></li>
				</ul>
			</li>
			
			<li id="nav_groupe03">
				<ul>
					<li><a href="notre_equipe.php" id="equipe"><span>Notre équipe</span></a></li>
					<li><a href="nous_aider.php#oups" id="nous_aider"><span>Nous aider</span></a></li>
				</ul>
			</li>
			
		</ul>
	
	</nav>
	
	
	<!--<section id="temoignage">
	
	<?php/*
	
		$sql = $connexion->prepare(' SELECT * FROM temoignages ');	
		$sql->execute();	
		$nombre = $sql->rowCount();
		$nombre = $nombre - 1;
		
		$random = rand(0,$nombre);
		
		$sql = $connexion->query(' SELECT * FROM temoignages LIMIT '.$random.',1 ');
		$ligne = $sql->fetch();
	
		echo '<p>«'.$ligne['contenu_temoignage'].'»</p>';
		echo '<p>'.$ligne['auteur_temoignage'].'</p>';
		
	*/?>
	
	</section> Fin de temoignage -->
	
	
	<?php/* require'slider.php'; */?> <!-- html du slider -->
	
	
	<!--<section id="contact">
		
		<article id="telephone">
			<img src="../img/header/telephone.gif" alt="icone_telephone">
			<p>Appelez nous<br>Au 01 46 05 30 56</p>
		</article>
		
		<article id="mail">
			<img src="../img/header/triangle.gif" alt="triangle">
			<img src="../img/header/enveloppe.gif" alt="enveloppe">
			<p>Contactez nous !</p>
			<a href="contact_et_coordonnees.php#page_contact"><span>ok</span></a>
		</article>
	
	</section>Fin de contact -->