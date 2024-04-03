		<?php require'header.php'; ?>
		
		<div id="contenu_admin">
		
			<div id="articles">
			
				<div id="ajouter"><a href="ajouter_flash_info.php#admin"><span>+</span>Ajouter</a></div>
				
				<h3 style="width: 191px;">Liste des flash info</h3>
				
				<script>
		
				function confirmer(flash_info){
				
					if(confirm("Voulez-vous supprimer ce flash info ?")){
					
						document.location = "supprimer_flash_info.php?id=" + flash_info;
					
					}else{
					
						alert("Pas de modification");
					
					}
				
				}
				
				</script>
				
				<table>
				
				<?php
				
				require'../connexion.php';
				
				foreach($connexion->query(' SELECT * FROM flash_info ORDER BY id_info DESC ') as $ligne){
				
					echo'<tr>';
					$chaine = $ligne['contenu_info'];
					$chaine = substr($chaine, 0, 70).'...';
					echo'<td width="300px">'.$chaine.'</td>';
					echo'<td class="size" width="95px" style="padding-left: 30px; text-transform: uppercase;">'.$ligne['date_info'].'</td>';
					echo'<td class="size" width="80px"><a href="modifier_flash_info.php?id='.$ligne['id_info'].'#admin">modifier</a></td>';
					echo'<td class="size"><a href="#" onclick="confirmer('.$ligne['id_info'].');">supprimer</a></td>';
					echo'</tr>';
				
				}
				
				?>
				
				</table>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>