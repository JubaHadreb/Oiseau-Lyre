		<?php require'header.php'; ?>
		
		<div id="contenu_admin">
		
			<div id="articles">
				
				<h3 id="h3_mail">Liste des mails</h3>
				
				<ul id="cibles">
				
					<li><a class="cibles" href="<?php $_SERVER['PHP_SELF']; ?>?cible=adherents#admin">Adhérents</a></li>
					<li><a class="cibles" href="<?php $_SERVER['PHP_SELF']; ?>?cible=benevoles#admin">Bénévoles</a></li>
					<li><a class="cibles" href="<?php $_SERVER['PHP_SELF']; ?>?cible=donateurs#admin">Donateurs</a></li>
					<li><a class="cibles" href="<?php $_SERVER['PHP_SELF']; ?>?cible=partenaires#admin">Partenaires</a></li>
					<li><a class="cibles" href="<?php $_SERVER['PHP_SELF']; ?>?cible=salaries#admin">Salariés</a></li>
				
				</ul>
				
				<script>
		
				function confirmer(article){
				
					if(confirm("Voulez-vous supprimer ce mail ?")){
					
						document.location = "supprimer_listing.php?cible=" + <?php $cible ?> + "&id=" + article;
					
					}else{
					
						alert("Pas de modification");
					
					}
				
				}
				
				</script>
				
				<table>
				
				<?php
				
				require'../connexion.php';
			
				if(isset($_GET['p'])){
						
					$page = $_GET['p'];
						
				}else{
					
					$page = 0;
					
				}
						
				$quantite = 15;
					
				$debut = $page * $quantite;
				
				if(isset($_GET['cible'])){
					
					$cible = $_GET['cible'];
					
					$sql = $connexion->prepare(' SELECT * FROM '.$cible.' ');	
				
				}else{
					
					$cible = 'adherents';
					
					$sql = $connexion->prepare(' SELECT * FROM adherents ');
					
				}
				
				$sql->execute();	
				$nombre = $sql->rowCount();
				
				if(isset($_GET['cible'])){
					
					if($cible == 'adherents'){
						
						?> 
						<script>
						
						document.getElementsByClassName("cibles")[0].style.backgroundColor = "#fff";
						document.getElementsByClassName("cibles")[0].style.color = "#84d5f4";
						document.getElementsByClassName("cibles")[0].style.borderColor = "#84d5f4";

						</script> 
						<?php
					
						foreach($connexion->query(' SELECT * FROM adherents ORDER BY id_adherent DESC LIMIT '.$debut.', '.$quantite) as $ligne){
						
							echo'<tr>';
							
							if($ligne['mail_adherent'] != ''){
								
								echo'<td width="430px"><h1>'.$ligne['nom_adherent'].'</h1></td>';
								echo'<td class="size" width="80px"><a href="modifier_listing.php?id='.$ligne['id_adherent'].'#admin">modifier</a></td>';
							
							}else{
								
								echo'<td width="430px"><h1 class="nom_benevole">'.$ligne['nom_adherent'].'</h1></td>';
								echo'<td class="size" width="80px"><a href="modifier_listing.php?id='.$ligne['id_adherent'].'#admin">ajouter</a></td>';
								
							}
							
							echo'<td class="size"><a href="" onclick="confirmer('.$ligne['id_adherent'].');">supprimer</a></td>';
							echo'</tr>';
						
						}
						
					}else if($cible == 'benevoles'){
						
						?>
						<script>
						
						document.getElementsByClassName("cibles")[1].style.backgroundColor = "#fff";
						document.getElementsByClassName("cibles")[1].style.color = "#84d5f4";
						document.getElementsByClassName("cibles")[1].style.borderColor = "#84d5f4";

						</script> 
						<?php
						
						foreach($connexion->query(' SELECT * FROM benevoles ORDER BY id_benevole DESC LIMIT '.$debut.', '.$quantite) as $ligne){
						
							echo'<tr>';
							
							if($ligne['mail_benevole'] != ''){
								
								echo'<td width="430px"><h1>'.$ligne['nom_benevole'].'</h1></td>';
								echo'<td class="size" width="80px"><a href="modifier_listing.php?id='.$ligne['id_benevole'].'#admin">modifier</a></td>';
							
							}else{
								
								echo'<td width="430px"><h1 class="nom_benevole">'.$ligne['nom_benevole'].'</h1></td>';
								echo'<td class="size" width="80px"><a href="modifier_listing.php?id='.$ligne['id_benevole'].'#admin">ajouter</a></td>';
								
							}
							
							echo'<td class="size"><a href="#" onclick="confirmer('.$ligne['id_benevole'].');">supprimer</a></td>';
							echo'</tr>';
						
						}
						
					}else if($cible == 'donateurs'){
						
						?> 
						<script>
						
						document.getElementsByClassName("cibles")[2].style.backgroundColor = "#fff";
						document.getElementsByClassName("cibles")[2].style.color = "#84d5f4";
						document.getElementsByClassName("cibles")[2].style.borderColor = "#84d5f4";

						</script> 
						<?php
						
						
					}else if($cible == 'partenaires'){
						
						?> 
						<script>
						
						document.getElementsByClassName("cibles")[3].style.backgroundColor = "#fff";
						document.getElementsByClassName("cibles")[3].style.color = "#84d5f4";
						document.getElementsByClassName("cibles")[3].style.borderColor = "#84d5f4";

						</script> 
						<?php
						
						foreach($connexion->query(' SELECT * FROM partenaires ORDER BY id_partenaire DESC LIMIT '.$debut.', '.$quantite) as $ligne){
						
							echo'<tr>';
							
							if($ligne['mail_partenaire'] != ''){
								
								echo'<td width="430px"><h1>'.$ligne['titre_partenaire'].'</h1></td>';
								echo'<td class="size" width="80px"><a href="modifier_listing.php?id='.$ligne['id_partenaire'].'#admin">modifier</a></td>';
							
							}else{
								
								echo'<td width="430px"><h1 class="nom_benevole">'.$ligne['titre_partenaire'].'</h1></td>';
								echo'<td class="size" width="80px"><a href="modifier_listing.php?id='.$ligne['id_partenaire'].'#admin">ajouter</a></td>';
								
							}
							
							echo'<td class="size"><a href="#" onclick="confirmer('.$ligne['id_partenaire'].');">supprimer</a></td>';
							echo'</tr>';
							
						}
						
					}else if($cible == 'salaries'){
						
						?> 
						<script>
						
						document.getElementsByClassName("cibles")[4].style.backgroundColor = "#fff";
						document.getElementsByClassName("cibles")[4].style.color = "#84d5f4";
						document.getElementsByClassName("cibles")[4].style.borderColor = "#84d5f4";

						</script> 
						<?php
						
						foreach($connexion->query(' SELECT * FROM salaries ORDER BY id_salarie DESC LIMIT '.$debut.', '.$quantite) as $ligne){
						
							echo'<tr>';
							
							if($ligne['mail_salarie'] != ''){
								
								echo'<td width="430px"><h1>'.$ligne['nom_salarie'].'</h1></td>';
								echo'<td class="size" width="80px"><a href="modifier_listing.php?id='.$ligne['id_salarie'].'#admin">modifier</a></td>';
							
							}else{
								
								echo'<td width="430px"><h1 class="nom_benevole">'.$ligne['nom_salarie'].'</h1></td>';
								echo'<td class="size" width="80px"><a href="modifier_listing.php?id='.$ligne['id_salarie'].'#admin">ajouter</a></td>';
								
							}
							
							echo'<td class="size"><a href="#" onclick="confirmer('.$ligne['id_salarie'].');">supprimer</a></td>';
							echo'</tr>';
						
						}
						
					}else{
						
						?> 
						<script>
						
						document.getElementsByClassName("cibles")[0].style.backgroundColor = "#fff";
						document.getElementsByClassName("cibles")[0].style.color = "#84d5f4";
						document.getElementsByClassName("cibles")[0].style.borderColor = "#84d5f4";

						</script> 
						<?php
						
						foreach($connexion->query(' SELECT * FROM adherents ORDER BY id_adherent DESC LIMIT '.$debut.', '.$quantite) as $ligne){
						
							echo'<tr>';
							
							if($ligne['mail_adherent'] != ''){
								
								echo'<td width="430px"><h1>'.$ligne['nom_adherent'].'</h1></td>';
								echo'<td class="size" width="80px"><a href="modifier_listing.php?id='.$ligne['id_adherent'].'#admin">modifier</a></td>';
							
							}else{
								
								echo'<td width="430px"><h1 class="nom_benevole">'.$ligne['nom_adherent'].'</h1></td>';
								echo'<td class="size" width="80px"><a href="modifier_listing.php?id='.$ligne['id_adherent'].'#admin">ajouter</a></td>';
								
							}
							
							echo'<td class="size"><a href="#" onclick="confirmer('.$ligne['id_adherent'].');">supprimer</a></td>';
							echo'</tr>';
						
						}
						
					}
				
				}else{
					
					?> 
						<script>
						
						document.getElementsByClassName("cibles")[0].style.backgroundColor = "#fff";
						document.getElementsByClassName("cibles")[0].style.color = "#84d5f4";
						document.getElementsByClassName("cibles")[0].style.borderColor = "#84d5f4";

						</script> 
						<?php
					
					foreach($connexion->query(' SELECT * FROM adherents ORDER BY id_adherent DESC LIMIT '.$debut.', '.$quantite) as $ligne){
						
							echo'<tr>';
							
							if($ligne['mail_adherent'] != ''){
								
								echo'<td width="430px"><h1>'.$ligne['nom_adherent'].'</h1></td>';
								echo'<td class="size" width="80px"><a href="modifier_listing.php?id='.$ligne['id_adherent'].'#admin">modifier</a></td>';
							
							}else{
								
								echo'<td width="430px"><h1 class="nom_benevole">'.$ligne['nom_adherent'].'</h1></td>';
								echo'<td class="size" width="80px"><a href="modifier_listing.php?id='.$ligne['id_adherent'].'#admin">ajouter</a></td>';
								
							}
							
							echo'<td class="size"><a href="#" onclick="confirmer('.$ligne['id_adherent'].');">supprimer</a></td>';
							echo'</tr>';
						
						}
					
				}
				
				?>
				
				</table>
				
			<div id="nav_pages">
			
				<ul>
			
			<?php 	
				
				if($page > 0){//ce n'est pas la premiére page
				
					$precedente = $page - 1;
					//nlle var 'precedente' pour preserver la variable page
				
					echo'<li><a href="'.$_SERVER['PHP_SELF'].'?cible='.$cible.'&p='.$precedente.'#admin">Précédent</a><li>';
					
				}else{
					
					echo '<li style="color: #46b5df;">Précédent</li>';
					
				}
			?>
			
				<ul id="nav_nombres">
			
			<?php
					
				//série de numéros cliquables qui dépendent du nombre total
				//et du nombre d'articles affichées par page
				
				$i = 0;
				$j = 1;
				
				if($i != 6){

					if($nombre > $quantite){//on a besoin d'écrire ces numéros
					
						while( $i < ($nombre / $quantite) ){//tant qu'il y a des séries
						
							if($i != $page){// est ce que le numéro est cliquables
							
								echo '<li><a href="'.$_SERVER['PHP_SELF'].'?cible='.$cible.'&p='.$i.'#admin"> '.$j.' </a><li>';
							
							}else{//le numéro n'est pas cliquable
							
								echo '<li style="font-weight: bold; color: #46b5df;">'.$j.'</li>';
							
							}
							
						$i++;
						$j++;
						
						}
					
					}else{
						
						echo '<li style="font-weight: bold; color: #46b5df;">'.$j.'</li>';
						
					}
				
				}
					
			?>
			
				</ul>
			
			<?php	
					
				if( $debut + $quantite < $nombre ){
				//il reste des voitures à afficher
				
					$suivante = $page + 1;
					//j'ai besoin d'une nouvelle variable suivante (page suivante)
					//elle vaut $page + 113
					
					echo'<li><a href="'.$_SERVER['PHP_SELF'].'?cible='.$cible.'&p='.$suivante.'#admin">Suivant</a></li>';
					
				}else{//pas de page suivante
				
					echo '<li style="color: #46b5df;">Suivant</li>';
				
				}	
					
			?>
				
				</ul>
			
			</div><!-- Fin de la nav pages -->
			
			</div>
		
		</div>
	
		<?php require'footer.php'; ?>