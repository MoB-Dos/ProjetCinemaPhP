
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

	<?php
	require "../../../../Class/ClassManager/Comment/CommentManager.php";
	require "../../../../Class/SetUp/SetUpComment.php";
	?>


</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<?php  require_once("../NavBar.php") ?>
	<!-- Header section end -->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="../img/page-top-bg/1.jpg">
		<div class="page-info">
			<h2>Games</h2>
			<div class="site-breadcrumb">
				<a href="../home.php"> Home</a>  /
				<a href="../films.php"><span href="../films.php" > autre Films</span></a>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- Games section -->
	<section class="games-single-page">
		<div class="container">
			<div class="game-single-preview">
				<img src="../../../../image/Affiche/Tenet.jpg" alt="">
			</div>
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7 game-single-content">
					<h2 class="gs-title">Tenet</h2>

					<h4>Synopsis : </h4>
					<p>gros film</p>

					<h4>date de sortie : </h4>
					<p>15/08/2020</p>

					
					
					
					
					<div class="geme-social-share pt-5 d-flex">
						<p>Share:</p>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>


				<div class="col-xl-3 col-lg-4 col-md-5 sidebar game-page-sideber">
					<div id="stickySidebar">
						<div class="widget-item">
							<div class="rating-widget">
								<h4 class="widget-title">Lavis des Utilisateur</h4>
								<ul color : white>

								<?Php 

								$film = "Tenet";

								$show= new CommentManager();
								
								
								$act = $show->CommentAff($film); 
								
								?>
								
								</ul>
								
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- Games end-->




	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<h2>Sinscrire à notre newsletter</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="Entrer votre mail">
				<button class="site-btn">sinscrire  <img src="img/icons/double-arrow.png" alt="#"/></button>
			</form>
		</div>
	</section>
	<!-- Newsletter section end -->


	<!-- Footer section -->
	<?php  require_once("../Footer.php") ?>
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
