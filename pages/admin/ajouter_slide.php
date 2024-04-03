		<?php

		if(isset($_POST['go'])){

			$titre = addslashes($_POST['titre']);
			$url = addslashes($_POST['url']);
			
			if($_FILES['image']['name'] != ''){
			
				$image = $_FILES['image']['name'];
				$temporaire = $_FILES['image']['tmp_name'];
				$chemin = '../../img/header/slider/slide/';
				move_uploaded_file($temporaire, $chemin.$image);
			
			}
			
			require'../connexion.php';
	
			$connexion->exec(" INSERT INTO slider VALUES(NULL, '$titre', '$image', '$url') ");
			
			header('location: slider.php#admin');
			
		}
		
		require'header.php';
		
		?>
		
		<div id="contenu_admin">
		
			<div id="ajouter">
			
				<div id="options">
					
					<div id="option2"><span onclick="reinitialiser();">Réinitialiser</span></div>
					<div id="option1"><a href="slider.php#admin">Retour</a></div>
					
				</div>
				
				<h3 style="width: 181px;">Ajouter un slide</h3>
				
				<script>
		
					function reinitialiser(){
						
						document.getElementById('titre').value = '';
						document.getElementById('url').value = '';
						document.getElementById('image').value = '';

					}
					
					function valider(){
					
						if( document.getElementById('titre').value == '' || document.getElementById('image').value == '' || document.getElementById('url').value == '' ){
						
							alert("Merci de remplir tous les champs");
							return false;
							
						}else{
						
							return true;
						
						}
					}
				
				</script>
				
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" onsubmit="return valider();">
				
					<input type="text" name="titre" id="titre" placeholder="Titre" size="50" maxlength="50">
					<br><br>
						
					Image: <input type="file" name="image" id="image" maxlength="20">
					<br><br>
					
					<input type="text" name="url" id="url" placeholder="Lien du slide" size="50">
					<br><br>
					
					<input type="submit" name="go" value="Ajouter">
			
				</form>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>