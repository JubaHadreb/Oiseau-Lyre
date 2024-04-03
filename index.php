<?php

session_start();

$_SESSION['i'] = -1;

?>

<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Association Oiseau-Lyre - Actualités et partenaires</title>
		
		<link rel="stylesheet" href="css/feuille1.css">
		<link rel="stylesheet" href="css/responsive1.css">
		<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" />
		<link rel="stylesheet" href="css/partenaires.css" />
		<link rel="icon" type="image/png" href="img/favicon.png" />
		
		<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/jssor.js"></script>
		<script type="text/javascript" src="js/jssor.slider.js"></script>
		<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		
		<?php

		require'pages/connexion.php';

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
			
			header('location: pages/admin/admin.php');

			
			}
		}

		?>
		
		<script>
		
			(function($){
				$(window).load(function(){
					$(".content").mCustomScrollbar();
				});
			})(jQuery);
			
		</script>
	
	
		<?php require'js/slider.js'; ?> <!-- script du slider -->
		<?php require'js/partenaires.js'; ?> <!-- script des partenaires -->
		
		
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	
	</head>
	
	
	<body>
	
	<header>
	
		<div id="header">
	
			<div id="raison_social">
			
				<div id="plumes">
				
					<img src="img/header/plumes.gif" alt="plumes_Oiseau Lyre">
					
				</div>
				
				<div id="texte">
				
					<h1>
					
						<p>Association</p>
						<p>Oiseau-Lyre</p>
						
					</h1>
					
				</div><!-- Fin du texte -->
				
			</div><!-- Fin de raison social -->
		
		<div class="separation1">
			
				<img src="img/header/vertical.gif" alt="séparation vertical">
				
		</div>
		
		<div class="separation2"></div>
		
		<div id="nav_superieur">
		
			<div id="header_pages">
			
				<ul>
					<li><a href="pages/bibliotheque_en_ligne.php#oups">Bibliotheque</a></li>
					<li><a href="pages/galeries_photos.php#oups">Galeries</a></li>
					<li><a href="pages/contact_et_coordonnees.php">Contact</a></li>
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
			
				<img src="img/header/vertical.gif" alt="séparation vertical">
				
		</div>
		
		<div class="separation2"></div>
	
		<div id="connexion">
		
			<?php
			
			if(!isset($_SESSION['connecte'])){
				
			?>
			
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		
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
				echo '<td><a href="pages/admin/admin.php">Administration</a></td>';
				echo '<td><a href="pages/admin/admin.php?deconnecte=1">Se déconnecter</a></td>';
				echo '</tr>';
				echo '</table>';
			
			}
			
			?>
		
		</div><!-- Fin de connexion -->
		
		</div><!-- Fin de l'id header -->

	</header>

	<nav>
	
		<ul>
		
			<li id="nav_groupe01"><a href="index.php" id="logo"><h1>Actualités</h1></a></li>
			
			<li id="nav_groupe02">
				<ul>
					<li><a href="pages/qui_sommes_nous.php" id="qui_sommes_nous"><span>Qui sommes nous?</span></a></li>
					<li><a href="pages/nos_activites.php" id="activites"><span>Nos activités</span></a></li>
				</ul>
			</li>
			
			<li id="nav_groupe03">
				<ul>
					<li><a href="pages/notre_equipe.php" id="equipe"><span>Notre équipe</span></a></li>
					<li><a href="pages/nous_aider.php#oups" id="nous_aider"><span>Nous aider</span></a></li>
				</ul>
			</li>
			
		</ul>
	
	</nav>
	
	<section id="dorine">
	<a href="http://www.dorinebourneton.fr/" target="_blank"><img src="img/header/banniere_dorine.jpg"></a>
	</section>
	
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
		echo '<p>'.$ligne['auteur_temoignage'].'</p>';*/
		
	?>
	
	</section>-->
	
	<!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
		<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 820px; height: 300px; overflow: hidden; margin: 0 auto;">

			<!-- Loading Screen -->
			<div u="loading" style="position: absolute; top: 0px; left: 0px;">
				<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
					background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
				</div>
				<div style="position: absolute; display: block; background: url(img/header/slider/loading.gif) no-repeat center center;
					top: 0px; left: 0px;width: 100%;height:100%;">
				</div>
			</div>

			<!-- Slides Container -->
			<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 820px; height: 300px; overflow: hidden;">
			
			<?php
				
			$sql = $connexion->query(' SELECT image_slider, url_slider FROM slider ORDER BY id_slider DESC LIMIT 0,6 ');
					
			while( $ligne = $sql->fetch() ){	
			
				echo '<div>';
				echo '<a href="http://'.$ligne['url_slider'].' " target="_blank"><img u="image" src="img/header/slider/slide/'.$ligne['image_slider'].'" alt="'.$ligne['image_slider'].'"></a>';
				echo '</div>';
				
			}
				
			?>

			</div>

			<!-- Bullet Navigator Skin Begin -->
			<style>
				/* jssor slider bullet navigator skin 05 css */
				/*
				.jssorb05 div           (normal)
				.jssorb05 div:hover     (normal mouseover)
				.jssorb05 .av           (active)
				.jssorb05 .av:hover     (active mouseover)
				.jssorb05 .dn           (mousedown)
				*/
				.jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
					background: url(img/header/slider/b05.png) no-repeat;
					overflow: hidden;
					cursor: pointer;
				}

				.jssorb05 div {
					background-position: -7px -7px;
				}

					.jssorb05 div:hover, .jssorb05 .av:hover {
						background-position: -37px -7px;
					}

				.jssorb05 .av {
					background-position: -67px -7px;
				}

				.jssorb05 .dn, .jssorb05 .dn:hover {
					background-position: -97px -7px;
				}
			</style>
			<!-- bullet navigator container -->
			<div u="navigator" class="jssorb05" style="position: absolute; bottom: 16px; right: 6px;">
				<!-- bullet navigator item prototype -->
				<div u="prototype" style="POSITION: absolute; WIDTH: 16px; HEIGHT: 16px;"></div>
			</div>
			<!-- Bullet Navigator Skin End -->
			<!-- Arrow Navigator Skin Begin -->
			<style>
				/* jssor slider arrow navigator skin 12 css */
				/*
				.jssora12l              (normal)
				.jssora12r              (normal)
				.jssora12l:hover        (normal mouseover)
				.jssora12r:hover        (normal mouseover)
				.jssora12ldn            (mousedown)
				.jssora12rdn            (mousedown)
				*/
				.jssora12l, .jssora12r, .jssora12ldn, .jssora12rdn {
					position: absolute;
					cursor: pointer;
					display: block;
					background: url(img/header/slider/a12.png) no-repeat;
					overflow: hidden;
				}

				.jssora12l {
					background-position: -16px -37px;
				}

				.jssora12r {
					background-position: -75px -37px;
				}

				.jssora12l:hover {
					background-position: -136px -37px;
				}

				.jssora12r:hover {
					background-position: -195px -37px;
				}

				.jssora12ldn {
					background-position: -256px -37px;
				}

				.jssora12rdn {
					background-position: -315px -37px;
				}
			</style>
			<!-- Arrow Left -->
			<span u="arrowleft" class="jssora12l" style="width: 30px; height: 46px; top: 123px; left: 0px;">
			</span>
			<!-- Arrow Right -->
			<span u="arrowright" class="jssora12r" style="width: 30px; height: 46px; top: 123px; right: 0px">
			</span>
			<!-- Arrow Navigator Skin End -->
			<a style="display: none" href="http://www.jssor.com">bootstrap slider</a>
		</div>
    <!-- Jssor Slider End -->
	
	<section id="contact">
		
		<article id="telephone">
			<div id="position_telephone">
				<img src="img/header/telephone.gif" alt="icone_telephone">
				<p>Appelez nous<br>Au 01 46 05 30 56</p>
			</div>
		</article>
		
		<article id="mail">
			<img src="img/header/triangle.gif" alt="triangle">
			<img src="img/header/enveloppe.gif" alt="enveloppe">
			<p>Contactez nous !</p>
			<a href="pages/contact_et_coordonnees.php#page_contact"><span>ok</span></a>
		</article>
	
	</section><!-- Fin de contact -->
	
	<div id="corps_index">
	
		<section id="actualites">
		
			<h2><p>Actualités</p></h2>
			
			<article id="une">
			
			<?php
			
				if(isset($_GET['p'])){//a-t-on reçu dans l'URL la variable page
						
					$page = $_GET['p'];
						
				}else{//on n'a rien reçu dans l'URL
					
					$page = 0; //pour la premiere page
					
				}
						
				$quantite = 3;//nombre de portrait à afficher
					
				$debut = ($page * $quantite) + 1;
					
				$sql = $connexion->prepare(' SELECT * FROM articles ');
				//cette requete permet de compter les articles dans la table
					
				$sql->execute();
					
				$nombre = $sql->rowCount();//on compte les articles dans la table, total des articles
				
				$sql = $connexion->query(' SELECT id_articles, titre_articles, image_articles FROM articles ORDER BY id_articles DESC LIMIT 0,1 ');
				$ligne = $sql->fetch();
				
				echo '<a href="pages/article.php?a='.$ligne['id_articles'].'&p='.$page.'#infos_aticle">';
				echo '<img src="img/article/image/'.$ligne['image_articles'].'">';
				echo '<div id="titres">';
				echo '<h3>à la une</h3>';
				echo '<h2 class="degrade">'.$ligne['titre_articles'].'</h2>';
				echo '</div>';
				echo '</a>';
				
			?>
				
			</article>
			
			<?php
			
				$sql = $connexion->query(' SELECT id_articles, titre_articles, image_articles, contenu_articles, date1_articles, heure_articles FROM articles ORDER BY id_articles DESC LIMIT '.$debut.', '.$quantite);
						
					//SELECT * FROM salaries LIMIT 0, 3
					//selectionne les champs de la table salaries donne toi une LIMITE commence à 0 et donne en 3
						
				while( $ligne = $sql->fetch() ){
				
					echo '<article class="article">';
					echo '<div class="trait_bleu"></div>';				
					echo '<h2><a href="pages/article.php?a='.$ligne['id_articles'].'&p='.$page.'#infos_aticle">'.$ligne['titre_articles'].'</a></h2>';
					echo '<div class="corps_article">';				
					echo '<a href="pages/article.php?a='.$ligne['id_articles'].'&p='.$page.'#infos_aticle"><img src="img/article/image/'.$ligne['image_articles'].'" width="174" height="130"></a>';
					$chaine = strip_tags($ligne['contenu_articles']);
					$chaine = '<p>'.$chaine.'</p>';
					$chaine = substr($chaine, 0, 420).'...';
					echo ''.$chaine.'<a href="pages/article.php?a='.$ligne['id_articles'].'&p='.$page.'#infos_aticle">Lire la suite</a>';
					echo '</div>';
					echo '<div class="date">'.$ligne['date1_articles'].' à '.$ligne['heure_articles'].'</div>';
					echo '</article>';
				
				}
			
			?>
			
			<div id="nav_pages">
			
				<ul>
			
			<?php 	
				
				if($page > 0){//ce n'est pas la premiére page
				
					$precedente = $page - 1;
					//nlle var 'precedente' pour preserver la variable page
				
					echo'<li><a href="'.$_SERVER['PHP_SELF'].'?p='.$precedente.'#actualites">Précédent</a><li>';
					
				}else{
					
					echo '<li style="color: #46b5df;">Précédent</li>';
					
				}
			?>
			
				<ul id="nav_nombres">
			
			<?php
					
				//série de numéros cliquables qui dépendent du nombre total
				//et du nombre d'articles affichées par page
				
				$i = 0;
				$j = 1;
				
				if($i != 6){

					if($nombre > $quantite){//on a besoin d'écrire ces numéros
					
						while( $i < ($nombre / $quantite) ){//tant qu'il y a des séries
						
							if($i != $page){// est ce que le numéro est cliquables
							
								echo '<li><a href="'.$_SERVER['PHP_SELF'].'?p='.$i.'#actualites"> '.$j.' </a><li>';
							
							}else{//le numéro n'est pas cliquable
							
								echo '<li style="font-weight: bold; color: #46b5df;">'.$j.'</li>';
							
							}
							
						$i++;
						$j++;
						
						}
					
					}else{
						
						echo '<li style="font-weight: bold; color: #46b5df;">'.$j.'</li>';
						
					}
				
				}
					
			?>
			
				</ul>
			
			<?php	
					
				if( $debut + $quantite < $nombre ){
				//il reste des voitures à afficher
				
					$suivante = $page + 1;
					//j'ai besoin d'une nouvelle variable suivante (page suivante)
					//elle vaut $page + 113
					
					echo'<li><a href="'.$_SERVER['PHP_SELF'].'?p='.$suivante.'#actualites">Suivant</a></li>';
					
				}else{//pas de page suivante
				
					echo '<li style="color: #46b5df;">Suivant</li>';
				
				}	
					
			?>
				
				</ul>
			
			</div><!-- Fin de la nav pages -->
			
		</section><!-- Fin de actualités -->
		
		<aside id="flash_info">
		
			<div id="contour">
			
				<h2>flash info</h2>
				
				<div id="infos" class="mCustomScrollbar" data-mcs-theme="dark">
				
				<?php	
					
				$sql = $connexion->query(' SELECT * FROM flash_info ORDER BY id_info DESC ');		
			
				while( $ligne = $sql->fetch() ){
					
					echo '<div class="info">';					
					echo '<p>'.$ligne['contenu_info'].'</p>';						
					echo '<p>'.$ligne['date_info'].' à '.$ligne['heure_info'].'</p>';						
					echo '<div class="trait_gris"></div>';					
					echo'</div><!-- Fin d\'une info -->';
					
				}
					
				?>
				
				</div><!-- Fin des infos -->
			
			</div><!-- Fin du contour -->
			
		</aside><!-- Fin des flash info -->
		
		<aside id="dernieres_videos">
		
			<div id="zone_videos">
			
				<div id="videos">
				
					<h2>dernières vidéos</h2>
					
					<div id="video">
						
					<?php	
					
					$sql = $connexion->query(' SELECT * FROM videos ORDER BY id_videos DESC LIMIT 0,2 ');
					
					while( $ligne = $sql->fetch() ){
					
						echo '<div class="video">';
						echo '<a href="'.$ligne['url_videos'].'" target="_blank">';
						echo '<img src="'.$ligne['image_videos'].'" alt="'.$ligne['titre_videos'].'">';
						echo '<img src="img/actualites/videos/play.gif" alt="play">';						
						echo '</a>';
						echo '</div><!-- Fin d\'une video -->';
						
					}
						
					?>
					
					</div><!-- Fin de video -->
				
				</div><!-- Fin des videos -->
			
			</div><!-- Fin de la zone des videos -->
			
		</aside><!-- Fin des videos -->
		
	</div><!-- Fin du corps -->
	
	
	<section id="zone_partenaires">
	
		<div id="partenaires">
		
			<h1>nos partenaires</h1>
			
			<ul id="flexiselDemo3">
			
			<?php
			
				$sql = $connexion->query(' SELECT logo_partenaire, url_partenaire FROM partenaires');
						
				while( $ligne = $sql->fetch() ){	
				
					echo '<li><a href="http://'.$ligne['url_partenaire'].'" target="_blank"><img src="img/actualites/partenaires/'.$ligne['logo_partenaire'].'" alt="'.$ligne['logo_partenaire'].'"></a></li>';

				}
		
			?>
			
			</ul>
		
		</div>
	
	</section>
	
	
	<section id="zone_footer">
	
		<div id="footer">
		
			<ul id="nav_secondaire">
			
				<li class="separation3"><a href="index.php">Actualités</a></li>
				<li class="separation3"><a href="pages/qui_sommes_nous.php">Qui sommes nous?</a></li>
				<li class="separation3"><a href="pages/nos_activites.php">Nos activités</a></li>
				<li class="separation3"><a href="pages/notre_equipe.php">Notre équipe</a></li>
				<li class="separation3"><a href="pages/nous_aider.php">Nous aider</a></li>
				<li class="separation3"><a href="pages/bibliotheque_en_ligne.php">Bibliotheque</a></li>
				<li class="separation3"><a href="pages/galeries_photos.php">Galeries</a></li>
				<li><a href="pages/contact_et_coordonnees.php">Contact</a></li>
							
			</ul>
			
			<!--<ul id="liens_secondaires">
			
				<li class="separation4"><a href="#">mentions légales</a></li>
				<li class="separation4"><a href="#">données personnelles</a></li>
				<li><a href="#">plan du site</a></li>
				
			</ul>-->
			
			<div id="copyright">
			
				<p>©</p>
				<p>Oiseau-lyre 2016</p>                                                                                                       
			
			</div>
		
		</div>

	</section>
		
	</body>
	
	<script type="text/javascript" src="js/temoignage.js"></script>
	
</html>