<!DOCTYPE html>
<html lang="fr">
<head>
	<title>EndGam - Gaming Magazine Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="../img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/slicknav.min.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="../css/magnific-popup.css"/>
	<link rel="stylesheet" href="../css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="../css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder
	/*<div id="preloder">
		<div class="loader"></div>
	</div>-->

	<!-- Header section -->
	<?php  require_once('../NavBar.php') ?>

	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="../img/page-top-bg/1.jpg">
		<div class="page-info">
			<h2>Film</h2>
			<div class="site-breadcrumb">
				<a href="../home.html">Accueil</a>  /
				<span>Film</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->




	<!-- Games section -->
	<section class="games-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-7 col-lg-8 col-md-7">
					<div class="row">
						<?php
							// on se connecte à notre base
							try
							{
							$bdd= new PDO('mysql:host=localhost;dbname=cinemaphp;charset=utf8','root','');
							}
							catch(Exception $e)
							{
							  die('Erreur:'.$e->getMessage());
							}

							// lancement de la requête. on sélectionne les news que l'on va ordonner suivant l'ordre "inverse" des dates (de la plus récente à la plus vieille : DESC) tout en ne sélectionnant que le nombre voulu de news à afficher (LIMIT)
							$req = $bdd->query("SELECT * FROM film");
							

							$data=$req->fetchall();

							// on compte le nombre de news stockées dans la base de données
							/*$nb_news = mysql_num_rows($req);

							if ($nb_news == 0) {
								echo 'Aucune news enregistrée.';
							}
							else {*/
							// si on a au moins une news, on l'affiche


							if(isset($data))
							{
							foreach ($data as $value) {
        
						
							  
							// on décompose la date
							

							// on affiche les résultats
							/*echo '<br />News de : ' , htmlentities(trim($data['auteur'])) , '<br />';
							echo 'Titre : ' , htmlentities(trim($data['titre'])) , '<br />';
							echo 'Postée le : ' , $jour , '/' , $mois , '/' , $an , ' à ' , $heure , ':' , $min , ':' , $sec , '<br /><br />';
							echo 'News : ' , nl2br(htmlentities(trim($data['texte_news']))) , '<br />';*/


							echo '<div class="col-lg-4 col-md-6">
								  <div class="game-item">
								  <img src='.$value['image'].' alt="#" width: 20px;
								  height: 50px;>
								  <h5>'.$value['nom'].'</h5>
								  <a href='.$value['lien'].' class="read-more">En savoir plus  <img src="img/icons/double-arrow.png" alt="#"/></a>
							      </div>
							      </div>';
							}
							}else {

								echo "pas de commentaire";

							}

					
							
						?>


					</div>
					<!--<div class="site-pagination">
						<a href="#" class="active">01.</a>
						<a href="#">02.</a>
						<a href="#">03.</a>
					</div>-->

				</div>

				<div class="col-xl-3 col-lg-4 col-md-5 sidebar game-page-sideber">
					<div id="stickySidebar">
						<div class="widget-item">
							<div class="categories-widget">
								<h4 class="widget-title">categories</h4>
								<ul>
									<li><a href="">Games</a></li>
									<li><a href="">Gaming Tips & Tricks</a></li>
									<li><a href="">Online Games</a></li>
									<li><a href="">Team Games</a></li>
									<li><a href="">Community</a></li>
									<li><a href="">Uncategorized</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Games end-->


	<!-- Featured section -->
	<section class="featured-section">
		<div class="featured-bg set-bg" data-setbg="../img/featured-bg.jpg"></div>
		<div class="featured-box">
			<div class="text-box">
				<div class="top-meta">30.03.20  / <a href="http://www.allocine.fr/">Allociné</a></div>
				<h3>Nouveau film annoncé</h3>
				<p>Léo est un scénariste passionné par son métier mais âgé, vivant avec sa jeune compagne Morgane qui, avec le temps et au péril de sa vie, va vouloir se séparer de lui et tombe amoureuse d’un comédien, Julien. Léo, souvent violent se révèle progressivement être un psychopathe dangereux...</p>
				<a href="#" class="read-more">Read More  <img src="../img/icons/double-arrow.png" alt="http://www.allocine.fr/film/sorties-semaine/"/></a>
			</div>
		</div>
	</section>
	<!-- Featured section end-->



	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<h2>S'inscrire à notre newsletter</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="Entrer votre mail">
				<button class="site-btn">s'inscrire  <img src="../img/icons/double-arrow.png" alt="#"/></button>
			</form>
		</div>
	</section>
	<!-- Newsletter section end -->


	<!-- Footer section -->
	<?php  require_once('../Footer.php') ?>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.slicknav.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/jquery.sticky-sidebar.min.js"></script>
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/main.js"></script>

	</body>
</html>
