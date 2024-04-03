<?php

session_start();

require'connexion.php';

?>

<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bibliothèque en ligne - Association Oiseau-Lyre</title>
		
		<link rel="stylesheet" href="../css/feuille1.css">
		<link rel="stylesheet" href="../css/feuille9.css">
		<link rel="stylesheet" href="../css/responsive1.css">
		<link rel="icon" type="image/png" href="../img/favicon.png" />
		
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	
	</head>
	
	
	<body>
	
	<?php require'header.php'; ?> <!-- html du header -->
	
	<section id="page_livres">
	
		<div id="page">
		
			<div id="oups">
			
				<img src="../img/livres/construction.png" alt="Oups!" width="600px">
				<p>Cette page est actuellement en construction<br>et sera disponible prochainement!</p>
			
			</div>
			
		</div>
			
	</section>

	<?php require'footer.html'; ?> <!-- html du footer -->
		
	</body>
	
</html>