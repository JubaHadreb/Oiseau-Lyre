		<?php
		
		require'../connexion.php';

		if(isset($_POST['go'])){

			$id = $_POST['id'];
			$textarea = addslashes($_POST['textarea']);
			
			$connexion->exec(" UPDATE flash_info SET contenu_info='$textarea' WHERE id_info='$id' ");
			
			header('location: flash_info.php#admin');
			
		}
		
		$id = $_GET['id'];
		$ligne = $connexion->query(" SELECT * FROM flash_info WHERE id_info='$id' ")->fetch();
		
		require'header.php';
		
		?>
		
		<div id="contenu_admin">
		
			<div id="ajouter">
			
				<div id="options">
					
					<div id="option2"><span onclick="reinitialiser();">Réinitialiser</span></div>
					<div id="option1"><a href="flash_info.php#admin">Retour</a></div>
					
				</div>
				
				<h3 style="width: 216px;">Modifier un flash info</h3>

				<script>
		
					function reinitialiser(){
						
						document.getElementById('textarea').value = '';

					}
					
					function valider(){
					
						if( document.getElementById('textarea').value == '' ){
						
							alert("Merci de remplir tous les champs");
							return false;
							
						}else{
						
							return true;
						
						}
					}
				
				</script>
				
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return valider();">
				
					<input type="hidden" name="id" value="<?php echo $ligne['id_info']; ?>">
					
					<textarea name="textarea" id="textarea" cols="72" rows="4" maxlength="150" placeholder="Flash info"><?php echo stripslashes($ligne['contenu_info']); ?></textarea>
					<br><br>
					
					<input type="submit" name="go" value="Modifier">
			
				</form>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>