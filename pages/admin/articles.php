		<?php require'header.php'; ?>
		
		<div id="contenu_admin">
		
			<div id="articles">
			
				<div id="ajouter"><a href="ajouter_article.php#admin"><span>+</span>Ajouter</a></div>
				
				<h3>Liste des articles</h3>
				
				<script>
		
				function confirmer(article){
				
					if(confirm("Voulez-vous supprimer cette article ?")){
					
						document.location = "supprimer_article.php?id=" + article;
					
					}else{
					
						alert("Pas de modification");
					
					}
				
				}
				
				</script>
				
				<table>
				
				<?php
				
				require'../connexion.php';
				
				foreach($connexion->query(' SELECT * FROM articles ORDER BY id_articles DESC ') as $ligne){
				
					echo'<tr>';
					echo'<td width="200px"><h1><a href="../article.php?a='.$ligne['id_articles'].'#infos_aticle" target="_blank">'.$ligne['titre_articles'].'</a></h1></td>';
					echo'<td class="size" width="120px" style="padding-left: 5px; text-transform: uppercase;">'.$ligne['auteur_articles'].'</td>';
					echo'<td class="size" width="130px">'.$ligne['date1_articles'].' à '.$ligne['heure_articles'].'</td>';
					echo'<td class="size" width="80px"><a href="modifier_article.php?id='.$ligne['id_articles'].'#admin">modifier</a></td>';
					echo'<td class="size"><a href="#" onclick="confirmer('.$ligne['id_articles'].');">supprimer</a></td>';
					echo'</tr>';
				
				}
				
				?>
				
				</table>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>