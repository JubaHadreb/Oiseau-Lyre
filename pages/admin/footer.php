	<?php

	if(!isset($_SESSION)){
	
		session_start();
		//indispensable pour tester la variable de sesssion

		if(!isset($_SESSION['connecte'])){
		//est ce que la var de session n'existe pas

			header('location:../../index.php');

		}
	
	}

	?>
	
	</div>	
			
			
	<section id="zone_footer">
	
		<div id="footer">
			
			<ul id="nav_secondaire">
				
				<li class="separation3"><a href="../../index.php">Actualités</a></li>
				<li class="separation3"><a href="../qui_sommes_nous.php">Qui sommes nous?</a></li>
				<li class="separation3"><a href="../nos_activites.php">Nos activités</a></li>
				<li class="separation3"><a href="../notre_equipe.php">Notre équipe</a></li>
				<li class="separation3"><a href="../nous_aider.php">Nous aider</a></li>
				<li class="separation3"><a href="../bibliotheque_en_ligne.php">Bibliotheque</a></li>
				<li class="separation3"><a href="../galeries_photos.php">Galeries</a></li>
				<li><a href="../contact_et_coordonnees.php">Contact</a></li>
							
			</ul>
			
			<!--<ul id="liens_secondaires">
			
				<li class="separation4"><a href="#">mentions légales</a></li>
				<li class="separation4"><a href="#">données personnelles</a></li>
				<li><a href="#">plan du site</a></li>
				
			</ul>-->
			
			<div id="copyright">
			
				<p>©</p>
				<p>Oiseau-lyre 2016</p>
			
			</div>
		
		</div>

	</section>
		
	</body>
	
</html>