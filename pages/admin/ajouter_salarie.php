		<?php

		if(isset($_POST['go'])){

			$nom = addslashes($_POST['nom']);
			$prenom = addslashes($_POST['prenom']);
			$poste = addslashes($_POST['poste']);
			$textarea = addslashes($_POST['textarea']);
			
			if($_FILES['image']['name'] != ''){
			
				$image = $_FILES['image']['name'];
				$temporaire = $_FILES['image']['tmp_name'];
				$chemin = '../../img/equipe/portraits/';
				move_uploaded_file($temporaire, $chemin.$image);
			
			}
			
			require'../connexion.php';
	
			$connexion->exec(" INSERT INTO salaries VALUES(NULL, '$nom', '$prenom', '$poste', '$textarea', '$image') ");
			
			header('location: salaries.php#admin');
			
		}
		
		require'header.php';
		
		?>
		
		<div id="contenu_admin">
		
			<div id="ajouter">
			
				<div id="options">
					
					<div id="option2"><span onclick="reinitialiser();">Réinitialiser</span></div>
					<div id="option1"><a href="salaries.php#admin">Retour</a></div>
					
				</div>
				
				<h3 style="width: 182px;">Ajouter un salarié</h3>
				
				<script>
		
					function reinitialiser(){
						
						document.getElementById('nom').value = '';
						document.getElementById('prenom').value = '';
						document.getElementById('poste').value = '';
						document.getElementById('image').value = '';
						document.getElementById('textarea').value = '';

					}
					
					function valider(){
					
						if( document.getElementById('nom').value == '' || document.getElementById('prenom').value == '' || document.getElementById('poste').value == '' || document.getElementById('image').value == '' || document.getElementById('textarea').value == '' ){
						
							alert("Merci de remplir tous les champs");
							return false;
							
						}else{
						
							return true;
						
						}
					}
				
				</script>
				
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" onsubmit="return valider();">
				
					<input type="text" name="nom" id="nom" placeholder="Nom" size="30" maxlength="30">
					<br><br>
					
					<input type="text" name="prenom" id="prenom" placeholder="Prenom" size="30" maxlength="30">
					<br><br>
					
					<input type="text" name="poste" id="poste" placeholder="Poste" size="30" maxlength="30">
					<br><br>
						
					Image: <input type="file" name="image" id="image" maxlength="20">
					<br><br>
					
					<textarea name="textarea" id="textarea" cols="72" rows="12" placeholder="Presentation" maxlength="800"></textarea>
					<br><br>
					
					<input type="submit" name="go" value="Ajouter">
			
				</form>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>