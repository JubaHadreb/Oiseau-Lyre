<?php

session_start();

require'connexion.php';

?>

<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Galerie photos - Association Oiseau-Lyre</title>
		
		<link rel="stylesheet" href="../css/feuille1.css">
		<link rel="stylesheet" href="../css/feuille6.css">
		<link rel="stylesheet" href="../css/responsive1.css">
		<link rel="icon" type="image/png" href="../img/favicon.png" />
		
		<script type="text/javascript" src="shadowbox/shadowbox.js"></script>
		<link rel="stylesheet" href="shadowbox/shadowbox.css">
		
		<script>
		 
		window.onload = function(){
		 
			Shadowbox.init();
		 
		};
		 
		</script>
		
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	
	</head>
	
	
	<body>
	
	<?php require'header.php'; ?> <!-- html du header -->
	
	<section id="page_galerie">
		
		<div id="page_sup">
		
			<h2>Photos</h2>
			
			<div id="dossiers">
			
				<?php 	
				
					if(isset($_GET['p'])){//a-t-on reçu dans l'URL la variable page
						
						$page = $_GET['p'];
						
					}else{//on n'a rien reçu dans l'URL
					
						$page = 0; //pour la premiere page
					
					}
						
					$quantite = 4;//nombre de portrait à afficher
					
					$debut = $page * $quantite;
					
					$sql = $connexion->prepare(' SELECT * FROM galeries ');
					
					$sql->execute();
					
					$nombre = $sql->rowCount();
					
					if(isset($_GET['d'])){
					
						$galerie_id = $_GET['d'];
					
					}else{
						
						$ligne = $connexion->query(" SELECT id_galerie FROM galeries ORDER BY id_galerie DESC LIMIT 0,1 ")->fetch();
						$galerie_id = $ligne['id_galerie'];
						
					}
					
					if(isset($_GET['pp'])){
						
						$premiere_photo = $_GET['pp'];
						
					}else{
					
						$premiere_photo = 0;
					
					}
						
					$nombre_photo = 8;
					
					$page_photo = $premiere_photo * $nombre_photo;
					
					$sql = $connexion->prepare(" SELECT * FROM photos WHERE galerie_id='$galerie_id' ");
					
					$sql->execute();
					
					$nombre_vignette = $sql->rowCount();
					
					if($page > 0){//ce n'est pas la premiére page
					
						$precedente = $page - 1;
						//nlle var 'precedente' pour preserver la variable page
					
						echo '<a class="fleche" href="'.$_SERVER['PHP_SELF'].'?p='.$precedente.'&d='.$galerie_id.'&pp='.$premiere_photo.'#dossiers">';
						echo '<img src="../img/galeries/fleche_gauche.gif" alt="fleche gauche">';
						echo '</a>';
						
					}else{
						
						echo '<a class="fleche">';
						echo '<img src="../img/galeries/fleche_gauche.gif" alt="fleche gauche">';
						echo '</a>';
						
					}
					
				?>
				
				<ul>
				
				<?php 
			
					$sql = $connexion->query(' SELECT * FROM galeries ORDER BY id_galerie DESC LIMIT '.$debut.', '.$quantite);
					
					
					$i = 0;
					
					while( $ligne = $sql->fetch() ){
					
						echo '<li id="'.$ligne['id_galerie'].'" class="dossier_actif">';
						echo '<a href="'.$_SERVER['PHP_SELF'].'?p='.$page.'&d='.$ligne['id_galerie'].'#dossiers">';
						echo '<img src="../img/galeries/dossier.gif" alt="icon _dossier">';
						echo '<p>'.$ligne['titre_galerie'].'</p>';
						echo '</a>';
						echo '</li>';
						
						$i++;
						
					}
	
					for( $i; $i<4; $i++ ){
							
						echo '<li class="dossier_inactif">';
						echo '<img src="../img/galeries/dossier.gif" alt="icon _dossier">';
						echo '</li>';
							
					}
					
				?>
				
				<script>
				
					$dossier = '<?php echo $galerie_id; ?>';
					
					if(document.getElementById($dossier)){
						
							document.getElementById($dossier).style.opacity = "1";
							
					}
					
				</script>
					
				</ul>
				
				<?php
				
					if( $debut + $quantite < $nombre ){
					//il reste des voitures à afficher
					
						$suivante = $page + 1;
						//j'ai besoin d'une nouvelle variable suivante (page suivante)
						//elle vaut $page + 113
						
						echo '<a class="fleche" href="'.$_SERVER['PHP_SELF'].'?p='.$suivante.'&d='.$galerie_id.'&pp='.$premiere_photo.'#dossiers">';
						echo '<img src="../img/galeries/fleche_droite.gif" alt="fleche droite">';
						echo '</a>';
						
					}else{//pas de page suivante
					
						echo '<a class="fleche">';
						echo '<img src="../img/galeries/fleche_droite.gif" alt="fleche droite">';
						echo '</a>';
					
					}
				
				?>
				
			</div>
		
		</div>
		
		<div id="page_inf">
		
			<div id="lightbox">
			
				<ul id="photos">
				
				<?php 
							
					$sql = $connexion->query(" SELECT * FROM photos, galeries WHERE galerie_id='$galerie_id' AND galerie_id=id_galerie ORDER BY id_photo DESC LIMIT ".$page_photo.", ".$nombre_photo);
					
					$i = 0;
					
					while( $ligne = $sql->fetch() ){
					
						echo '<li>';
						echo '<a href="../img/galeries/photos/source/'.$ligne['image_photo'].'" rel="shadowbox['.$ligne['galerie_id'].']">';
						echo '<img src="../img/galeries/photos/vignette/'.$ligne['image_vignette'].'" width="152px" height="101px" alt="'.$ligne['image_vignette'].'">';
						echo '</a>';
						echo '</li>';
						
						$i++;
						
					}
	
					for( $i; $i<8; $i++ ){
							
						echo '<li class="image_inactif">';
						echo '</li>';
							
					}
					
				?>
					
				</ul>
				
				<ul id="nav_photos">
				
				<?php
					
				//série de numéros cliquables qui dépendent du nombre total
				//et du nombre d'articles affichées par page
				
				$j = 0;
				
					if($nombre_vignette > $nombre_photo){//on a besoin d'écrire ces numéros
					
						while( $j < ($nombre_vignette / $nombre_photo) ){//tant qu'il y a des séries
						
							if($j != $premiere_photo){// est ce que le numéro est cliquables
							
								echo '<li><a href="'.$_SERVER['PHP_SELF'].'?p='.$page.'&d='.$galerie_id.'&pp='.$j.'#dossiers"><img src="../img/galeries/puce_p.png" alt=""></a></li>';
							
							}else{//le numéro n'est pas cliquable
							
								echo '<li><img src="../img/galeries/puce_g.png" alt=""></li>';
							
							}
							
						$j++;
						
						}
					
					}
					
				?>
			
				</ul>
			
			</div>
		
		</div>
		
			
	</section>

	<?php require'footer.html'; ?> <!-- html du footer -->
		
	</body>
	
</html>