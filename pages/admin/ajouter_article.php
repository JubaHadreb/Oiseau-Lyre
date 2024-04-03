		<?php

		if(isset($_POST['go'])){

			$titre = addslashes($_POST['titre']);
			$auteur = addslashes($_POST['auteur']);
			$textarea = addslashes($_POST['textarea']);
			$date1 = date("d/m/Y");
			
			$LesMois = array('JANVIER', 'FÉVRIER', 'MARS', 'AVRIL', 'MAI', 'JUIN', 'JUILLET', 'AOUT', 'SEPTEMBRE', 'OCTOBRE', 'NOVEMBRE', 'DÉCEMBRE');
			$date2 = date('n') - 1;
			$date2 = $LesMois[$date2];
			$date2 = date('d').' '.$date2.' '.date('Y');
			
			$heure = date('H').'h'.date('i');
			
			if($_FILES['image']['name'] != ''){
			
				$image = $_FILES['image']['name'];
				$temporaire = $_FILES['image']['tmp_name'];
				$chemin = '../../img/article/image/';
				move_uploaded_file($temporaire, $chemin.$image);
			
			}
			
			require'../connexion.php';
	
			$connexion->exec(" INSERT INTO articles VALUES(NULL, '$titre', '$textarea', '$auteur', '$date1', '$date2', '$heure', '$image') ");
			
			header('location: articles.php#admin');
			
		}
		
		require'header.php';
		
		?>
		
		<div id="contenu_admin">
		
			<div id="ajouter">
			
				<div id="options">
					
					<div id="option2"><span onclick="reinitialiser();">Réinitialiser</span></div>
					<div id="option1"><a href="articles.php#admin">Retour</a></div>
					
				</div>
				
				<h3>Ajouter un article</h3>
				
				<script type="text/javascript" src="../../js/tinymce/tinymce.min.js"></script>
				<script>
		
					function reinitialiser(){
						
						document.getElementById('titre').value = '';
						document.getElementById('auteur').value = '';
						document.getElementById('image').value = '';
						document.getElementById('textarea').value = '';

					}
					
					function valider(){
					
						if( document.getElementById('titre').value == '' || document.getElementById('auteur').value == '' || document.getElementById('image').value == '' || document.getElementById('textarea').value == '' ){
						
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
				
					<input type="text" name="titre" id="titre" placeholder="Titre" size="50" maxlength="50">
					<br><br>
					
					<input type="text" name="auteur" id="auteur" placeholder="Auteur" size="30" maxlength="30">
					<br><br>
					
					Image: <input type="file" name="image" id="image" maxlength="20">
					<br><br>
					
					<textarea name="textarea" id="textarea" cols="72" rows="12" placeholder="Texte"></textarea>
					<br><br>
					
					<input type="submit" name="go" value="Ajouter">
			
				</form>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>