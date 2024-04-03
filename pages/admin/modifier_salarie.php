		<?php
		
		require'../connexion.php';

		if(isset($_POST['go'])){

			$id = $_POST['id'];
			$nom = addslashes($_POST['nom']);
			$prenom = addslashes($_POST['prenom']);
			$poste = addslashes($_POST['poste']);
			$textarea = addslashes($_POST['textarea']);
			
			if($_FILES['image']['name'] != ''){
				
				$ligne = $connexion->query(" SELECT image_salarie FROM salaries WHERE id_salarie='$id' ")->fetch();
				$image = $ligne['image_salarie'];
				unlink('../../img/equipe/portraits/'.$image);
			
				$image = $_FILES['image']['name'];
				$temporaire = $_FILES['image']['tmp_name'];
				$chemin = '../../img/equipe/portraits/';
				move_uploaded_file($temporaire, $chemin.$image);
			
			}else{
				
				$image = $_POST['image'];
				
			}
			
			$connexion->exec(" UPDATE salaries SET nom_salarie='$nom', prenom_salarie='$prenom', poste_salarie='$poste', presentation_salarie='$textarea', image_salarie='$image' WHERE id_salarie='$id' ");
			
			header('location: salaries.php#admin');
			
		}
		
		$id = $_GET['id'];
		$ligne = $connexion->query(" SELECT * FROM salaries WHERE id_salarie='$id' ")->fetch();
		
		require'header.php';
		
		?>
		
		<div id="contenu_admin">
		
			<div id="ajouter">
			
				<div id="options">
					
					<div id="option2"><span onclick="reinitialiser();">Réinitialiser</span></div>
					<div id="option1"><a href="salaries.php#admin">Retour</a></div>
					
				</div>
				
				<h3 style="width: 189px;">Modifier un salarié</h3>

				<script>
		
					function reinitialiser(){
						
						document.getElementById('nom').value = '';
						document.getElementById('prenom').value = '';
						document.getElementById('poste').value = '';
						document.getElementById('image').value = '';
						document.getElementById('textarea').value = '';

					}
					
					function valider(){
					
						if( document.getElementById('nom').value == '' || document.getElementById('prenom').value == '' || document.getElementById('poste').value == '' || document.getElementById('textarea').value == '' ){
						
							alert("Merci de remplir tous les champs");
							return false;
							
						}else{
						
							return true;
						
						}
					}
				
				</script>
				
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" onsubmit="return valider();">
				
					<input type="hidden" name="id" value="<?php echo $ligne['id_salarie']; ?>">
					
					<input type="text" name="nom" id="nom" placeholder="Nom" size="30" maxlength="30" value="<?php echo stripslashes($ligne['nom_salarie']); ?>">
					<br><br>
					
					<input type="text" name="prenom" id="prenom" placeholder="Prenom" size="30" maxlength="30" value="<?php echo stripslashes($ligne['prenom_salarie']); ?>">
					<br><br>
					
					<input type="text" name="poste" id="poste" placeholder="Poste" size="30" maxlength="30" value="<?php echo stripslashes($ligne['poste_salarie']); ?>">
					<br><br>
						
					Image: <input type="file" name="image" id="image" maxlength="20">
					<input type="hidden" name="image" value="<?php echo $ligne['image_salarie']; ?>">
					<br>
					<img src="../../img/equipe/portraits/<?php echo $ligne['image_salarie']; ?>" width="130">
					<br><br>
					
					<textarea name="textarea" id="textarea" cols="72" rows="12" placeholder="Presentation" maxlength="800"><?php echo $ligne['presentation_salarie']; ?></textarea>
					<br><br>
					
					<input type="submit" name="go" value="Modifier">
			
				</form>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>