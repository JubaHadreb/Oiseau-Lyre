<?php

session_start();

require'connexion.php';

?>

<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Nos activités de soutien scolaire, de ludothèque, d'animation et d'accompagnement personnel - Association Oiseau-Lyre</title>
		
		<link rel="stylesheet" href="../css/feuille1.css">
		<link rel="stylesheet" href="../css/feuille2.css">
		<link rel="stylesheet" href="../css/responsive1.css">
		<link rel="icon" type="image/png" href="../img/favicon.png" />
		
		<script>
				
			var actif = 'bibliotheque';
			
			function activites_hover_on(id){
				
				document.getElementById(id).style.backgroundColor = "#fff";
				document.getElementById(id).style.color = "#b4e253";
				
			}
			
			function activites_hover_off(id){
				
				if( id != actif){
				
					document.getElementById(id).style.backgroundColor = "#b4e253";
					document.getElementById(id).style.color = "#fff";
				
				}
				
			}
		
		/***************************************animations culturelles et artistiques*****************************************/
			
			function culturelles(){
			
				document.getElementById("culturelles").style.backgroundColor = "#b4e253";
				document.getElementById("recreatives").style.backgroundColor = "#c9ea84";
				document.getElementById("educatives").style.backgroundColor = "#c9ea84";
				document.getElementById("accompagnement").style.backgroundColor = "#c9ea84";
				
				document.getElementById("nav_activites").innerHTML = '';
				document.getElementById("nav_activites").innerHTML = '<li id="bibliotheque" onclick="bibliotheque();" onmouseover="activites_hover_on(\'bibliotheque\');" onmouseout="activites_hover_off(\'bibliotheque\');">Bibliothèque</li><li id="theatre" onclick="theatre();" onmouseover="activites_hover_on(\'theatre\');" onmouseout="activites_hover_off(\'theatre\');">Théâtre</li><li id="clown"onclick="clown();" onmouseover="activites_hover_on(\'clown\');" onmouseout="activites_hover_off(\'clown\');">Clown</li><li id="photo" onclick ="photo();" onmouseover="activites_hover_on(\'photo\');" onmouseout="activites_hover_off(\'photo\');">Photo et vidéo</li><li id="ateliers" onclick="ateliers();" onmouseover="activites_hover_on(\'ateliers\');" onmouseout="activites_hover_off(\'ateliers\');">Ateliers créatifs</li><li id="origami" onclick="origami();" onmouseover="activites_hover_on(\'origami\');" onmouseout="activites_hover_off(\'origami\');">Origami</li><li id="contes" onclick="contes();" onmouseover="activites_hover_on(\'contes\');" onmouseout="activites_hover_off(\'contes\');">Contes</li>';
				
				document.getElementById("bibliotheque").style.backgroundColor = "#fff";
				document.getElementById("bibliotheque").style.color = "#b4e253";
				document.getElementById("theatre").style.backgroundColor = "#b4e253";
				document.getElementById("theatre").style.color = "#fff";
				document.getElementById("clown").style.backgroundColor = "#b4e253";
				document.getElementById("clown").style.color = "#fff";
				document.getElementById("photo").style.backgroundColor = "#b4e253";
				document.getElementById("photo").style.color = "#fff";
				document.getElementById("ateliers").style.backgroundColor = "#b4e253";
				document.getElementById("ateliers").style.color = "#fff";
				document.getElementById("origami").style.backgroundColor = "#b4e253";
				document.getElementById("origami").style.color = "#fff";
				document.getElementById("contes").style.backgroundColor = "#b4e253";
				document.getElementById("contes").style.color = "#fff";
			
				document.getElementById("texte_activite").innerHTML = '';
				document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>Mettre à la disposition des adhérents un fond composé de livres, BD, CD et DVD adulte et jeunesse pour la consultation et l’emprunt.</li><li>Inciter les enfants à la lecture et à la recherche.</li></ul>';
				
				document.getElementById("texte_sevres").innerHTML = '';
				document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne du Pont de Sèvres:</p></h3><ul><li>Public: enfants et jeunes.</li><li>Horaires: Horaires d’ouverture de la structure.</li></ul>';
				
				document.getElementById("texte_squares").innerHTML = '';
				document.getElementById("texte_squares").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne des Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Public: enfants, jeunes et adultes.</li><li>Horaires: Horaires d’ouverture de la structure.</li></ul>';
				
				document.getElementById("attention").innerHTML = '';
				
				document.getElementById("image_activites").innerHTML = '';
				document.getElementById("image_activites").innerHTML = '<img src="../img/activites/bibliotheque.png" alt="animation de bibliotheque">';
				
				actif = 'bibliotheque';
			
			}
			
			
						function bibliotheque(){
							
							document.getElementById("bibliotheque").style.backgroundColor = "#fff";
							document.getElementById("bibliotheque").style.color = "#b4e253";
							document.getElementById("theatre").style.backgroundColor = "#b4e253";
							document.getElementById("theatre").style.color = "#fff";
							document.getElementById("clown").style.backgroundColor = "#b4e253";
							document.getElementById("clown").style.color = "#fff";
							document.getElementById("photo").style.backgroundColor = "#b4e253";
							document.getElementById("photo").style.color = "#fff";
							document.getElementById("ateliers").style.backgroundColor = "#b4e253";
							document.getElementById("ateliers").style.color = "#fff";
							document.getElementById("origami").style.backgroundColor = "#b4e253";
							document.getElementById("origami").style.color = "#fff";
							document.getElementById("contes").style.backgroundColor = "#b4e253";
							document.getElementById("contes").style.color = "#fff";
						
							document.getElementById("texte_activite").innerHTML = '';
							document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>Mettre à la disposition des adhérents un fond composé de livres, BD, CD et DVD adulte et jeunesse pour la consultation et l’emprunt.</li><li>Inciter les enfants à la lecture et à la recherche.</li></ul>';
							
							document.getElementById("texte_sevres").innerHTML = '';
							document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne du Pont de Sèvres:</p></h3><ul><li>Public: enfants et jeunes.</li><li>Horaires: Horaires d’ouverture de la structure.</li></ul>';
							
							document.getElementById("texte_squares").innerHTML = '';
							document.getElementById("texte_squares").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne des Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Public: enfants, jeunes et adultes.</li><li>Horaires: Horaires d’ouverture de la structure.</li></ul>';
							
							document.getElementById("attention").innerHTML = '';
							
							document.getElementById("image_activites").innerHTML = '';
							document.getElementById("image_activites").innerHTML = '<img src="../img/activites/bibliotheque.png" alt="animation de bibliotheque">';
							
							actif = 'bibliotheque';
						
						}
						
						function theatre(){
							
							document.getElementById("bibliotheque").style.backgroundColor = "#b4e253";
							document.getElementById("bibliotheque").style.color = "#fff";
							document.getElementById("theatre").style.backgroundColor = "#fff";
							document.getElementById("theatre").style.color = "#b4e253";
							document.getElementById("clown").style.backgroundColor = "#b4e253";
							document.getElementById("clown").style.color = "#fff";
							document.getElementById("photo").style.backgroundColor = "#b4e253";
							document.getElementById("photo").style.color = "#fff";
							document.getElementById("ateliers").style.backgroundColor = "#b4e253";
							document.getElementById("ateliers").style.color = "#fff";
							document.getElementById("origami").style.backgroundColor = "#b4e253";
							document.getElementById("origami").style.color = "#fff";
							document.getElementById("contes").style.backgroundColor = "#b4e253";
							document.getElementById("contes").style.color = "#fff";
						
							document.getElementById("texte_activite").innerHTML = '';
							document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>Initier les élémentaires, collégiens et adultes à la pratique théâtrale.</li><li>Offrir un moment de détente récréative et de libre expression.</li><li>Proposer au public un rendu mis en scène, fruit d’un travail collectif.</li></ul>';
							
							document.getElementById("texte_sevres").innerHTML = '';
							document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne du Pont de Sèvres:</p></h3><ul><li>Atelier élémentaire: le mercredi de 14h à 15h30.</li><li>Atelier collégien/lycéen: le mercredi de 15h30 à 17h30.</li></ul>';
							
							document.getElementById("texte_squares").innerHTML = '';
							document.getElementById("texte_squares").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne des Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Atelier élémentaire: le samedi de 14h à 15h30.</li><li>Atelier collégien/lycéen: le samedi de16h à 18h.</li><li>Atelier adulte: horaire à définir.</li></ul>';
							
							document.getElementById("attention").innerHTML = '';
							
							document.getElementById("image_activites").innerHTML = '';
							document.getElementById("image_activites").innerHTML = '<img src="../img/activites/bibliotheque.png" alt="animation de bibliotheque">';
							
							actif = 'theatre';
						
						}
						
						function clown(){
							
							document.getElementById("bibliotheque").style.backgroundColor = "#b4e253";
							document.getElementById("bibliotheque").style.color = "#fff";
							document.getElementById("theatre").style.backgroundColor = "#b4e253";
							document.getElementById("theatre").style.color = "#fff";
							document.getElementById("clown").style.backgroundColor = "#fff";
							document.getElementById("clown").style.color = "#b4e253";
							document.getElementById("photo").style.backgroundColor = "#b4e253";
							document.getElementById("photo").style.color = "#fff";
							document.getElementById("ateliers").style.backgroundColor = "#b4e253";
							document.getElementById("ateliers").style.color = "#fff";
							document.getElementById("origami").style.backgroundColor = "#b4e253";
							document.getElementById("origami").style.color = "#fff";
							document.getElementById("contes").style.backgroundColor = "#b4e253";
							document.getElementById("contes").style.color = "#fff";
						
							document.getElementById("texte_activite").innerHTML = '';
							document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>S’exercer à l’écoute, le mouvement et la précision.</li><li>Enrichir la créativité et développer l’expression personnelle.</li><li>Élaboration de numéros pour la préparation de spectacles.</li></ul>';
							
							document.getElementById("texte_sevres").innerHTML = '';
							document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne du Pont de Sèvres:</p></h3><ul><li>Public: Pour élémentaires, collégiens et lycéens.</li><li>Horaires: Horaires variables pendant les vacances scolaires.</li></ul>';
							
							document.getElementById("texte_squares").innerHTML = '';
							document.getElementById("texte_squares").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne des Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Public: Pour élémentaires, collégiens et lycéens.</li><li>Horaires: Horaires variables pendant les vacances scolaires.</li></ul>';
							
							document.getElementById("attention").innerHTML = '';
							
							document.getElementById("image_activites").innerHTML = '';
							document.getElementById("image_activites").innerHTML = '<img src="../img/activites/bibliotheque.png" alt="animation de bibliotheque">';
							
							actif = 'clown';
						
						}
						
						function photo(){
							
							document.getElementById("bibliotheque").style.backgroundColor = "#b4e253";
							document.getElementById("bibliotheque").style.color = "#fff";
							document.getElementById("theatre").style.backgroundColor = "#b4e253";
							document.getElementById("theatre").style.color = "#fff";
							document.getElementById("clown").style.backgroundColor = "#b4e253";
							document.getElementById("clown").style.color = "#fff";
							document.getElementById("photo").style.backgroundColor = "#fff";
							document.getElementById("photo").style.color = "#b4e253";
							document.getElementById("ateliers").style.backgroundColor = "#b4e253";
							document.getElementById("ateliers").style.color = "#fff";
							document.getElementById("origami").style.backgroundColor = "#b4e253";
							document.getElementById("origami").style.color = "#fff";
							document.getElementById("contes").style.backgroundColor = "#b4e253";
							document.getElementById("contes").style.color = "#fff";
						
							document.getElementById("texte_activite").innerHTML = '';
							document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>S’initier à l’art de la photographie, au travail de la lumière et de l’exposition.</li><li>Développer ses connaissances en physique et plus précisément en optique.</li></ul>';
							
							document.getElementById("texte_sevres").innerHTML = '';
							document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne du Pont de Sèvres:</p></h3><ul><li>Public: Pour les collégiens et lycéens.</li><li>Horaires: Horaires variables pendant les vacances.</li></ul>';
							
							document.getElementById("texte_squares").innerHTML = '';
							document.getElementById("texte_squares").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne des Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Public: Pour les collégiens et lycéens.</li><li>Horaires: Horaires variables pendant les vacances.</li></ul>';
							
							document.getElementById("attention").innerHTML = '';
							
							document.getElementById("image_activites").innerHTML = '';
							document.getElementById("image_activites").innerHTML = '<img src="../img/activites/bibliotheque.png" alt="animation de bibliotheque">';
							
							actif = 'photo';
						
						}
						
						function ateliers(){
							
							document.getElementById("bibliotheque").style.backgroundColor = "#b4e253";
							document.getElementById("bibliotheque").style.color = "#fff";
							document.getElementById("theatre").style.backgroundColor = "#b4e253";
							document.getElementById("theatre").style.color = "#fff";
							document.getElementById("clown").style.backgroundColor = "#b4e253";
							document.getElementById("clown").style.color = "#fff";
							document.getElementById("photo").style.backgroundColor = "#b4e253";
							document.getElementById("photo").style.color = "#fff";
							document.getElementById("ateliers").style.backgroundColor = "#fff";
							document.getElementById("ateliers").style.color = "#b4e253";
							document.getElementById("origami").style.backgroundColor = "#b4e253";
							document.getElementById("origami").style.color = "#fff";
							document.getElementById("contes").style.backgroundColor = "#b4e253";
							document.getElementById("contes").style.color = "#fff";
						
							document.getElementById("texte_activite").innerHTML = '';
							document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>S’éveiller à de nouvelles formes d\'activités artistiques et formes d’expression.</li><li>Laisser parler son imagination et apprendre à se concentrer.</li><li>Profiter d’un moment de détente et d’échange.</li></ul>';
							
							document.getElementById("texte_sevres").innerHTML = '';
							document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne du Pont de Sèvres:</p></h3><ul><li>Public: Élémentaire, collégien et lycéen.</li><li>Horaires: Horaires variables pendant les vacances.</li></ul>';
							
							document.getElementById("texte_squares").innerHTML = '';
							document.getElementById("texte_squares").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne des Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Public: Élémentaire, collégien et lycéen.</li><li>Horaires: Horaires variables pendant les vacances.</li></ul>';
							
							document.getElementById("attention").innerHTML = '';
							
							document.getElementById("image_activites").innerHTML = '';
							document.getElementById("image_activites").innerHTML = '<img src="../img/activites/bibliotheque.png" alt="animation de bibliotheque">';
							
							actif = 'ateliers';
						
						}
						
						function origami(){
							
							document.getElementById("bibliotheque").style.backgroundColor = "#b4e253";
							document.getElementById("bibliotheque").style.color = "#fff";
							document.getElementById("theatre").style.backgroundColor = "#b4e253";
							document.getElementById("theatre").style.color = "#fff";
							document.getElementById("clown").style.backgroundColor = "#b4e253";
							document.getElementById("clown").style.color = "#fff";
							document.getElementById("photo").style.backgroundColor = "#b4e253";
							document.getElementById("photo").style.color = "#fff";
							document.getElementById("ateliers").style.backgroundColor = "#b4e253";
							document.getElementById("ateliers").style.color = "#fff";
							document.getElementById("origami").style.backgroundColor = "#fff";
							document.getElementById("origami").style.color = "#b4e253";
							document.getElementById("contes").style.backgroundColor = "#b4e253";
							document.getElementById("contes").style.color = "#fff";
						
							document.getElementById("texte_activite").innerHTML = '';
							document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>S’éveiller à une nouvelle activité artistique.</li><li>Apprendre à se concentrer.</li><li>Profiter d’un moment de détente et d’échange.</li></ul>';
							
							document.getElementById("texte_sevres").innerHTML = '';
							document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne du Pont de Sèvres:</p></h3><ul><li>Public: Élémentaire, collégien et lycéen.</li><li>Horaires: Horaires variables pendant les vacances.</li></ul>';
							
							document.getElementById("texte_squares").innerHTML = '';
							document.getElementById("texte_squares").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne des Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Public: Élémentaire, collégien et lycéen.</li><li>Horaires: Horaires variables pendant les vacances.</li></ul>';
							
							document.getElementById("attention").innerHTML = '';
							
							document.getElementById("image_activites").innerHTML = '';
							document.getElementById("image_activites").innerHTML = '<img src="../img/activites/bibliotheque.png" alt="animation de bibliotheque">';
							
							actif = 'origami';
						
						}
						
						function contes(){
							
							document.getElementById("bibliotheque").style.backgroundColor = "#b4e253";
							document.getElementById("bibliotheque").style.color = "#fff";
							document.getElementById("theatre").style.backgroundColor = "#b4e253";
							document.getElementById("theatre").style.color = "#fff";
							document.getElementById("clown").style.backgroundColor = "#b4e253";
							document.getElementById("clown").style.color = "#fff";
							document.getElementById("photo").style.backgroundColor = "#b4e253";
							document.getElementById("photo").style.color = "#fff";
							document.getElementById("ateliers").style.backgroundColor = "#b4e253";
							document.getElementById("ateliers").style.color = "#fff";
							document.getElementById("origami").style.backgroundColor = "#b4e253";
							document.getElementById("origami").style.color = "#fff";
							document.getElementById("contes").style.backgroundColor = "#fff";
							document.getElementById("contes").style.color = "#b4e253";
						
							document.getElementById("texte_activite").innerHTML = '';
							document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>Initier l’enfant à de multiples mondes imaginaires.</li><li>Préparer et familiariser le public à l’oralité.</li><li>Introduire le livre et inciter à la lecture.</li></ul>';
							
							document.getElementById("texte_sevres").innerHTML = '';
							document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne du Pont de Sèvres:</p></h3><ul><li>Public: Maternelles et élémentaires.</li><li>Horaires: Horaires variables en matinée pour les maternelles et en après-midi pour les élémentaires.</li></ul>';
							
							document.getElementById("texte_squares").innerHTML = '';
							document.getElementById("texte_squares").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne des Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Public: Maternelles et élémentaires.</li><li>Horaires: Horaires variables en matinée pour les maternelles et en après-midi pour les élémentaires.</li></ul>';
							
							document.getElementById("attention").innerHTML = '';
							
							document.getElementById("image_activites").innerHTML = '';
							document.getElementById("image_activites").innerHTML = '<img src="../img/activites/bibliotheque.png" alt="animation de bibliotheque">';
							
							actif = 'contes';
						
						}
						
						
		/***************************************animations culturelles et artistiques*****************************************/
			
		/***********************************************activités récréatives*************************************************/
			
			function recreatives(){
			
				document.getElementById("culturelles").style.backgroundColor = "#c9ea84";
				document.getElementById("recreatives").style.backgroundColor = "#b4e253";
				document.getElementById("educatives").style.backgroundColor = "#c9ea84";
				document.getElementById("accompagnement").style.backgroundColor = "#c9ea84";
				
				document.getElementById("nav_activites").innerHTML = '';
				document.getElementById("nav_activites").innerHTML = '<li id="ludotheque" onclick="ludotheque();" onmouseover="activites_hover_on(\'ludotheque\');" onmouseout="activites_hover_off(\'ludotheque\');">Ludothèque</li><li id="sorties" onclick="sorties();" onmouseover="activites_hover_on(\'sorties\');" onmouseout="activites_hover_off(\'sorties\');">Sorties</li>';
				
				document.getElementById("ludotheque").style.backgroundColor = "#fff";
				document.getElementById("ludotheque").style.color = "#b4e253";
				document.getElementById("sorties").style.backgroundColor = "#b4e253";
				document.getElementById("sorties").style.color = "#fff";
			
				document.getElementById("texte_activite").innerHTML = '';
				document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>Offrir un moment récréatif et de détente en participant à des jeux de sociétés et de constructions.</li><li>Développer sa sociabilité à travers des jeux collectifs.</li><li>Apprendre les règles et le respect des autres joueurs.</li></ul>';
				
				document.getElementById("texte_sevres").innerHTML = '';
				document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne du Pont de Sèvres:</p></h3><ul><li>Public: Elémentaires, collégiens et lycéens.</li><li>Horaires: le samedi de 14h à 18h.</li></ul>';
				
				document.getElementById("texte_squares").innerHTML = '';
				document.getElementById("texte_squares").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne des Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Public: Elémentaires, collégiens et lycéens.</li><li>Horaires: le mercredi de 14h à 18h.</li></ul>';
				
				document.getElementById("attention").innerHTML = '';
				
				document.getElementById("image_activites").innerHTML = '';
				document.getElementById("image_activites").innerHTML = '<img src="../img/activites/ludotheque.png" alt="ludotheque">';
				
				actif = 'ludotheque';
			
			}
			
						function ludotheque(){
							
							document.getElementById("ludotheque").style.backgroundColor = "#fff";
							document.getElementById("ludotheque").style.color = "#b4e253";
							document.getElementById("sorties").style.backgroundColor = "#b4e253";
							document.getElementById("sorties").style.color = "#fff";
						
							document.getElementById("texte_activite").innerHTML = '';
							document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>Offrir un moment récréatif et de détente en participant à des jeux de sociétés et de constructions.</li><li>Développer sa sociabilité à travers des jeux collectifs.</li><li>Apprendre les règles et le respect des autres joueurs.</li></ul>';
							
							document.getElementById("texte_sevres").innerHTML = '';
							document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne du Pont de Sèvres:</p></h3><ul><li>Public: Elémentaires, collégiens et lycéens.</li><li>Horaires: le samedi de 14h à 18h.</li></ul>';
							
							document.getElementById("texte_squares").innerHTML = '';
							document.getElementById("texte_squares").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne des Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Public: Elémentaires, collégiens et lycéens.</li><li>Horaires: le mercredi de 14h à 18h.</li></ul>';
							
							document.getElementById("attention").innerHTML = '';
							
							document.getElementById("image_activites").innerHTML = '';
							document.getElementById("image_activites").innerHTML = '<img src="../img/activites/ludotheque.png" alt="ludotheque">';
							
							actif = 'ludotheque';
		
						}
						
						function sorties(){
							
							document.getElementById("ludotheque").style.backgroundColor = "#b4e253";
							document.getElementById("ludotheque").style.color = "#fff";
							document.getElementById("sorties").style.backgroundColor = "#fff";
							document.getElementById("sorties").style.color = "#b4e253";
						
							document.getElementById("texte_activite").innerHTML = '';
							document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>Offrir un moment convivial et de détente hors de la structure.</li><li>Fédérer les groupe de nos jeunes adhérents.</li></ul>';
							
							document.getElementById("texte_sevres").innerHTML = '';
							document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne du Pont de Sèvres:</p></h3><ul><li>Public: Élémentaires, collégiens et lycéens.</li><li>Horaires: Horaires variables.</li></ul>';
							
							document.getElementById("texte_squares").innerHTML = '';
							document.getElementById("texte_squares").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne des Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Public: Elémentaires, collégiens et lycéens.</li><li>Horaires: Horaires variables.</li></ul>';
							
							document.getElementById("attention").innerHTML = '';
							
							document.getElementById("image_activites").innerHTML = '';
							document.getElementById("image_activites").innerHTML = '<img src="../img/activites/ludotheque.png" alt="ludotheque">';
							
							actif = 'sorties';
		
						}
			
			/***********************************************activités récréatives*************************************************/
			
			/***********************************************Activités éducatives*************************************************/
			
			function educatives(){
			
				document.getElementById("culturelles").style.backgroundColor = "#c9ea84";
				document.getElementById("recreatives").style.backgroundColor = "#c9ea84";
				document.getElementById("educatives").style.backgroundColor = "#b4e253";
				document.getElementById("accompagnement").style.backgroundColor = "#c9ea84";
				
				document.getElementById("nav_activites").innerHTML = '';
				document.getElementById("nav_activites").innerHTML = '<li id="devoirs" onclick="devoirs();" onmouseover="activites_hover_on(\'devoirs\');" onmouseout="activites_hover_off(\'devoirs\');">Aide aux devoirs</li><li id="niveau" onclick="niveau();" onmouseover="activites_hover_on(\'niveau\');" onmouseout="activites_hover_off(\'niveau\');">Remise à niveau</li><li id="lecture" onclick="lecture();" onmouseover="activites_hover_on(\'lecture\');" onmouseout="activites_hover_off(\'lecture\');">Ateliers lecture</li><li id="decrochage" onclick="decrochage();" onmouseover="activites_hover_on(\'decrochage\');" onmouseout="activites_hover_off(\'decrochage\');" style="height: 44px;">Lutte contre le décrochage scolaire</li><li id="informatique" onclick="informatique();" onmouseover="activites_hover_on(\'informatique\');" onmouseout="activites_hover_off(\'informatique\');" style="height: 32px;">Initiation à l’informatique</li><li id="stagiaires" onclick="stagiaires();" onmouseover="activites_hover_on(\'stagiaires\');" onmouseout="activites_hover_off(\'stagiaires\');" style="height: 32px;">Accueil de stagiaires</li>';
				
				document.getElementById("devoirs").style.backgroundColor = "#fff";
				document.getElementById("devoirs").style.color = "#b4e253";
				document.getElementById("niveau").style.backgroundColor = "#b4e253";
				document.getElementById("niveau").style.color = "#fff";
				document.getElementById("lecture").style.backgroundColor = "#b4e253";
				document.getElementById("lecture").style.color = "#fff";
				document.getElementById("decrochage").style.backgroundColor = "#b4e253";
				document.getElementById("decrochage").style.color = "#fff";
				document.getElementById("informatique").style.backgroundColor = "#b4e253";
				document.getElementById("informatique").style.color = "#fff";
				document.getElementById("stagiaires").style.backgroundColor = "#b4e253";
				document.getElementById("stagiaires").style.color = "#fff";
			
				document.getElementById("texte_activite").innerHTML = '';
				document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>Accompagner les élèves dans leur travail scolaire.</li></ul>';
				
				document.getElementById("texte_sevres").innerHTML = '';
				document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antennes du Pont de Sèvres  et des Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Public: Elémentaires, collégiens et lycéens.</li><li>Horaires:<ul style="list-style: circle; margin: 5px 0 0 14px;"><li>Elémentaires : lundi, mardi, jeudi et vendredi  de 16h à18h et mercredi de 17h à 18h.</li><li>Collégiens et lycéens : lundi, mardi, mercredi, jeudi et vendredi 18h-20h.</li></ul></li></ul>';
				
				document.getElementById("texte_squares").innerHTML = '';
				
				document.getElementById("attention").innerHTML = '';
				
				document.getElementById("image_activites").innerHTML = '';
				document.getElementById("image_activites").innerHTML = '<img src="../img/activites/ludotheque.png" alt="ludotheque">';
				
				actif = 'devoirs';
			
			}
			
						function devoirs(){
							
							document.getElementById("devoirs").style.backgroundColor = "#fff";
							document.getElementById("devoirs").style.color = "#b4e253";
							document.getElementById("niveau").style.backgroundColor = "#b4e253";
							document.getElementById("niveau").style.color = "#fff";
							document.getElementById("lecture").style.backgroundColor = "#b4e253";
							document.getElementById("lecture").style.color = "#fff";
							document.getElementById("decrochage").style.backgroundColor = "#b4e253";
							document.getElementById("decrochage").style.color = "#fff";
							document.getElementById("informatique").style.backgroundColor = "#b4e253";
							document.getElementById("informatique").style.color = "#fff";
							document.getElementById("stagiaires").style.backgroundColor = "#b4e253";
							document.getElementById("stagiaires").style.color = "#fff";
						
							document.getElementById("texte_activite").innerHTML = '';
							document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>Accompagner les élèves dans leur travail scolaire.</li></ul>';
							
							document.getElementById("texte_sevres").innerHTML = '';
							document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antennes du Pont de Sèvres  et des Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Public: Elémentaires, collégiens et lycéens.</li><li>Horaires:<ul style="list-style: circle; margin: 5px 0 0 14px;"><li>Elémentaires : lundi, mardi, jeudi et vendredi  de 16h à18h et mercredi de 17h à 18h.</li><li>Collégiens et lycéens : lundi, mardi, mercredi, jeudi et vendredi 18h-20h.</li></ul></li></ul>';
							
							document.getElementById("texte_squares").innerHTML = '';
							
							document.getElementById("attention").innerHTML = '';
							
							document.getElementById("image_activites").innerHTML = '';
							document.getElementById("image_activites").innerHTML = '<img src="../img/activites/ludotheque.png" alt="ludotheque">';
							
							actif = 'devoirs';
		
						}
						
						function niveau(){
							
							document.getElementById("devoirs").style.backgroundColor = "#b4e253";
							document.getElementById("devoirs").style.color = "#fff";
							document.getElementById("niveau").style.backgroundColor = "#fff";
							document.getElementById("niveau").style.color = "#b4e253";
							document.getElementById("lecture").style.backgroundColor = "#b4e253";
							document.getElementById("lecture").style.color = "#fff";
							document.getElementById("decrochage").style.backgroundColor = "#b4e253";
							document.getElementById("decrochage").style.color = "#fff";
							document.getElementById("informatique").style.backgroundColor = "#b4e253";
							document.getElementById("informatique").style.color = "#fff";
							document.getElementById("stagiaires").style.backgroundColor = "#b4e253";
							document.getElementById("stagiaires").style.color = "#fff";
						
							document.getElementById("texte_activite").innerHTML = '';
							document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>Préparer les collégiens et les lycéens aux diplômes du brevet et du baccalauréat.</li></ul>';
							
							document.getElementById("texte_sevres").innerHTML = '';
							document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antennes du Pont de Sèvres  et des Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Horaires: Matinées de vacances scolaires.</li></ul>';
							
							document.getElementById("texte_squares").innerHTML = '';
							
							document.getElementById("attention").innerHTML = '';
							
							document.getElementById("image_activites").innerHTML = '';
							document.getElementById("image_activites").innerHTML = '<img src="../img/activites/ludotheque.png" alt="ludotheque">';
							
							actif = 'niveau';
		
						}
						
						function lecture(){
							
							document.getElementById("devoirs").style.backgroundColor = "#b4e253";
							document.getElementById("devoirs").style.color = "#fff";
							document.getElementById("niveau").style.backgroundColor = "#b4e253";
							document.getElementById("niveau").style.color = "#fff";
							document.getElementById("lecture").style.backgroundColor = "#fff";
							document.getElementById("lecture").style.color = "#b4e253";
							document.getElementById("decrochage").style.backgroundColor = "#b4e253";
							document.getElementById("decrochage").style.color = "#fff";
							document.getElementById("informatique").style.backgroundColor = "#b4e253";
							document.getElementById("informatique").style.color = "#fff";
							document.getElementById("stagiaires").style.backgroundColor = "#b4e253";
							document.getElementById("stagiaires").style.color = "#fff";
						
							document.getElementById("texte_activite").innerHTML = '';
							document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>Soutien scolaire autour de l’apprentissage de la lecture.</li></ul>';
							
							document.getElementById("texte_sevres").innerHTML = '';
							document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antennes du Pont de Sèvres  et des Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Public: Enfants de CP.</li><li>Horaires: Matinées des vacances scolaires.</li></ul>';
							
							document.getElementById("texte_squares").innerHTML = '';
							
							document.getElementById("attention").innerHTML = '';
							
							document.getElementById("image_activites").innerHTML = '';
							document.getElementById("image_activites").innerHTML = '<img src="../img/activites/ludotheque.png" alt="ludotheque">';
							
							actif = 'lecture';
		
						}
						
						function decrochage(){
							
							document.getElementById("devoirs").style.backgroundColor = "#b4e253";
							document.getElementById("devoirs").style.color = "#fff";
							document.getElementById("niveau").style.backgroundColor = "#b4e253";
							document.getElementById("niveau").style.color = "#fff";
							document.getElementById("lecture").style.backgroundColor = "#b4e253";
							document.getElementById("lecture").style.color = "#fff";
							document.getElementById("decrochage").style.backgroundColor = "#fff";
							document.getElementById("decrochage").style.color = "#b4e253";
							document.getElementById("informatique").style.backgroundColor = "#b4e253";
							document.getElementById("informatique").style.color = "#fff";
							document.getElementById("stagiaires").style.backgroundColor = "#b4e253";
							document.getElementById("stagiaires").style.color = "#fff";
						
							document.getElementById("texte_activite").innerHTML = '';
							document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>Accueil des jeunes exclus temporairement:<ul style="list-style: circle; margin: 5px 0 0 14px;"><li>Travail scolaire.</li><li>Soutien psychologique.</li></ul></li></ul>';
							
							document.getElementById("texte_sevres").innerHTML = '';
							document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antennes du Pont de Sèvres  et des Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Public: Collégiens exclus.</li><li>Horaires: Horaires variables en fonction de la demande.</li></ul>';
							
							document.getElementById("texte_squares").innerHTML = '';
							
							document.getElementById("attention").innerHTML = '';
							
							document.getElementById("image_activites").innerHTML = '';
							document.getElementById("image_activites").innerHTML = '<img src="../img/activites/ludotheque.png" alt="ludotheque">';
							
							actif = 'decrochage';
		
						}
						
						function informatique(){
							
							document.getElementById("devoirs").style.backgroundColor = "#b4e253";
							document.getElementById("devoirs").style.color = "#fff";
							document.getElementById("niveau").style.backgroundColor = "#b4e253";
							document.getElementById("niveau").style.color = "#fff";
							document.getElementById("lecture").style.backgroundColor = "#b4e253";
							document.getElementById("lecture").style.color = "#fff";
							document.getElementById("decrochage").style.backgroundColor = "#b4e253";
							document.getElementById("decrochage").style.color = "#fff";
							document.getElementById("informatique").style.backgroundColor = "#fff";
							document.getElementById("informatique").style.color = "#b4e253";
							document.getElementById("stagiaires").style.backgroundColor = "#b4e253";
							document.getElementById("stagiaires").style.color = "#fff";
						
							document.getElementById("texte_activite").innerHTML = '';
							document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>Initier à l’informatique, à la programmation web, au traitement de texte…</li></ul>';
							
							document.getElementById("texte_sevres").innerHTML = '';
							document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antenne des Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Public: enfants, adolescents et adultes.</li><li>Horaires:<ul style="list-style: circle; margin: 5px 0 0 14px;"><li>Enfants et adolescents : pendant les vacances scolaires.</li><li>Adultes : horaires variables, se renseigner.</li></ul></li></ul>';
							
							document.getElementById("texte_squares").innerHTML = '';
							
							document.getElementById("attention").innerHTML = '';
							
							document.getElementById("image_activites").innerHTML = '';
							document.getElementById("image_activites").innerHTML = '<img src="../img/activites/ludotheque.png" alt="ludotheque">';
							
							actif = 'informatique';
		
						}
						
						function stagiaires(){
							
							document.getElementById("devoirs").style.backgroundColor = "#b4e253";
							document.getElementById("devoirs").style.color = "#fff";
							document.getElementById("niveau").style.backgroundColor = "#b4e253";
							document.getElementById("niveau").style.color = "#fff";
							document.getElementById("lecture").style.backgroundColor = "#b4e253";
							document.getElementById("lecture").style.color = "#fff";
							document.getElementById("decrochage").style.backgroundColor = "#b4e253";
							document.getElementById("decrochage").style.color = "#fff";
							document.getElementById("informatique").style.backgroundColor = "#b4e253";
							document.getElementById("informatique").style.color = "#fff";
							document.getElementById("stagiaires").style.backgroundColor = "#fff";
							document.getElementById("stagiaires").style.color = "#b4e253";
						
							document.getElementById("texte_activite").innerHTML = '';
							document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>Permettre aux stagiaires de découvrir le monde du travail dans une structure associative.</li></ul>';
							
							document.getElementById("texte_sevres").innerHTML = '';
							document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antennes du Pont de Sèvres  et des Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Public: De la 3ème aux études post-bac dans les domaines de l’animation, du social, de l’administration, de la culture.</li><li>Horaires: en fonction des demandes.</li></ul>';
							
							document.getElementById("texte_squares").innerHTML = '';
							
							document.getElementById("attention").innerHTML = '';
							
							document.getElementById("image_activites").innerHTML = '';
							document.getElementById("image_activites").innerHTML = '<img src="../img/activites/ludotheque.png" alt="ludotheque">';
							
							actif = 'stagiaires';
		
						}
		
		/***********************************************Activités éducatives*************************************************/
		
		/****************************************animation sociale et accompagnement personnel********************************************/
			
			function accompagnement(){
			
				document.getElementById("culturelles").style.backgroundColor = "#c9ea84";
				document.getElementById("recreatives").style.backgroundColor = "#c9ea84";
				document.getElementById("educatives").style.backgroundColor = "#c9ea84";
				document.getElementById("accompagnement").style.backgroundColor = "#b4e253";
				
				document.getElementById("nav_activites").innerHTML = '';
				document.getElementById("nav_activites").innerHTML = '<li id="parole" onclick="parole();" onmouseover="activites_hover_on(\'parole\');" onmouseout="activites_hover_off(\'parole\');">Groupes de parole</li><li id="psychologique" onclick="psychologique();" onmouseover="activites_hover_on(\'psychologique\');" onmouseout="activites_hover_off(\'psychologique\');" style="height: 32px;">Suivi psychologique</li><li id="journal" onclick="journal();" onmouseover="activites_hover_on(\'journal\');" onmouseout="activites_hover_off(\'journal\');" style="height: 32px;">Journal des 4 cours</li><li id="suivi" onclick="suivi();" onmouseover="activites_hover_on(\'suivi\');" onmouseout="activites_hover_off(\'suivi\');" style="height: 32px;">Suivi de jeunes adultes</li>';
				
				document.getElementById("parole").style.backgroundColor = "#fff";
				document.getElementById("parole").style.color = "#b4e253";
				document.getElementById("psychologique").style.backgroundColor = "#b4e253";
				document.getElementById("psychologique").style.color = "#fff";
				document.getElementById("journal").style.backgroundColor = "#b4e253";
				document.getElementById("journal").style.color = "#fff";
				document.getElementById("suivi").style.backgroundColor = "#b4e253";
				document.getElementById("suivi").style.color = "#fff";
			
				document.getElementById("texte_activite").innerHTML = '';
				document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>Offrir un lieu d’expression et d’écoute, sans jugement.</li></ul>';
				
				document.getElementById("texte_sevres").innerHTML = '';
				document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antennes du Pont de Sèvres ou des Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Public: Primaires, collégiens, lycéens.</li><li>Horaires: groupes de 45 minutes à 1 heure, pendant les vacances scolaires à des horaires variables.</li></ul>';
				
				document.getElementById("texte_squares").innerHTML = '';
				
				document.getElementById("attention").innerHTML = '';
				
				document.getElementById("image_activites").innerHTML = '';
				document.getElementById("image_activites").innerHTML = '<img src="../img/activites/ludotheque.png" alt="ludotheque">';
				
				actif = 'parole';
			
			}
			
						function parole(){
							
							document.getElementById("parole").style.backgroundColor = "#fff";
							document.getElementById("parole").style.color = "#b4e253";
							document.getElementById("psychologique").style.backgroundColor = "#b4e253";
							document.getElementById("psychologique").style.color = "#fff";
							document.getElementById("journal").style.backgroundColor = "#b4e253";
							document.getElementById("journal").style.color = "#fff";
							document.getElementById("suivi").style.backgroundColor = "#b4e253";
							document.getElementById("suivi").style.color = "#fff";
						
							document.getElementById("texte_activite").innerHTML = '';
							document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>Offrir un lieu d’expression et d’écoute, sans jugement.</li></ul>';
							
							document.getElementById("texte_sevres").innerHTML = '';
							document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antennes du Pont de Sèvres ou des Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Public: Primaires, collégiens, lycéens.</li><li>Horaires: groupes de 45 minutes à 1 heure, pendant les vacances scolaires à des horaires variables.</li></ul>';
							
							document.getElementById("texte_squares").innerHTML = '';
							
							document.getElementById("attention").innerHTML = '';
							
							document.getElementById("image_activites").innerHTML = '';
							document.getElementById("image_activites").innerHTML = '<img src="../img/activites/ludotheque.png" alt="ludotheque">';
							
							actif = 'parole';
		
						}
						
						function psychologique(){
							
							document.getElementById("parole").style.backgroundColor = "#b4e253";
							document.getElementById("parole").style.color = "#fff";
							document.getElementById("psychologique").style.backgroundColor = "#fff";
							document.getElementById("psychologique").style.color = "#b4e253";
							document.getElementById("journal").style.backgroundColor = "#b4e253";
							document.getElementById("journal").style.color = "#fff";
							document.getElementById("suivi").style.backgroundColor = "#b4e253";
							document.getElementById("suivi").style.color = "#fff";
						
							document.getElementById("texte_activite").innerHTML = '';
							document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>Ecoute et soutien ponctuel.</li></ul>';
							
							document.getElementById("texte_sevres").innerHTML = '';
							document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Antennes du Pont de Sèvres et des Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Public: tout-venant (enfants/adolescents et adultes).</li><li>Horaires: à définir en fonction de la demande.</li></ul>';
							
							document.getElementById("texte_squares").innerHTML = '';
							
							document.getElementById("attention").innerHTML = '';
							
							document.getElementById("image_activites").innerHTML = '';
							document.getElementById("image_activites").innerHTML = '<img src="../img/activites/ludotheque.png" alt="ludotheque">';
							
							actif = 'psychologique';
		
						}
						
						function journal(){
							
							document.getElementById("parole").style.backgroundColor = "#b4e253";
							document.getElementById("parole").style.color = "#fff";
							document.getElementById("psychologique").style.backgroundColor = "#b4e253";
							document.getElementById("psychologique").style.color = "#fff";
							document.getElementById("journal").style.backgroundColor = "#fff";
							document.getElementById("journal").style.color = "#b4e253";
							document.getElementById("suivi").style.backgroundColor = "#b4e253";
							document.getElementById("suivi").style.color = "#fff";
						
							document.getElementById("texte_activite").innerHTML = '';
							document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>Créer de la cohésion dans le quartier et favoriser les rencontres et les échanges intergénérationnels.</li></ul>';
							
							document.getElementById("texte_sevres").innerHTML = '';
							document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Public: collégiens, lycéens et adultes.</li><li>Horaires: définis selon un planning pré-établi.</li></ul>';
							
							document.getElementById("texte_squares").innerHTML = '';
							
							document.getElementById("attention").innerHTML = '';
							
							document.getElementById("image_activites").innerHTML = '';
							document.getElementById("image_activites").innerHTML = '<img src="../img/activites/ludotheque.png" alt="ludotheque">';
							
							actif = 'journal';
		
						}
						
						function suivi(){
							
							document.getElementById("parole").style.backgroundColor = "#b4e253";
							document.getElementById("parole").style.color = "#fff";
							document.getElementById("psychologique").style.backgroundColor = "#b4e253";
							document.getElementById("psychologique").style.color = "#fff";
							document.getElementById("journal").style.backgroundColor = "#b4e253";
							document.getElementById("journal").style.color = "#fff";
							document.getElementById("suivi").style.backgroundColor = "#fff";
							document.getElementById("suivi").style.color = "#b4e253";
						
							document.getElementById("texte_activite").innerHTML = '';
							document.getElementById("texte_activite").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Objectifs:</p></h3><ul><li>Aide à la rédaction de documents (CV, lettre de motivation…) et à la réalisation de projets (recherche de stages, jobs d’été, demande de bourse…).</li></ul>';
							
							document.getElementById("texte_sevres").innerHTML = '';
							document.getElementById("texte_sevres").innerHTML = '<h3><img src="../img/activites/fleche.png" alt="fleche"><p>Squares de l\'Avre et des Moulineaux:</p></h3><ul><li>Public: adolescents, jeunes adultes.</li><li>Horaires: ouverture des bureaux de l’Oiseau-Lyre.</li></ul>';
							
							document.getElementById("texte_squares").innerHTML = '';
							
							document.getElementById("attention").innerHTML = '';
							
							document.getElementById("image_activites").innerHTML = '';
							document.getElementById("image_activites").innerHTML = '<img src="../img/activites/ludotheque.png" alt="ludotheque">';
							
							actif = 'suivi';
		
						}
		
		/****************************************animation sociale et accompagnement personnel********************************************/
		
		</script>
		
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	
	</head>
	
	
	<body>
	
	<?php require'header.php'; ?> <!-- html du header -->
	
	<section id="page_activites">
	
		<div id="page_sup">
		
			<h2>liste des activités</h2>
			
			<article id="presentation_activites">
			
				<p><span class="intro">L’Oiseau Lyre dispose de deux Bibliothèques ouvertes à tous les inscrits de notre association :</span></p>
				<br>
				<p><span>La Bibliothèque des squares de l’Avre et des Moulineaux</span>, est organisée en deux salles séparées, la première, précédemment gérée par l’association Culture et Bibliothèque Pour Tous, que nous avons récupérée depuis 2013, est d’une capacité de 8 places assises comprenant un fonds composé de 1200 ouvrages (Romans, romans policiers, biographies et livres traitant de plusieurs sujets) ainsi que des CD et DVD. La deuxième d’une capacité de 12 places assises et d’un coin réservé aux tout-petits, comprenant des livres destinés à la petite enfance, à l’enfance et à la jeunesse (Imagiers, contes, BD, romans, périodiques, documentaires et manuels scolaires) ainsi que des cd et dvd.</p>
				<br>
				<p><span>La Bibliothèque du Pont de Sèvres</span>, quant à elle, est composée d’une vaste salle d’une capacité de 40 place assises y compris un coin pour les tout-petits, comprenant des livres destinés à la petite enfance, à l’enfance et à la jeunesse (Imagiers, contes, BD, romans, périodiques, documentaires et manuels scolaires) ainsi que des cd et dvd.</p>
			
			</article>
			
		</div>
	
		<div id="page_inf">
	
			<article id="liste_activites">
				
				<div id="themes">
				
					<ul id="nav_themes">
				
						<li id="culturelles" onclick="culturelles();">animations culturelles et artistiques</li>				
						<li id="recreatives" onclick="recreatives();">activités récréatives</li>
						<li id="educatives" onclick="educatives();"><span>activités éducatives</span></li>
						<li id="accompagnement" onclick="accompagnement();"><span>animation sociale et accompagnement personnel</span></li>
					
					</ul>
					
				</div>
				
				<div id="partie_activites">
				
					<div id="contenu_activites">
					
						<ul id="nav_activites">
						
							<li id="bibliotheque" onclick="bibliotheque();" onmouseover="activites_hover_on('bibliotheque');" onmouseout="activites_hover_off('bibliotheque');">Bibliothèque</li>
							<li id="theatre" onclick="theatre();" onmouseover="activites_hover_on('theatre');" onmouseout="activites_hover_off('theatre');">Théâtre</li>
							<li id="clown"onclick="clown();" onmouseover="activites_hover_on('clown');" onmouseout="activites_hover_off('clown');">Clown</li>
							<li id="photo" onclick ="photo();" onmouseover="activites_hover_on('photo');" onmouseout="activites_hover_off('photo');">Photo et vidéo</li>
							<li id="ateliers" onclick="ateliers();" onmouseover="activites_hover_on('ateliers');" onmouseout="activites_hover_off('ateliers');">Ateliers créatifs</li>
							<li id="origami" onclick="origami();" onmouseover="activites_hover_on('origami');" onmouseout="activites_hover_off('origami');">Origami</li>
							<li id="contes" onclick="contes();" onmouseover="activites_hover_on('contes');" onmouseout="activites_hover_off('contes');">Contes</li>
						
						</ul>
					
						<div id="texte_image">
						
							<div id="texte_activites">
						
								<div id="texte_activite">
								
									<h3>
										<img src="../img/activites/fleche.png" alt="fleche">
										<p>Objectifs:</p>
									</h3>
									
									<ul>
										<li>Mettre à la disposition des adhérents un fond composé de livres, BD, CD et DVD adulte et jeunesse pour la consultation et l’emprunt.</li>
										<li>Inciter les enfants à la lecture et à la recherche.</li>
									</ul>
									
								</div>
								
								<div id="texte_sevres">
								
									<h3>
										<img src="../img/activites/fleche.png" alt="fleche">
										<p>Antenne du Pont de Sèvres:</p>
									</h3>
									<ul>
										<li>Public: enfants et jeunes.</li>
										<li>Horaires: Horaires d’ouverture de la structure.</li>
									</ul>
								
								</div>
								
								<div id="texte_squares">
								
									<h3>
										<img src="../img/activites/fleche.png" alt="fleche">
										<p>Antenne des Squares de l'Avre et des Moulineaux:</p>
									</h3>
									<ul>
										<li>Public: enfants, jeunes et adultes.</li>
										<li>Horaires: Horaires d’ouverture de la structure.</li>
									</ul>
								
								</div>
								
								<div id="attention">
									
								</div>
								
							</div>
							
							<div id="image_activites">
						
								<img src="../img/activites/bibliotheque.png" alt="bibliotheque">
						
							</div>
						
						</div>
						
					</div>
				
				</div>
			
			</article>
		
		</div>
			
	</section>

	<?php require'footer.html'; ?> <!-- html du footer -->
		
	</body>
	
</html>