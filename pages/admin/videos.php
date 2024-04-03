		<?php require'header.php'; ?>
		
		<div id="contenu_admin">
		
			<div id="articles">
			
				<div id="ajouter"><a href="ajouter_video.php#admin"><span>+</span>Ajouter</a></div>
				
				<h3 style="width: 162px;">Liste des vidéos</h3>
				
				<script>
		
				function confirmer(video){
				
					if(confirm("Voulez-vous supprimer cette vidéo ?")){
					
						document.location = "supprimer_video.php?id=" + video;
					
					}else{
					
						alert("Pas de modification");
					
					}
				
				}
				
				</script>
				
				<table>
				
				<?php
				
				require'../connexion.php';
				
				foreach($connexion->query(' SELECT * FROM videos ORDER BY id_videos DESC ') as $ligne){
				
					echo'<tr>';
					echo'<td width="430px"><h1><a href="'.$ligne['url_videos'].'" target="_blank">'.$ligne['titre_videos'].'</a></h1></td>';
					echo'<td class="size" width="80px"><a href="modifier_video.php?id='.$ligne['id_videos'].'#admin">modifier</a></td>';
					echo'<td class="size"><a href="#" onclick="confirmer('.$ligne['id_videos'].');">supprimer</a></td>';
					echo'</tr>';
				
				}
				
				?>
				
				</table>
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>