		<?php require'header.php'; ?>
		
		<div id="contenu_admin">
		
			<div id="articles">
			
				<div id="ajouter"><a href="ajouter_temoignage.php#admin"><span>+</span>Ajouter</a></div>
				
				<h3 style="width: 227px;">Liste des temoignages</h3>
				
				<script>
		
				function confirmer(temoignage){
				
					if(confirm("Voulez-vous supprimer ce temoignage ?")){
					
						document.location = "supprimer_temoignage.php?id=" + temoignage;
					
					}else{
					
						alert("Pas de modification");
					
					}
				
				}
				
				</script>
				
				<table>
				
				<?php
				
				require'../connexion.php';
				
				foreach($connexion->query(' SELECT * FROM temoignages ORDER BY id_temoignage DESC ') as $ligne){
				
					echo'<tr>';
					$chaine = $ligne['contenu_temoignage'];
					$chaine = substr($chaine, 0, 70).'...';
					echo'<td width="300px">'.$chaine.'</td>';
					echo'<td class="size" width="120px" style="padding-left: 5px; text-transform: uppercase;">'.$ligne['auteur_temoignage'].'</td>';
					echo'<td class="size" width="80px"><a href="modifier_temoignage.php?id='.$ligne['id_temoignage'].'#admin">modifier</a></td>';
					echo'<td class="size"><a href="#" onclick="confirmer('.$ligne['id_temoignage'].');">supprimer</a></td>';
					echo'</tr>';
				
				}
				
				?>
				
				</table>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>