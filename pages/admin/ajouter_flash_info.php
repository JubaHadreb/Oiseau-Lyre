		<?php

		if(isset($_POST['go'])){

			$textarea = addslashes($_POST['textarea']);
			
			$date = date("d/m/Y");
			$heure = date('H').'h'.date('i');
			
			
			require'../connexion.php';
	
			$connexion->exec(" INSERT INTO flash_info VALUES(NULL, '$textarea', '$date', '$heure') ");
			
			header('location: flash_info.php#admin');
			
		}
		
		require'header.php';
		
		?>
		
		<div id="contenu_admin">
		
			<div id="ajouter">
			
				<div id="options">
					
					<div id="option2"><span onclick="reinitialiser();">Réinitialiser</span></div>
					<div id="option1"><a href="flash_info.php#admin">Retour</a></div>
					
				</div>
				
				<h3 style="width: 208px;">Ajouter un flash info</h3>
				
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
					
					<textarea name="textarea" id="textarea" cols="72" rows="4" maxlength="150" placeholder="Flash info"></textarea>
					<br><br>
					
					<input type="submit" name="go" value="Ajouter">
			
				</form>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>