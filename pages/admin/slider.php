		<?php require'header.php'; ?>
		
		<div id="contenu_admin">
		
			<div id="articles">
			
				<div id="ajouter"><a href="ajouter_slide.php#admin"><span>+</span>Ajouter</a></div>
				
				<h3 style="width: 155px;">Liste des slides</h3>
				
				<script>
		
				function confirmer(slide){
				
					if(confirm("Voulez-vous supprimer ce slide ?")){
					
						document.location = "supprimer_slide.php?id=" + slide;
					
					}else{
					
						alert("Pas de modification");
					
					}
				
				}
				
				</script>
				
				<table>
				
				<?php
				
				require'../connexion.php';
				
				foreach($connexion->query(' SELECT * FROM slider ORDER BY id_slider DESC ') as $ligne){
				
					echo'<tr>';
					echo'<td width="430px"><h1><a href="'.$ligne['url_slider'].'" target="_blank">'.$ligne['titre_slider'].'</a></h1></td>';
					echo'<td class="size" width="80px"><a href="modifier_slide.php?id='.$ligne['id_slider'].'#admin">modifier</a></td>';
					echo'<td class="size"><a href="#" onclick="confirmer('.$ligne['id_slider'].');">supprimer</a></td>';
					echo'</tr>';
				
				}
				
				?>
				
				</table>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>