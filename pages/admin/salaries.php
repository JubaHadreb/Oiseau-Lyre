		<?php require'header.php'; ?>
		
		<div id="contenu_admin">
		
			<div id="articles">
			
				<div id="ajouter"><a href="ajouter_salarie.php#admin"><span>+</span>Ajouter</a></div>
				
				<h3 style="width: 175px;">Liste des salariés</h3>
				
				<script>
		
				function confirmer(salarie){
				
					if(confirm("Voulez-vous supprimer ce salarié ?")){
					
						document.location = "supprimer_salarie.php?id=" + salarie;
					
					}else{
					
						alert("Pas de modification");
					
					}
				
				}
				
				</script>
				
				<table>
				
				<?php
				
				require'../connexion.php';
				
				foreach($connexion->query(' SELECT * FROM salaries ORDER BY id_salarie DESC ') as $ligne){
				
					echo'<tr>';
					echo'<td width="430px"><h1>'.$ligne['prenom_salarie'].' '.$ligne['nom_salarie'].' - '.$ligne['poste_salarie'].'</h1></td>';
					echo'<td class="size" width="80px"><a href="modifier_salarie.php?id='.$ligne['id_salarie'].'#admin">modifier</a></td>';
					echo'<td class="size"><a href="#" onclick="confirmer('.$ligne['id_salarie'].');">supprimer</a></td>';
					echo'</tr>';
				
				}
				
				?>
				
				</table>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>