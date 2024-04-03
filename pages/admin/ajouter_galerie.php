		<?php

		if(isset($_POST['go'])){
			
			require'../connexion.php';

			$titre = addslashes($_POST['titre']);
			$connexion->exec(" INSERT INTO galeries VALUES(NULL, '$titre') ");
			$sql = $connexion->query(" SELECT id_galerie FROM galeries WHERE titre_galerie='$titre' ");
			$ligne = $sql->fetch();
			$galerie_id = $ligne['id_galerie'];
			
			$taille = count($_FILES['image']['name']);
			for($i = 0; $i<$taille; $i++){
				
				$image = $_FILES['image']['name'][$i];
				$temporaire = $_FILES['image']['tmp_name'][$i];
				$chemin = '../../img/galeries/photos/source/';
				$chemin_vignette = '../../img/galeries/photos/vignette/';
				move_uploaded_file($temporaire, $chemin.$image);
				
				$image_source = imagecreatefromjpeg($chemin.$image);
				list($largeur, $hauteur) = getimagesize($chemin.$image);
				
				//portrait ou paysage??
		
				if( $largeur > $hauteur ){//mode paysage
				
					/*$ratio = $largeur / $hauteur;
					
					if($ratio > 1.33){
					
						$largeur = $hauteur * 1.33;
					
					}*/
					
				$largeur2 = 152;
				$hauteur2 = 101;
				
				}else{//mode portrait
				
					/*$ratio = $largeur / $hauteur;
					
					if($ratio > 1.33){
					
						$hauteur = $largeur * 1.33;
					
					}*/
					
				$largeur2 = 101;
				$hauteur2 = 152;
				
				}
				
				$image_temporaire = imagecreatetruecolor($largeur2, $hauteur2);
				imagecopyresampled($image_temporaire, $image_source, 0, 0, 0, 0, $largeur2, $hauteur2, $largeur, $hauteur);
				$chemin = '../../img/galeries/photos/vignette/';
				imagejpeg($image_temporaire, $chemin.$image, 60);
				
				
				$connexion->exec(" INSERT INTO photos VALUES(NULL, '$galerie_id', '$image', '$image') ");
				
			}
			
			/*require'../connexion.php';
			
			function traitement_image(){
			
				if($_FILES['image']['name'] != ''){
				
					$image = $_FILES['image']['name'];
					$temporaire = $_FILES['image']['tmp_name'];
					$chemin = '../../img/header/slider/slide/';
					move_uploaded_file($temporaire, $chemin.$image);
				
				}
				
				
			
			}
			
			array_map("traitement_image", $images);*/
			
			header('location: galeries.php#admin');
			
		}
		
		require'header.php';
		
		?>
		
		<div id="contenu_admin">
		
			<div id="ajouter">
			
				<div id="options">
					
					<div id="option2"><span onclick="reinitialiser();">Réinitialiser</span></div>
					<div id="option1"><a href="galeries.php#admin">Retour</a></div>
					
				</div>
				
				<h3 style="width: 196px;">Ajouter une galerie</h3>
				
				<script>
		
					function reinitialiser(){
						
						document.getElementById('titre').value = '';
						document.getElementById('image').value = '';

					}
					
					function valider(){
					
						if( document.getElementById('titre').value == '' || document.getElementById('image').value == '' ){
						
							alert("Merci de remplir tous les champs");
							return false;
							
						}else{
						
							return true;
						
						}
					}
				
				</script>
				
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" onsubmit="return valider();">
				
					<input type="text" name="titre" id="titre" placeholder="Nom de la galerie" size="50" maxlength="50">
					<br><br>
						
					Images: <input type="file" name="image[]" id="image" multiple>
					<br><br>
					
					<input type="submit" name="go" value="Ajouter">
			
				</form>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>