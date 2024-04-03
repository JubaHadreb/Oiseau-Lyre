<?php

session_start();

require'connexion.php';

?>

<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Présentation de l'équipe - Association Oiseau-Lyre</title>
		
		<link rel="stylesheet" href="../css/feuille1.css">
		<link rel="stylesheet" href="../css/feuille3.css">
		<link rel="stylesheet" href="../css/responsive1.css">
		<link rel="icon" type="image/png" href="../img/favicon.png" />
		
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<script>
			
			function contour2(cela){
			
				nom = document.getElementById(cela); 
				nom.src = "../img/equipe/contour_equipe2.png";
			
			}
			
			function contour1(cela){
			
				nom = document.getElementById(cela); 
				nom.src = "../img/equipe/contour_equipe1.png";
			
			}
			
		</script>
	
	</head>
	
	
	<body>
	
	<?php require'header.php'; ?> <!-- html du header -->
	
	<section id="page_equipe">
		
		<div id="page_sup">
		
			<h2>l'équipe</h2>
			
			<div id="portrait">
			
				<?php 	
				
					if(isset($_GET['p'])){//a-t-on reçu dans l'URL la variable page
						
						$page = $_GET['p'];
						
					}else{//on n'a rien reçu dans l'URL
					
						$page = 0; //pour la premiere page
					
					}
						
					$quantite = 4;//nombre de portrait à afficher
					
					$debut = $page * $quantite;
					
					$sql = $connexion->prepare(' SELECT * FROM salaries ');
					//cette requete permet de compter les salaries dans la table
					
					$sql->execute();
					
					$nombre = $sql->rowCount();//on compte les portraits dans la table, total des portraits
					
					if(isset($_GET['s'])){//a-t-on reçu dans l'URL la variable salarié
						
						$id = $_GET['s'];
						
					}else{
					
						$id = 2;
					
					}
					
					if($page > 0){//ce n'est pas la premiére page
					
						$precedente = $page - 1;
						//nlle var 'precedente' pour preserver la variable page
					
						echo'<a class="fleche" href="'.$_SERVER['PHP_SELF'].'?p='.$precedente.'&s='.$id.'#portrait">';
						echo'<img src="../img/equipe/fleche_gauche.gif" alt="fleche gauche">';
						echo'</a>';
						
					}else{
						
						echo'<a class="fleche">';
						echo'<img src="../img/equipe/fleche_gauche.gif" alt="fleche gauche">';
						echo'</a>';
						
					}
					
				?>
				
				<ul>
				
				<?php 
			
					$sql = $connexion->query(' SELECT * FROM salaries ORDER BY id_salarie ASC LIMIT '.$debut.', '.$quantite);
					
					//SELECT * FROM salaries LIMIT 0, 4
					//selectionne les champs de la table salaries donne toi une LIMITE commence à 0 et donne en 4
					
					$i = 0;
					
					while( $ligne = $sql->fetch() ){
					
						echo '<li class="salarier">';
						echo '<a href="'.$_SERVER['PHP_SELF'].'?p='.$page.'&s='.$ligne['id_salarie'].'#portrait">';
						echo '<img src="../img/equipe/portraits/'.$ligne['image_salarie'].'" alt="'.$ligne['prenom_salarie'].' '.$ligne['nom_salarie'].'">';
						echo '<img class="contour1" id="image'.$ligne['id_salarie'].'" onmouseover="contour2(\'image'.$ligne['id_salarie'].'\');" onmouseout="contour1(\'image'.$ligne['id_salarie'].'\');" src="../img/equipe/contour_equipe1.png" alt="Contour du portrait">';
						echo '</a>';
						echo '</li>';
						
						$i++;
						
					}
	
					for( $i; $i<4; $i++ ){
							
						echo '<li class="salarier" style="cursor: auto;">';
						echo '<img src="../img/equipe/portraits/default.gif" alt="Image du portrait par défaut">';
						echo '<img class="contour1" src="../img/equipe/contour_equipe1.png" alt="Contour du portrait">';
						echo '</li>';
							
					}
					
				?>
					
				</ul>
				
				<?php
				
					if( $debut + $quantite < $nombre ){
					//il reste des salaries à afficher
					
						$suivante = $page + 1;
						//j'ai besoin d'une nouvelle variable suivante (page suivante)
						//elle vaut $page + 113
						
						echo'<a class="fleche" href="'.$_SERVER['PHP_SELF'].'?p='.$suivante.'&s='.$id.'#portrait">';
						echo'<img src="../img/equipe/fleche_droite.gif" alt="fleche droite">';
						echo'</a>';
						
					}else{//pas de page suivante
					
						echo'<a class="fleche">';
						echo'<img src="../img/equipe/fleche_droite.gif" alt="fleche droite">';
						echo'</a>';
					
					}
				
				?>
				
			</div>
		
		</div>
		
		<div id="page_inf">
		
			<div id="presentation">
			
				<div id="photo">
				
				<?php 	
				
					$sql = $connexion->query(" SELECT * FROM salaries WHERE id_salarie='$id' ");
					$ligne = $sql->fetch();
				
					if(isset($_GET['s'])){//a-t-on reçu dans l'URL la variable salarié
						
						$id = $_GET['s'];
						
						echo '<img src="../img/equipe/portraits/'.$ligne['image_salarie'].'" alt="'.$ligne['prenom_salarie'].' '.$ligne['nom_salarie'].'">';
						echo '<img class="contour3" src="../img/equipe/contour_equipe3.png" alt="Contour de la photo">';
						
					}else{
					
						echo '<img src="../img/equipe/portraits/'.$ligne['image_salarie'].'" alt="'.$ligne['prenom_salarie'].' '.$ligne['nom_salarie'].'">';
						echo '<img class="contour3" src="../img/equipe/contour_equipe3.png" alt="Contour de la photo">';
					
					}
					
				?>
				
				</div>
				
				<div id="informations">
				
				<?php 	
				
					if(isset($_GET['s'])){//a-t-on reçu dans l'URL la variable salarié
				
						echo '<h1>'.$ligne['prenom_salarie'].' '.$ligne['nom_salarie'].' - '.$ligne['poste_salarie'].'</h1>';
						echo '<p>'.$ligne['presentation_salarie'].'</p>';
						
					}else{
						
						echo '<h1>'.$ligne['prenom_salarie'].' '.$ligne['nom_salarie'].' - '.$ligne['poste_salarie'].'</h1>';
						echo '<p>'.$ligne['presentation_salarie'].'</p>';
					
					}
					
				?>
				
				</div>
			
			</div>
		
		</div>
		
			
	</section>

	<?php require'footer.html'; ?> <!-- html du footer -->
		
	</body>
	
</html>