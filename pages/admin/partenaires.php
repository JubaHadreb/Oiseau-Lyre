		<?php require'header.php'; ?>
		
		<div id="contenu_admin">
		
			<div id="articles">
			
				<div id="ajouter"><a href="ajouter_partenaire.php#admin"><span>+</span>Ajouter</a></div>
				
				<h3 style="width: 213px;">Liste des partenaires</h3>
				
				<script>
		
				function confirmer(partenaire){
				
					if(confirm("Voulez-vous supprimer ce partenaire ?")){
					
						document.location = "supprimer_partenaire.php?id=" + partenaire;
					
					}else{
					
						alert("Pas de modification");
					
					}
				
				}
				
				</script>
				
				<table>
				
				<?php
				
				require'../connexion.php';
				
				foreach($connexion->query(' SELECT * FROM partenaires ORDER BY id_partenaire DESC ') as $ligne){
				
					echo'<tr>';
					echo'<td width="430px"><h1><a href="http://'.$ligne['url_partenaire'].'" target="_blank">'.$ligne['titre_partenaire'].'</a></h1></td>';
					echo'<td class="size" width="80px"><a href="modifier_partenaire.php?id='.$ligne['id_partenaire'].'#admin">modifier</a></td>';
					echo'<td class="size"><a href="#" onclick="confirmer('.$ligne['id_partenaire'].');">supprimer</a></td>';
					echo'</tr>';
				
				}
				
				?>
				
				</table>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>