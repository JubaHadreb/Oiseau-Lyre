<?php

session_start();

require'connexion.php';

$chaine = '';

if(isset($_POST['envoyez'])){//on a envoyé le formulaire

	$nom = addslashes($_POST['nom']);
	$email = addslashes($_POST['email']);
	$objet = addslashes($_POST['objet']);
	$message = addslashes($_POST['message']);
	
	$destinataire = 'contact@oiseau-lyre.net';
	/*$objet = 'sites voiture';*/
	
	$contenu = '<br><big>Nom:</big> '.$nom;
	$contenu .= '<br><big>Email:</big> '.$email;
	$contenu .= '<br><br><big>Message:</big> '.$message;
	
	$entete = 'MIME-Version: 1.0'.'\r\n';
	$entete = 'Content-type: text/html; charset=iso-8859-1'.'\r\n';

	//minimum vital
	
	//en-têtes supplémentaires - facultatives
	
	/*$entete = 'To: Marie <marie@hot.com>, Paul <paul@hot.com>'.'\r\n';
	$entete = 'From: Roger <roger24@hotmail.com>'.'\r\n';
	$entete = 'Cc: pierre@hotmail.fr'.'\r\n';
	$entete = 'Bcc: henri@hotmail.fr'.'\r\n';*/
	
	//la fonction mail peut prendre 4 attributs dans l'ordre
	//le destinataire, l'objet, le corps du mail, l'entête de l'email
	//cet entête permet d'envoyer un mail au format HTML
	//pas de div, pas de flash, pas de video
	//mise en page en tableau
	//images : gif, jpg ou png avec une adresse absolue sur votre serveur
	//on peut faire des liens : il faut des liens absolus http:// .....
	
	if( mail($destinataire, $objet, $contenu, $entete) ){ //email envoyé
	
		$chaine ="<p id='envoyer' class='chaine'>L'envoie est réussi, nous vous répondrons dans les plus brefs délais!</p>";
	
	}else{//email n'est pas parti
	
		$chaine = "<p id='annuler' class='chaine'>Désolé, un probléme est apparue, veuillez réessayer un peu plus tard.</p>";
	
	}

}

?>

<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Boîte de contact et coordonnées des structures - Association Oiseau-Lyre</title>
		
		<link rel="stylesheet" href="../css/feuille1.css">
		<link rel="stylesheet" href="../css/feuille8.css">
		<link rel="stylesheet" href="../css/responsive1.css">
		<link rel="icon" type="image/png" href="../img/favicon.png" />
		
		<script>
		
		function valider(){
		
			if( document.forms[1].nom.value == '' || document.forms[1].email.value == '' || document.forms[1].email.value.indexOf('@')<0 || document.forms[1].email.value.indexOf('.')<0 || document.forms[1].objet.value == '' || document.forms[1].message.value == '' ){
			
				alert('Merci de remplir les champs obligatoires');
				return false;
				
			}else{
			
				return true;
				
			}
		
		}
		
		</script>
		
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	
	</head>
	
	
	<body>
	
	<?php require'header.php'; ?> <!-- html du header -->
	
	<section id="page_contact">
	
		<div id="page_sup">
		
			<h2>contact</h2>
			
			<article id="partie_contact">
			
				<p>Si vous souhaitez nous contacter, nous vous invitons à utiliser la boîte d’envoi ci-dessous.<br>Nous vous répondrons sous un court délai.</p>
				
				<?php
				
					echo $chaine;
				
				?>
				
				<form action="contact_et_coordonnees.php#partie_contact" method="post" onsubmit="return valider();">
				
					<table>
						
						<tr>
							<td><input type="text" name="nom" class="input" placeholder="Nom"></td>
						</tr>
						
						<tr>
							<td><input type="text" name="email" class="input" placeholder="Email"></td>
						</tr>
						
						<tr>
							<td><input type="text" name="objet" class="input" placeholder="Objet"></td>
						</tr>
						
						<tr>
							<td><textarea name="message" placeholder="Message" rows="6"></textarea></td>
						</tr>
						
						<tr>
							<td colspan="2"><input type="submit" name="envoyez" class="envoyez" value="Envoyez"></td>
						</tr>
					
					</table>
				
				</form>
				
			
			</article>
			
		</div>
	
		<div id="page_inf">
	
			<article>

				<iframe src="https://www.google.com/maps/d/embed?mid=zRFXmjTAnvYg.k6ZNQrD0mfd0" width="280" height="320" frameborder="0" style="border:4px solid #46b5df;" allowfullscreen></iframe>
				
				<h3>Squares de l’Avre et des Moulineaux :</h3>
				
				<p class="presentation">Cette antenne est ouverte depuis l’année 2000. Elle est installée dans un appartement de 3 pièces au RDC d’un immeuble du square des Moulineaux.</p>
				
				<p class="coordonnées"><span>Adresse : </span>35, square des Moulineaux</p>
				<p class="coordonnées"><span>Téléphone : </span>01 46 05 30 56</p>
			
			</article>
			
			<article>
				
				<iframe src="https://mapsengine.google.com/map/embed?mid=zRFXmjTAnvYg.kT5FfIXvIyvE" width="280" height="320" frameborder="0" style="border:4px solid #46b5df;" allowfullscreen></iframe>
				
				<h3>Pont de Sèvres :</h3>
				
				<p class="presentation">Local historique depuis l’ouverture en 1985 qui constitue le siège social de l’association, au pied d’un immeuble. Il est d’une superficie de 160 m2.</p>
				
				<p class="coordonnées"><span>Adresse : </span>1732, allée du Vieux Pont de Sèvres</p>
				<p class="coordonnées"><span>Téléphone : </span>01 46 20 13 42</p>
			
			</article>
		
		</div>
			
	</section>

	<?php require'footer.html'; ?> <!-- html du footer -->
		
	</body>
	
</html>