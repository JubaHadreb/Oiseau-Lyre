<?php

session_start();

require'connexion.php';

?>

<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Nous aider - Association Oiseau-Lyre</title>
		
		<link rel="stylesheet" href="../css/feuille1.css">
		<link rel="stylesheet" href="../css/feuille9.css">
		<link rel="stylesheet" href="../css/responsive1.css">
		<link rel="icon" type="image/png" href="../img/favicon.png" />
		
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<script>
		
		function bouton_hover_on(id){
				
				document.getElementById(id).style.width = "238px";
				document.getElementById(id).style.height = "41px";
				
			}
			
		function bouton_hover_off(id){
			
			document.getElementById(id).style.width = "248px";
			document.getElementById(id).style.height = "43px";
			
		}
		
		</script>
	
	</head>
	
	<body>
	
	<?php require'header.php'; ?> <!-- html du header -->
	
	<section id="page_aide">
		
		<div id="page_sup">
		
			<h2>Nous aider</h2>
			
			<div id="visuel_benevole">
			
			<img src="../img/nous_aider/benevoles.jpg" alt="benevoles">
			<p>Pour nous aider, deux possibilités!</p>
			
			</div>
			
		</div>
		
		<div id="page_inf">
		
			<div id="partie_benevole">
			
				<img src="../img/nous_aider/panneau_benevole.png" alt="panneau benevole">
				<h3>Devenir bénévole...</h3>
				<ul>
					<li><span>C'est intégrer une équipe solidaire et partager des moments et des émotions ensemble.</span></li>
					<li><span>Travailler avec un clown.</span></li>
					<li><span>Faire vivre et animer la bibliothèque.</span></li>
					<li><span>Proposer et animer les activités qui vous tiennent à coeur.</span></li>
					<li><span>Accompagner les enfants dans leur scolarité dans une ambiance joyeuse et décontractée.</span></li>
					<li><span>Jouer avec les enfants, vivre avec eux des moments de lectures et de découvertes.</span></li>
					<li><span>Créer des liens d'entraide et de confiance.</span></li>
				</ul>
				
				<p>Bénévole à l’Oiseau-Lyre c’est donner du temps pour :</p>
				<ul>
					<li><span>L’aide aux devoirs au square des Moulineaux ou au Pont de Sèvres.</span></li>
					<li><span>Accompagner les groupes pour des sorties culturelles: musées, théâtre, sport, cinéma.</span></li>
					<li><span>Animer des activités culturelles et ludo-éducatives de votre choix: origami, peinture, dessin, musique, chant, cuisine…</span></li>
					<li><span>Participer à la gestion administrative de l’association.</span></li>
					<li><span>Monter des projets avec et pour les jeunes.</span></li>
				</ul>
				<p>Echanger, partager, avoir envie de changer les choses en bas de chez soi !</p>
				<a href="../img/nous_aider/carnet.pdf" target="_blank" onmouseover="bouton_hover_on('bouton');" onmouseout="bouton_hover_off('bouton');"><img id="bouton" src="../img/nous_aider/bouton_telecharger.png" alt="bouton telecharger"></a>
			
			</div>
			
			<div id="partie_don">
			
				<img src="../img/nous_aider/panneau_don.png" alt="panneau bdon">
				<h3>Pourquoi faire un don?</h3>
				
				<p>En donnant vous offrez :</p>
				<ul>
					<li>10 €: <span>fourniture & matériel pour les activités (peinture , origami, maquillage ...).</span></li>
					<li>20€: <span>1 heure de soutien scolaire, d’activité culturelle théâtre, conte, clown.</span></li>
					<li>30€: <span>achat de livres pour la bibliothèque.</span></li>
					<li>50 €: <span>1 sortie au musée, théâtre.</span></li>
					<li>100€: <span>transport en car pour un groupe d'enfants.</span></li>
				</ul>
				
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="8ZARCCCMVTK5E">
				<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
				<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
				</form>
			
			</div>
			
		</div>
			
	</section>

	<?php require'footer.html'; ?> <!-- html du footer -->
		
	</body>
	
</html>