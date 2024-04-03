<?php

if(!isset($_SESSION)){

	session_start();
	//indispensable pour tester la variable de sesssion

	if(!isset($_SESSION['connecte'])){
	//est ce que la var de session n'existe pas

		header('location:../../index.php');

	}

}

?>

<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Oiseau Lyre-Tableau de bord</title>
		
		<link rel="stylesheet" href="../../css/feuille1.css">
		<link rel="stylesheet" href="../../css/feuille5.css">
		<link rel="stylesheet" href="../../css/responsive1.css">
		<link rel="stylesheet" href="../../css/jquery.mCustomScrollbar.css">
		<link rel="icon" type="image/png" href="../../img/favicon.png">
		
		<script type="text/javascript" src="../../js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="../../js/jquery.mCustomScrollbar.concat.min.js"></script>
		
		<script>
		
			$(document).ready(function(){
			$("#nav > li > a").on("click", function(e){
			if($(this).parent().has("ul")) {
				e.preventDefault();
			}
				
			if(!$(this).hasClass("open")) {
				// hide any open menus and remove all other classes
				$("#nav li ul").slideUp(350);
				$("#nav li a").removeClass("open");
		 
				// open our new menu and add the open class
				$(this).next("ul").slideDown(350);
				$(this).addClass("open");
			}
		 
			else if($(this).hasClass("open")) {
				$(this).removeClass("open");
				$(this).next("ul").slideUp(350);
				}
			  });
			});
			
		</script>
		
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	
	</head>
	
	
	<body>
	
	<header>
	
		<div id="header">
	
			<div id="raison_social">
			
				<div id="plumes">
				
					<img src="../../img/header/plumes.gif" alt="plumes_Oiseau Lyre">
					
				</div>
				
				<div id="texte">
				
					<h1>
					
						<p>Association</p>
						<p>Oiseau-Lyre</p>
						
					</h1>
					
				</div><!-- Fin du texte -->
				
			</div><!-- Fin de raison social -->
		
		<div class="separation1">
			
				<img src="../../img/header/vertical.gif" alt="séparation vertical">
				
		</div>
		
		<div class="separation2"></div>
		
		<div id="nav_superieur">
		
			<div id="header_pages">
			
				<ul>
					<li><a href="../bibliotheque_en_ligne.php#oups">Bibliotheque</a></li>
					<li><a href="../galeries_photos.php#oups">Galeries</a></li>
					<li><a href="../contact_et_coordonnees.php">Contact</a></li>
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
			
				<img src="../../img/header/vertical.gif" alt="séparation vertical">
				
		</div>
		
		<div class="separation2"></div>
	
		<div id="connexion">
		
			<table>
			
				<tr>
				<td><a href="admin.php">Administration</a></td>
				<td><a href="admin.php?deconnecte=1">Se déconnecter</a></td>
				</tr>
				
			</table>
		
		</div><!-- Fin de connexion -->
		
		</div><!-- Fin de l'id header -->

	</header>
	
	<nav>
		
		<ul>
		
			<li id="nav_groupe01"><a href="../../index.php" id="logo"><h1>Actualités</h1></a></li>
			
			<li id="nav_groupe02">
				<ul>
					<li><a href="../qui_sommes_nous.php" id="qui_sommes_nous"><span>Qui sommes nous?</span></a></li>
					<li><a href="../nos_activites.php" id="activites"><span>Nos activités</span></a></li>
				</ul>
			</li>
			
			<li id="nav_groupe03">
				<ul>
					<li><a href="../notre_equipe.php" id="equipe"><span>Notre équipe</span></a></li>
					<li><a href="../nous_aider.php#oups" id="nous_aider"><span>Nous aider</span></a></li>
				</ul>
			</li>
			
		</ul>
	
	</nav>
	
	<div id="admin">
	
		
		<h2>administration</h2>
			
		<div id="nav_admin">
		
			<ul>
			
				<li><a href="admin.php#admin"><img src="../../img/backoffice/tableau.png" alt="tableau_admin"><span>Tableau de bord</span></a></li>
				<li><a href="#"><img src="../../img/backoffice/posts.png" alt="posts_admin"><span>Posts</span></a></li>
				
			</ul>
			
			<ul id="nav">
				
				<li><a href="#"><img src="../../img/backoffice/accueil.png" alt="accueil_admin"><span>Accueil</span></a>
				
					<ul>
			
						<li><a href="articles.php#admin"><span>Articles</span></a></li>
						<li><a href="flash_info.php#admin"><span>Flash info</span></a></li>
						<li><a href="videos.php#admin"><span>Vidéos</span></a></li>
						<li><a href="temoignages.php#admin"><span>Temoignages</span></a></li>
						<li><a href="slider.php#admin"><span>Slider</span></a></li>
						<li><a href="partenaires.php#admin"><span>Partenaires</span></a></li>
						
					</ul>
				
				</li>
				
				<li><a href="#"><img src="../../img/backoffice/equipe.png" alt="equipe_admin"><span>L’équipe</span></a>
				
					<ul>
			
						<li><a href="salaries.php#admin"><span>Salariés</span></a></li>
						
					</ul>
				
				</li>
				
				<li><a href="#"><img src="../../img/backoffice/association.png" alt="association_admin"><span>L’association</span></a></li>
				<li><a href="#"><img src="../../img/backoffice/newsletter.png" alt="newsletter_admin"><span>Newsletter</span></a>
				
					<ul>
				
						<li><a href="listing.php#admin"><span>Listing</span></a></li>
						<li><a href="envoie.php#admin"><span>Envoie</span></a></li>
						
					</ul>
					
				</li>
			
			</ul>
			
			<ul>
			
				<li><a href="galeries.php#admin"><img src="../../img/backoffice/galeries.png" alt="galeries_admin"><span>Galeries</span></a></li>
				
			</ul>
		
		</div>