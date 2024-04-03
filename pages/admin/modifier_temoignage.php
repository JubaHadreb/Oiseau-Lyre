		<?php
		
		require'../connexion.php';

		if(isset($_POST['go'])){

			$id = $_POST['id'];
			$auteur = addslashes($_POST['auteur']);
			$textarea = addslashes($_POST['textarea']);
		
			$connexion->exec(" UPDATE temoignages SET auteur_temoignage='$auteur', contenu_temoignage='$textarea' WHERE id_temoignage='$id' ");
			
			header('location: temoignages.php#admin');
			
		}
		
		$id = $_GET['id'];
		$ligne = $connexion->query(" SELECT * FROM temoignages WHERE id_temoignage='$id' ")->fetch();
		
		require'header.php';
		
		?>
		
		<div id="contenu_admin">
		
			<div id="ajouter">
			
				<div id="options">
					
					<div id="option2"><span onclick="reinitialiser();">Réinitialiser</span></div>
					<div id="option1"><a href="temoignages.php#admin">Retour</a></div>
					
				</div>
				
				<h3 style="width: 185px;">Modifier un article</h3>

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
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" onsubmit="return valider();">
				
					<input type="hidden" name="id" value="<?php echo $ligne['id_temoignage']; ?>">
					
					<input type="text" name="auteur" id="auteur" placeholder="Auteur" size="30" maxlength="30" value="<?php echo stripslashes($ligne['auteur_temoignage']); ?>">
					<br><br>
					
					<textarea name="textarea" id="textarea" cols="72" rows="4" maxlength="220" placeholder="Temoignage"><?php echo stripslashes($ligne['contenu_temoignage']); ?>"</textarea>
					<br><br>
					
					<input type="submit" name="go" value="Modifier">
			
				</form>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>