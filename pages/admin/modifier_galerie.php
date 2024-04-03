		<?php
		
		require'../connexion.php';

		if(isset($_POST['go'])){

			$id_galerie = $_POST['id_galerie'];
			$titre = addslashes($_POST['titre']);
			$connexion->exec(" UPDATE galeries SET titre_galerie='$titre' WHERE id_galerie='$id_galerie' ");
			
			if($_FILES['image']['name'][0] != ''){
				
				$taille_image = count($_FILES['image']['name']);
				
				for($i = 0; $i<$taille_image; $i++){
					
					$image = $_FILES['image']['name'][$i];
					$temporaire = $_FILES['image']['tmp_name'][$i];
					$chemin = '../../img/galeries/photos/source/';
					$chemin_vignette = '../../img/galeries/photos/vignette/';
					move_uploaded_file($temporaire, $chemin.$image);
					
					$image_source = imagecreatefromjpeg($chemin.$image);
					list($largeur, $hauteur) = getimagesize($chemin.$image);
					
					//portrait ou paysage??
			
					if( $largeur > $hauteur ){//mode paysage
						
					$largeur2 = 152;
					$hauteur2 = 101;
					
					}else{//mode portrait
						
					$largeur2 = 101;
					$hauteur2 = 152;
					
					}
					
					$image_temporaire = imagecreatetruecolor($largeur2, $hauteur2);
					imagecopyresampled($image_temporaire, $image_source, 0, 0, 0, 0, $largeur2, $hauteur2, $largeur, $hauteur);
					$chemin = '../../img/galeries/photos/vignette/';
					imagejpeg($image_temporaire, $chemin.$image, 60);
					
					$connexion->exec(" INSERT INTO photos VALUES(NULL, '$id_galerie', '$image', '$image') ");
					
				}
				
			}
			
			if(isset($_POST['supprimer'])){
				
				$taille_supprimer = count($_POST['supprimer']);
				
				for($j = 0; $j<$taille_supprimer; $j++){
				
					$id_photo = $_POST['supprimer'][$j];
					$ligne = $connexion->query(" SELECT image_photo, image_vignette FROM photos WHERE id_photo='$id_photo' ")->fetch();
					$source = $ligne['image_photo'];
					unlink('../../img/galeries/photos/source/'.$source);
					$vignette = $ligne['image_vignette'];
					unlink('../../img/galeries/photos/vignette/'.$vignette);
					
					$connexion->exec(" DELETE FROM photos WHERE id_photo='$id_photo' ");
				
				}
				
			}
			
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
				
				<h3 style="width: 203px;">Modifier une galerie</h3>

				<script>
		
					function reinitialiser(){
						
						document.getElementById('titre').value = '';

					}
					
					function valider(){
					
						if( document.getElementById('titre').value == '' ){
						
							alert("Merci de remplir tous les champs");
							return false;
							
						}else{
						
							return true;
						
						}
					}
				
				</script>
				
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" onsubmit="return valider();">
					
					<?php
					
					$id = $_GET['id'];
					
					$sql = $connexion->query(" SELECT * FROM galeries WHERE id_galerie='$id' ");
					$ligne = $sql->fetch();
				
					?>
					
					<input type="hidden" name="id_galerie" value="<?php echo $ligne['id_galerie']; ?>">
					
					<input type="text" name="titre" id="titre" placeholder="Nom de la galerie" size="50" maxlength="50" value="<?php echo stripslashes($ligne['titre_galerie']); ?>">
					<br><br>
					Images: <input type="file" name="image[]" id="image" multiple>
					<br><br>
					<span>Sélectionner les images à supprimer:</span>
					<br>
					<ul class="mCustomScrollbar" data-mcs-theme="dark">
					<?php
					
					$sql = $connexion->query(" SELECT * FROM photos WHERE galerie_id='$id' ORDER BY id_photo DESC ");
					
					while( $ligne = $sql->fetch() ){
						
						echo '<li class="vignette">';
						echo '<img src="../../img/galeries/photos/vignette/'.$ligne['image_vignette'].'" width="152px" height="101px">';
						echo '<input type="checkbox" class="checkbox" name="supprimer[]" value="'.$ligne['id_photo'].'">';
						echo '</li>';
					
					}
				
					?>
					</ul>
					<br>
					
					<input type="submit" id="submit" name="go" value="Modifier">
			
				</form>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>