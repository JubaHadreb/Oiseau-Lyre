<?php

session_start();

require'connexion.php';

if(isset($_GET['a'])){

	$a = $_GET['a'];
	
	$sql = $connexion->query(" SELECT titre_articles FROM articles WHERE id_articles='$a' ");
	$ligne = $sql->fetch();
				
}

?>

<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $ligne['titre_articles']; ?> - Association Oiseau-Lyre</title>
		
		<link rel="stylesheet" href="../css/feuille1.css">
		<link rel="stylesheet" href="../css/feuille4.css">
		<link rel="stylesheet" href="../css/responsive1.css">
		<link rel="icon" type="image/png" href="../img/favicon.png" />
		
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	
	</head>
	
	
	<body>
	
	<?php require'header.php'; ?> <!-- html du header -->
	
	<section id="page_article">
		
		<div id="article">
		
			<div id="infos_article">
			
			<?php
			
			if(isset($_GET['a'])){
				
				$a = $_GET['a'];
	
				$sql = $connexion->query(" SELECT titre_articles, image_articles, contenu_articles, date2_articles, auteur_articles FROM articles WHERE id_articles='$a' ");
				$ligne = $sql->fetch();
				
					if(isset($_GET['p'])){
					
						$p = $_GET['p'];
					
						echo '<a href="../index.php?p='.$p.'#actualites"><span>Actualités</span></a>';
					
					}else{
					
						echo '<a href="../index.php#actualites"><span>Actualités</span></a>';
					
					}
				
				echo '<p>auteur : <span>'.$ligne['auteur_articles'].'</span> - '.$ligne['date2_articles'].'</p>';
				
			?>
			
			</div><!-- Fin de infos_aticle -->
			
			<div id="image_titre">
			
				<div id="image">
				
			<?php
				
				echo '<img src="../img/article/image/'.$ligne['image_articles'].'" alt="'.$ligne['image_articles'].'" width="820px">';				
			
			?>
					
				</div>
				
				<div id="titre_article">
			
					<div id="bande_bleu_horizontal"></div>
					<div id="titre">
				
						<div id="bande_bleu_vertical"></div>
			
			<?php
			
						echo '<h2>'.$ligne['titre_articles'].'</h2>';
						
			?>
					
					</div>
			
				</div><!-- Fin de titre_article -->
			
			</div><!-- Fin de image_titre -->
			
			<div id="contenu_article">
			
				<div id="texte"><?php echo $ligne['contenu_articles']; ?></div>
				
			</div><!-- Fin de contenu_article -->
		
		</div><!-- Fin de l'article -->
		
		<section id="autres_articles">
		
			<div id="bande_bleu_horizontal2"></div>
			
			<h3>Autres articles</h3>
			
		<?php	
		
		$id = $a;

		$sql = $connexion->prepare(' SELECT  * FROM articles ');

		$sql->execute();


		while( $ligne = $sql->fetch() ){

			$liste[] = $ligne['id_articles'];
			
		}

		for($i = 0; $i< count($liste); $i++){

			if($liste[$i] == $id){
			
				$num = $i-1;
				break;
			}

		}

		$nombre = $sql->rowCount();

		$limite = ($nombre -1) - $num;
		
		$sql = $connexion->query(' SELECT id_articles, titre_articles, image_articles, contenu_articles, date1_articles FROM articles ORDER BY id_articles DESC LIMIT '.$limite.',3 ');
					
			$j = 0;			
			
			while( $ligne = $sql->fetch() ){
			
				echo '<article>';
				echo '<a href="article.php?a='.$ligne['id_articles'].'#infos_aticle"><img src="../img/article/image/'.$ligne['image_articles'].'" alt="" width="255" height="170"></a>';
				echo '<a href="../index.php#actualites"><span>Actualités</span></a>';
				echo '<p class="texte1">'.$ligne['date1_articles'].'</p>';
				echo '<h2><a href="article.php?a='.$ligne['id_articles'].'#infos_aticle">'.$ligne['titre_articles'].'</a></h2>';
				$chaine = strip_tags($ligne['contenu_articles']);
				$chaine = '<p>'.substr($chaine, 0, 150).'...</p>';
				echo $chaine;
				echo '<a href="article.php?a='.$ligne['id_articles'].'#infos_aticle" class="suite">Lire la suite</a>';
				echo '</article>';
				
				$j++;
				
			}
			
			for( $j; $j<3; $j++ ){
							
				echo '<article class="fond_article">';
				echo '</article>';
							
			}
		
		}
			
		?>
		
		</section><!-- Fin de autres_articles -->
			
	</section><!-- Fin de page_article -->

	<?php require'footer.html'; ?> <!-- html du footer -->
		
	</body>
	
</html>