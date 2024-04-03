		<?php
		
		require'../connexion.php';

		if(isset($_POST['go'])){

			$id = $_POST['id'];
			$titre = addslashes($_POST['titre']);
			$auteur = addslashes($_POST['auteur']);
			$textarea = addslashes($_POST['textarea']);
		
			if($_FILES['image']['name'] != ''){
				
				$ligne = $connexion->query(" SELECT image_articles FROM articles WHERE id_articles='$id' ")->fetch();
				$image = $ligne['image_articles'];
				unlink('../../img/article/image/'.$image);
			
				$image = $_FILES['image']['name'];
				$temporaire = $_FILES['image']['tmp_name'];
				$chemin = '../../img/article/image/';
				move_uploaded_file($temporaire, $chemin.$image);
			
			}else{
				
				$image = $_POST['image'];
				
			}
			
			$connexion->exec(" UPDATE articles SET titre_articles='$titre', contenu_articles='$textarea', auteur_articles='$auteur', image_articles='$image' WHERE id_articles='$id' ");
			
			header('location: articles.php#admin');
			
		}
		
		$id = $_GET['id'];
		$ligne = $connexion->query(" SELECT * FROM articles WHERE id_articles='$id' ")->fetch();
		
		require'header.php';
		
		?>
		
		<div id="contenu_admin">
		
			<div id="ajouter">
			
				<div id="options">
					
					<div id="option2"><span onclick="reinitialiser();">Réinitialiser</span></div>
					<div id="option1"><a href="articles.php#admin">Retour</a></div>
					
				</div>
				
				<h3 style="width: 185px;">Modifier un article</h3>

				<script type="text/javascript" src="../../js/tinymce/tinymce.min.js"></script>
				<script>
		
					function reinitialiser(){
						
						document.getElementById('titre').value = '';
						document.getElementById('auteur').value = '';
						document.getElementById('image').value = '';
						document.getElementById('textarea').value = '';

					}
					
					function valider(){
					
						if( document.getElementById('titre').value == '' || document.getElementById('auteur').value == '' || document.getElementById('textarea').value == '' ){
						
							alert("Merci de remplir tous les champs");
							return false;
							
						}else{
						
							return true;
						
						}
					}

					//Debut de Tinymce
					
					tinymce.init({
						selector: "textarea",
						theme: "modern",
						resize: false,
						plugins: [
							"advlist autolink lists link image charmap print preview hr anchor pagebreak",
							"searchreplace wordcount visualblocks visualchars code fullscreen",
							"insertdatetime media nonbreaking save table contextmenu directionality",
							"emoticons template paste textcolor colorpicker textpattern"
						],
						toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
						toolbar2: "print preview media | forecolor backcolor emoticons",
						image_advtab: true,
						templates: [
							{title: 'Test template 1', content: 'Test 1'},
							{title: 'Test template 2', content: 'Test 2'}
						]
					});
					
					//Fin de Tinymce
				
				</script>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" onsubmit="return valider();">
				
					<input type="hidden" name="id" value="<?php echo $ligne['id_articles']; ?>">
					
					<input type="text" name="titre" id="titre" placeholder="Titre" size="50" maxlength="50" value="<?php echo stripslashes($ligne['titre_articles']); ?>">
					<br><br>
					
					<input type="text" name="auteur" id="auteur" placeholder="Auteur" size="30" maxlength="30" value="<?php echo stripslashes($ligne['auteur_articles']); ?>">
					<br><br>
					
					Image: <input type="file" name="image" id="image" size="20">
					<input type="hidden" name="image" value="<?php echo $ligne['image_articles']; ?>">
					<br>
					<img src="../../img/article/image/<?php echo $ligne['image_articles']; ?>" width="130">
					<br><br>
					
					<textarea name="textarea" id="textarea" cols="72" rows="12" placeholder="Texte"><?php echo stripslashes($ligne['contenu_articles']); ?></textarea>
					<br><br>
					
					<input type="submit" name="go" value="Modifier">
			
				</form>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>