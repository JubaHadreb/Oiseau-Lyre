		<?php

		if(isset($_POST['go'])){

			$titre = addslashes($_POST['titre']);
			$url = addslashes($_POST['url']);
			
			$image = substr($url, -11);
			$image = 'https://i.ytimg.com/vi/'.$image.'/mqdefault.jpg';
			
			require'../connexion.php';
	
			$connexion->exec(" INSERT INTO videos VALUES(NULL, '$titre', '$url', '$image') ");
			
			header('location: videos.php#admin');
			
		}
		
		require'header.php';
		
		?>
		
		<div id="contenu_admin">
		
			<div id="ajouter">
			
				<div id="options">
					
					<div id="option2"><span onclick="reinitialiser();">Réinitialiser</span></div>
					<div id="option1"><a href="videos.php#admin">Retour</a></div>
					
				</div>
				
				<h3 style="width: 181px;">Ajouter une vidéo</h3>
				
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
				
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return valider();">
				
					<input type="text" name="titre" id="titre" placeholder="Titre" size="50" maxlength="100">
					<br><br>
					
					<input type="text" name="url" id="url" placeholder="Lien de la vidéo" size="43" maxlength="43">
					<br><br>
					
					<input type="submit" name="go" value="Ajouter">
			
				</form>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>