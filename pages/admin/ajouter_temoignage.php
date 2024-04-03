		<?php

		if(isset($_POST['go'])){

			$textarea = addslashes($_POST['textarea']);
			$auteur = addslashes($_POST['auteur']);
			
			require'../connexion.php';
	
			$connexion->exec(" INSERT INTO temoignages VALUES(NULL, '$textarea', '$auteur') ");
			
			header('location: temoignages.php#admin');
			
		}
		
		require'header.php';
		
		?>
		
		<div id="contenu_admin">
		
			<div id="ajouter">
			
				<div id="options">
					
					<div id="option2"><span onclick="reinitialiser();">Réinitialiser</span></div>
					<div id="option1"><a href="temoignages.php#admin">Retour</a></div>
					
				</div>
				
				<h3 style="width: 234px;">Ajouter un temoignage</h3>
				
				<script>
		
					function reinitialiser(){
						
						document.getElementById('auteur').value = '';
						document.getElementById('textarea').value = '';

					}
					
					function valider(){
					
						if( document.getElementById('auteur').value == '' || document.getElementById('textarea').value == '' ){
						
							alert("Merci de remplir tous les champs");
							return false;
							
						}else{
						
							return true;
						
						}
					}
				
				</script>
				
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return valider();">
					
					<input type="text" name="auteur" id="auteur" placeholder="Auteur" size="30" maxlength="30">
					<br><br>
					
					<textarea name="textarea" id="textarea" cols="72" rows="4" maxlength="220" placeholder="Temoignage"></textarea>
					<br><br>
					
					<input type="submit" name="go" value="Ajouter">
			
				</form>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>