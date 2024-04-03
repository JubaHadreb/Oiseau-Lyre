		<?php
		
		require'../connexion.php';

		if(isset($_POST['go'])){

			$id = $_POST['id'];
			$titre = addslashes($_POST['titre']);
			$url = addslashes($_POST['url']);
		
			if($_FILES['image']['name'] != ''){
				
				$ligne = $connexion->query(" SELECT image_slider FROM slider WHERE id_slider='$id' ")->fetch();
				$image = $ligne['image_slider'];
				unlink('../../img/header/slider/slide/'.$image);
			
				$image = $_FILES['image']['name'];
				$temporaire = $_FILES['image']['tmp_name'];
				$chemin = '../../img/header/slider/slide/';
				move_uploaded_file($temporaire, $chemin.$image);
			
			}else{
				
				$image = $_POST['image'];
				
			}
			
			$connexion->exec(" UPDATE slider SET titre_slider='$titre', url_slider='$url', image_slider='$image' WHERE id_slider='$id' ");
			
			header('location: slider.php#admin');
			
		}
		
		$id = $_GET['id'];
		$ligne = $connexion->query(" SELECT * FROM slider WHERE id_slider='$id' ")->fetch();
		
		require'header.php';
		
		?>
		
		<div id="contenu_admin">
		
			<div id="ajouter">
			
				<div id="options">
					
					<div id="option2"><span onclick="reinitialiser();">Réinitialiser</span></div>
					<div id="option1"><a href="slider.php#admin">Retour</a></div>
					
				</div>
				
				<h3 style="width: 169px;">Modifier un slide</h3>

				<script>
		
					function reinitialiser(){
						
						document.getElementById('titre').value = '';
						document.getElementById('url').value = '';
						document.getElementById('image').value = '';

					}
					
					function valider(){
					
						if( document.getElementById('titre').value == '' || document.getElementById('url').value == '' ){
						
							alert("Merci de remplir tous les champs");
							return false;
							
						}else{
						
							return true;
						
						}
					}
				
				</script>
				
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" onsubmit="return valider();">
				
					<input type="hidden" name="id" value="<?php echo $ligne['id_slider']; ?>">
					
					<input type="text" name="titre" id="titre" placeholder="Titre" size="50" maxlength="50" value="<?php echo stripslashes($ligne['titre_slider']); ?>">
					<br><br>
					
					Image: <input type="file" name="image" id="image" size="20">
					<input type="hidden" name="image" value="<?php echo $ligne['image_slider']; ?>">
					<br>
					<img src="../../img/header/slider/slide/<?php echo $ligne['image_slider']; ?>" height="110">
					<br><br>
					
					<input type="text" name="url" id="url" placeholder="Lien du slide" size="50" value="<?php echo stripslashes($ligne['url_slider']); ?>">
					<br><br>
					
					<input type="submit" name="go" value="Modifier">
			
				</form>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>