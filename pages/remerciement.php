<?php

session_start();

require'connexion.php';

?>

<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="refresh" content="10; URL=http://oiseau-lyre.net">
		<title>Nous vous remercions!</title>
		
		<link rel="stylesheet" href="../css/feuille9.css">
		<link rel="icon" type="image/png" href="../img/favicon.png" />
		
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<script>
		
		var secondes = 9;
		
		window.onload = function demarrer(){
		
			setTimeout(timer, 1000);
			setTimeout(timer, 2000);
			setTimeout(timer, 3000);
			setTimeout(timer, 4000);
			setTimeout(timer, 5000);
			setTimeout(timer, 6000);
			setTimeout(timer, 7000);
			setTimeout(timer, 8000);
			setTimeout(timer, 9000);
			setTimeout(timer, 10000);
		
		}
		
		function timer(){
			
			document.getElementById("sec").innerHTML = '';
			document.getElementById("sec").innerHTML = secondes;
			secondes--;
			
		}
		
		</script>

	</head>
	
	<body>
	
	<section id="page_remerciement">
		
		<img src="../img/nous_aider/remerciement.jpg" alt="">
		<p>L’association dans son ensemble,<br>vous remercie pour votre<br>généreuse contribution!</p>
		<p>Vous serez redirigé vers la <a href="">page d’accueil</a> dans <span id="sec">10</span> secondes</p>
		
	</section>
		
	</body>
	
</html>