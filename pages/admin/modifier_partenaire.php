		<?php
		
		require'../connexion.php';

		if(isset($_POST['go'])){

			$id = $_POST['id'];
			$titre = addslashes($_POST['titre']);
			$url = addslashes($_POST['url']);
		
			if($_FILES['image']['name'] != ''){
				
				$ligne = $connexion->query(" SELECT logo_partenaire FROM partenaires WHERE id_partenaire='$id' ")->fetch();
				$image = $ligne['logo_partenaire'];
				unlink('../../img/actualites/partenaires/'.$image);
			
				$image = $_FILES['image']['name'];
				$temporaire = $_FILES['image']['tmp_name'];
				$chemin = '../../img/actualites/partenaires/';
				move_uploaded_file($temporaire, $chemin.$image);
			
			}else{
				
				$image = $_POST['image'];
				
			}
			
			$connexion->exec(" UPDATE partenaires SET titre_partenaire='$titre', url_partenaire='$url', logo_partenaire='$image' WHERE id_partenaire='$id' ");
			
			header('location: slider.php#admin');
			
		}
		
		$id = $_GET['id'];
		$ligne = $connexion->query(" SELECT * FROM partenaires WHERE id_partenaire='$id' ")->fetch();
		
		require'header.php';
		
		?>
		
		<div id="contenu_admin">
		
			<div id="ajouter">
			
				<div id="options">
					
					<div id="option2"><span onclick="reinitialiser();">Réinitialiser</span></div>
					<div id="option1"><a href="partenaires.php#admin">Retour</a></div>
					
				</div>
				
				<h3 style="width: 227px;">Modifier un partenaire</h3>

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
				
					<input type="hidden" name="id" value="<?php echo $ligne['id_partenaire']; ?>">
					
					<input type="text" name="titre" id="titre" placeholder="Titre" size="50" maxlength="50" value="<?php echo stripslashes($ligne['titre_partenaire']); ?>">
					<br><br>
					
					Image: <input type="file" name="image" id="image" maxlength="20">
					<input type="hidden" name="image" value="<?php echo $ligne['logo_partenaire']; ?>">
					<br>
					<img src="../../img/actualites/partenaires/<?php echo $ligne['logo_partenaire']; ?>" width="130">
					<br><br>
					
					<input type="text" name="url" id="url" placeholder="Lien du slide" size="50" maxlength="50" value="<?php echo stripslashes($ligne['url_partenaire']); ?>">
					<br><br>
					
					<input type="submit" name="go" value="Modifier">
			
				</form>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>