		<?php
		
		require'../connexion.php';

		if(isset($_POST['go'])){

			$id = $_POST['id'];
			$titre = addslashes($_POST['titre']);
			$url = addslashes($_POST['url']);
			
			$image = substr($url, -11);
			$image = 'https://i.ytimg.com/vi/'.$image.'/mqdefault.jpg';
			
			$connexion->exec(" UPDATE videos SET titre_videos='$titre', url_videos='$url', image_videos='$image' WHERE id_videos='$id' ");
			
			header('location: videos.php#admin');
			
		}
		
		$id = $_GET['id'];
		$ligne = $connexion->query(" SELECT * FROM videos WHERE id_videos='$id' ")->fetch();
		
		require'header.php';
		
		?>
		
		<div id="contenu_admin">
		
			<div id="ajouter">
			
				<div id="options">
					
					<div id="option2"><span onclick="reinitialiser();">Réinitialiser</span></div>
					<div id="option1"><a href="videos.php#admin">Retour</a></div>
					
				</div>
				
				<h3 style="width: 188px;">Modifier une vidéo</h3>

				<script>
		
					function reinitialiser(){
						
						document.getElementById('titre').value = '';
						document.getElementById('url').value = '';

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
				
					<input type="hidden" name="id" value="<?php echo $ligne['id_videos']; ?>">
					
					<input type="text" name="titre" id="titre" placeholder="Titre" size="50" maxlength="100" value="<?php echo stripslashes($ligne['titre_videos']); ?>">
					<br><br>
					
					<input type="text" name="url" id="url" placeholder="Lien de la vidéo" size="43" maxlength="43" value="<?php echo stripslashes($ligne['url_videos']); ?>">
					<br><br>
					
					<input type="submit" name="go" value="Modifier">
			
				</form>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>