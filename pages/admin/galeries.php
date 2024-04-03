		<?php require'header.php'; ?>
		
		<div id="contenu_admin">
		
			<div id="articles">
			
				<div id="ajouter"><a href="ajouter_galerie.php#admin"><span>+</span>Ajouter</a></div>
				
				<h3 style="width: 177px;">Liste des galeries</h3>
				
				<script>
		
				function confirmer(galerie){
				
					if(confirm("Voulez-vous supprimer cette galerie ?")){
					
						document.location = "supprimer_galerie.php?id=" + galerie;
					
					}else{
					
						alert("Pas de modification");
					
					}
				
				}
				
				</script>
				
				<table>
				
				<?php
				
				require'../connexion.php';
				
				foreach($connexion->query(' SELECT * FROM galeries ORDER BY id_galerie DESC ') as $ligne){
				
					echo'<tr>';
					echo'<td width="430px"><h1>'.$ligne['titre_galerie'].'</h1></td>';
					echo'<td class="size" width="80px"><a href="modifier_galerie.php?id='.$ligne['id_galerie'].'#admin">modifier</a></td>';
					echo'<td class="size"><a href="#" onclick="confirmer('.$ligne['id_galerie'].');">supprimer</a></td>';
					echo'</tr>';
				
				}
				
				?>
				
				</table>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>