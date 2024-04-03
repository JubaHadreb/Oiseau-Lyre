<?php

session_start();

require'connexion.php';

?>

<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Qui sommes nous? - Association Oiseau-Lyre</title>
		
		<link rel="stylesheet" href="../css/feuille1.css">
		<link rel="stylesheet" href="../css/feuille7.css">
		<link rel="stylesheet" href="../css/responsive1.css">
		<link rel="icon" type="image/png" href="../img/favicon.png" />
		
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	
	</head>
	
	
	<body>
	
	<?php require'header.php'; ?> <!-- html du header -->
	
	<section id="page_association">
	
		<div id="page_sup">
		
			<h2>historique</h2>
			
			<article id="presentation_association">
			
				<div id="parti_sup">
				
					<div id="paragraphe1">
					
						<p><span class="intro">L’Oiseau-Lyre est une association régie par la loi de 1901 à but non lucratif et d’intérêt général. Son objet, tel qu’il résulte de l’article 2 de ses statuts, a été modifié par l’Assemblée Générale du vendredi 30 Janvier 2015. Au service de ses bénéficiaires, l’association a pour but d’assurer un service culturel de proximité et d’intérêt général, de concourir à l’épanouissement global tant au niveau individuel que collectif ainsi que de contribuer à la réussite scolaire, professionnelle et personnelle de chacun.</span></p>
						<p>Sous l’impulsion de Madame Anne De La Loge, responsable du réseau Bibliothèque Pour Tous de Boulogne-Billancourt, des bénévoles ont eu l’idée de créer  une bibliothèque enfance-jeunesse dans le quartier du Pont de Sèvres portant le nom de Bibliothèque de l’Oiseau Lyre.</p>
						<p>Le mardi 21 mai 1985 la Bibliothèque de l’Oiseau Lyre a ouvert ses portes grâce au soutien du Centre d’Animation de Boulogne(CAB), qui a mis à disposition le local municipal, sis 1732 allée du Vieux Pont de Sèvres et celui de Madame MARCHAND, responsable de la bibliothèque municipale, qui a offert un fonds important de livres, grâce aussi aux dons de nombreux Boulonnais. Elle fut inaugurée officiellement le 12 octobre de la même année, à l’issue d’un spectacle de marionnettes donné par la Compagnie de la Licorne.</p>
					
					</div>
					
					<div id="anne">
					
						<img src="../img/association/creation.png" alt="Anne DE LA LOGE" width="335" height="335">
						
					</div>
					
				</div>
				
				<div id="parti_inf">
				
					<div id="presentation_video">

                        <iframe width="400" height="225" src="https://www.youtube.com/embed/j-9LUNMocTU" frameborder="0" allowfullscreen></iframe>
						
					</div>
					
					<div id="paragraphe2">
						
							<p>Elle s’est dotée de la personne morale en se constituant en association loi 1901, le 25 janvier 1996, afin de pouvoir demander des subventions et rémunérer elle-même ses salariés.</p>
							<p>Déclarée à la sous-préfecture de Boulogne-Billancourt le 1er février 1996 par Madame Anne HAAS, la première présidente de l’association, sous le numéro 12012019, elle a été publiée au journal officiel le 28 février de la même année.</p>
							<p>En 2000, une antenne dans le quartier des « Squares de l’Avre et des Moulineaux » a été ouverte.</p>
					
					</div>
					
				</div>
			
			</article>
			
		</div>
	
		<div id="page_inf">
	
			<article id="liste_statuts">
			
				<ul id="nav_statuts">
			
					<li id="benevoles" onclick="benevoles();"><a href="<?php $_SERVER['PHP_SELF']; ?>?status=benevoles#portraits">les bénévoles</a></li>
					<li id="conseil" onclick="conseil();"><a href="<?php $_SERVER['PHP_SELF']; ?>?status=conseil#portraits">le conseil</a></li>
					<li id="bureau" onclick="bureau();"><a href="<?php $_SERVER['PHP_SELF']; ?>?status=bureau#portraits">le bureau</a></li>
					<li id="salaries" onclick="salaries();"><a href="<?php $_SERVER['PHP_SELF']; ?>?status=salaries#portraits">les salariés</a></li>
				
				</ul>
				
				<div id="contenu_statuts">
				
					<div id="portraits">
					
						<?php
						
						if(isset($_GET['status'])){
							
							$status = $_GET['status'];
							
							if($status == 'benevoles'){
						
								$sql = $connexion->prepare(' SELECT * FROM benevoles ');
							
							}else if($status == 'conseil'){
								
								$sql = $connexion->prepare(' SELECT * FROM conseil ');
							
							}else if($status == 'bureau'){
								
								$sql = $connexion->prepare(' SELECT * FROM bureau ');
							
							}else if($status == 'salaries'){
								
								$sql = $connexion->prepare(' SELECT * FROM salaries ');
							
							}
							
						}else{
							
							$sql = $connexion->prepare(' SELECT * FROM benevoles ');
							
						}
						
						$sql->execute();
						$nombre = $sql->rowCount();
						
						if(isset($_GET['pp'])){
						
							$premiere_photo = $_GET['pp'];
							
						}else{
						
							$premiere_photo = 0;
						
						}
							
						$nombre_photo = 10;
						
						$page_photo = $premiere_photo * $nombre_photo;
						
						
						?>
				
						<ul id="ul_portraits">
						
						<?php 
						
						if(isset($_GET['status'])){
							
							if($status == 'benevoles'){
			
								$sql = $connexion->query(" SELECT * FROM benevoles ORDER BY id_benevole ASC LIMIT ".$page_photo.", ".$nombre_photo);
								
								$i = 0;
								
								while( $ligne = $sql->fetch() ){
								
									echo '<li class="portrait">';
									echo '<img src="../img/association/portraits/benevoles/'.$ligne['image_benevole'].'" alt="Portrait de '.$ligne['prenom_benevole'].' '.$ligne['nom_benevole'].'">';
									echo '<img class="contour" src="../img/association/contour_portrait.png" alt="Contour de la photo">';
									echo '<p class="shadow">'.$ligne['prenom_benevole'].' '.$ligne['nom_benevole'].'</p>';
									echo '</li>';
									
									$i++;
								
								}
								
								for( $i; $i<10; $i++ ){
								
									echo '<li class="portrait">';
									echo '<img src="../img/association/portraits/default.gif" alt="Image du portrait par défaut">';
									echo '<img class="contour" src="../img/association/contour_portrait.png" alt="Contour de la photo">';
									echo '</li>';
										
								}
							
							}else if($status == 'conseil'){
								
								$sql = $connexion->query(" SELECT * FROM conseil ORDER BY id_conseil ASC LIMIT ".$page_photo.", ".$nombre_photo);
								
								$i = 0;
								
								while( $ligne = $sql->fetch() ){
								
									echo '<li class="portrait">';
									echo '<img src="../img/association/portraits/conseil/'.$ligne['image_conseil'].'" alt="Portrait de '.$ligne['prenom_conseil'].' '.$ligne['nom_conseil'].'">';
									echo '<img class="contour" src="../img/association/contour_portrait.png" alt="Contour de la photo">';
									echo '<p class="shadow">'.$ligne['prenom_conseil'].' '.$ligne['nom_conseil'].'</p>';
									echo '</li>';
									
									$i++;
								
								}
								
								for( $i; $i<10; $i++ ){
								
									echo '<li class="portrait">';
									echo '<img src="../img/association/portraits/default.gif" alt="Image du portrait par défaut">';
									echo '<img class="contour" src="../img/association/contour_portrait.png" alt="Contour de la photo">';
									echo '</li>';
										
								}
								
							?>
								
								<script>
								
									document.getElementById("benevoles").style.backgroundColor = "#46b5df";
									document.getElementById("conseil").style.backgroundColor = "#84d5f4";
								
								</script>
								
							<?php 
								
							}else if($status == 'bureau'){
								
								$sql = $connexion->query(' SELECT * FROM bureau ORDER BY id_bureau ASC ');
								
								while( $ligne = $sql->fetch() ){
								
									echo '<li class="portrait">';
									echo '<img src="../img/association/portraits/bureau/'.$ligne['image_bureau'].'" alt="Portrait de '.$ligne['prenom_bureau'].' '.$ligne['nom_bureau'].'">';
									echo '<img class="contour" src="../img/association/contour_portrait.png" alt="Contour de la photo">';
									echo '<p class="shadow">'.$ligne['prenom_bureau'].' '.$ligne['nom_bureau'].'</p>';
									echo '<p class="statut">'.$ligne['statut_bureau'].'</p>';
									echo '</li>';
								
								}
								
							?>
								
								<script>
								
									document.getElementById("benevoles").style.backgroundColor = "#46b5df";
									document.getElementById("bureau").style.backgroundColor = "#84d5f4";
									
									document.getElementById("ul_portraits").style.width = "650px";
									document.getElementById("ul_portraits").getElementsByTagName('li')[3].style.margin = "5px 0 0 0";
								
								</script>
								
							<?php 
								
							}else if($status == 'salaries'){
								
								$sql = $connexion->query(" SELECT * FROM salaries ORDER BY id_salarie ASC LIMIT ".$page_photo.", ".$nombre_photo);
								
								$i = 0;
								
								while( $ligne = $sql->fetch() ){
								
									echo '<li class="portrait">';
									echo '<img src="../img/equipe/portraits/'.$ligne['image_salarie'].'" alt="Portrait de '.$ligne['prenom_salarie'].' '.$ligne['nom_salarie'].'">';
									echo '<img class="contour" src="../img/association/contour_portrait.png" alt="Contour de la photo">';
									echo '<p class="shadow">'.$ligne['prenom_salarie'].' '.$ligne['nom_salarie'].'</p>';
									echo '</li>';
									
									$i++;
								
								}
								
								for( $i; $i<10; $i++ ){
								
									echo '<li class="portrait">';
									echo '<img src="../img/association/portraits/default.gif" alt="Image du portrait par défaut">';
									echo '<img class="contour" src="../img/association/contour_portrait.png" alt="Contour de la photo">';
									echo '</li>';
										
								}
							
							?>
								
								<script>
								
									document.getElementById("benevoles").style.backgroundColor = "#46b5df";
									document.getElementById("salaries").style.backgroundColor = "#84d5f4";
								
								</script>
								
							<?php 
							
							}
							
						}else{
							
							$sql = $connexion->query(" SELECT * FROM benevoles ORDER BY id_benevole ASC LIMIT ".$page_photo.", ".$nombre_photo);
								
								$i = 0;
								
								while( $ligne = $sql->fetch() ){
								
									echo '<li class="portrait">';
									echo '<img src="../img/association/portraits/benevoles/'.$ligne['image_benevole'].'" alt="Portrait de '.$ligne['prenom_benevole'].' '.$ligne['nom_benevole'].'">';
									echo '<img class="contour" src="../img/association/contour_portrait.png" alt="Contour de la photo">';
									echo '<p class="shadow">'.$ligne['prenom_benevole'].' '.$ligne['nom_benevole'].'</p>';
									echo '</li>';
									
									$i++;
								
								}
								
								for( $i; $i<10; $i++ ){
								
									echo '<li class="portrait">';
									echo '<img src="../img/association/portraits/default.gif" alt="Image du portrait par défaut">';
									echo '<img class="contour" src="../img/association/contour_portrait.png" alt="Contour de la photo">';
									echo '</li>';
										
								}
							
						}
							
						?>
						
						</ul>
						
					</div>
					
					<div id="nav_portraits">					
						
						<ul>
						
						<?php
						
						if(isset($_GET['status'])){
							
							if($status == 'benevoles' || $status == 'salaries'){
						
								$j = 0;
							
								if($nombre > $nombre_photo){//on a besoin d'écrire ces numéros
								
									while( $j < ($nombre / $nombre_photo) ){//tant qu'il y a des séries
									
										if($j != $premiere_photo){// est ce que le numéro est cliquables
										
											echo '<li><a href="'.$_SERVER['PHP_SELF'].'?status='.$status.'&pp='.$j.'#portraits"><img src="../img/association/puce_p.png" alt=""></a></li>';
										
										}else{//le numéro n'est pas cliquable
										
											echo '<li><img src="../img/association/puce_g.png" alt=""></li>';
										
										}
										
									$j++;
									
									}
								
								}
								
							}
							
						}else{
							
								$j = 0;
							
								if($nombre > $nombre_photo){//on a besoin d'écrire ces numéros
								
									while( $j < ($nombre / $nombre_photo) ){//tant qu'il y a des séries
									
										if($j != $premiere_photo){// est ce que le numéro est cliquables
										
											echo '<li><a href="'.$_SERVER['PHP_SELF'].'?pp='.$j.'#portraits"><img src="../img/association/puce_p.png" alt=""></a></li>';
										
										}else{//le numéro n'est pas cliquable
										
											echo '<li><img src="../img/association/puce_g.png" alt=""></li>';
										
										}
										
									$j++;
									
									}
								
								}
							
						}
							
						?>
						
						</ul>
					
					</div>
				
				</div>
			
			</article>
		
		</div>
			
	</section>

	<?php require'footer.html'; ?> <!-- html du footer -->
		
	</body>
	
</html>