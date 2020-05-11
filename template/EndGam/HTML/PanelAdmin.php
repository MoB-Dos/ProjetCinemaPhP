<!DOCTYPE html>
<html lang="fr">
<head>
	<title>EndGam</title>
	<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>

	<?php
	 require '../../../Class/ClassManager/User/UserManager.php';
     require '../../../Class/SetUp/SetUpUser.php';
		 require '../../../Class/SetUp/SetUpGestion.php';
	?>


</head>
<body>
	<!-- Page Preloder
	<div id="preloder">
		<div class="loader"></div>
	</div>-->

	<!-- Header section -->
	<?php  require_once("NavBar.php") ?>
	<!-- Header section end -->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg">
		<div class="page-info">
			<h2>Panel Admin</h2>
			<div class="site-breadcrumb">
			<a href="home.php"> Home</a>

			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- Games section -->
	<section class="games-single-page">
		<div class="container">

			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7 game-single-content">

                <h6> Ajout Admin</h6> </br>

                <form action="../../Traitement/Admin/AjoutAdminT.php" method="post">

                <select name="login" required>
						<option value="0" selected disabled >choissisez un nouvelle Admin !</option>
						<?php
						try{
                        $bdd= new PDO('mysql:host=localhost;dbname=cinemaphp;charset=utf8','root','');
						}

						catch(Exception $e){
							die('Erreur:'.$e->getMessage());
						}

						$reponse=$bdd->query('SELECT login FROM user WHERE Admin = 0');
						$data=$reponse->fetchall();
						foreach ($data as $value) {
							echo '<option>'.$value['login'].'</option>';
						}

                        ?>
                </select>




            <button type="submit" value="submit" >Ajout !</button> </br> </br>

            <h6> Ajout Film </h6> </br>

            </form>

            <form  action="../../Traitement/Admin/AjoutFilmT.php" method="post" enctype="multipart/form-data">

            <input type="text"  id="nom" name="nom" placeholder="nom du film" required /> </br> </br>

            <input type="message" id="description" name="synopsis" placeholder="description du film" required /> </br> </br>

            <input type="text"  id="salle" name="salle" placeholder="salle du film" required /> </br> </br>

            <input type="text"  id="salle" name="date" placeholder="date de sortie" required /> </br> </br>

            <input type="file"  id="photo" name="photo" placeholder="Affiche" accept="image/*" required /> </br> </br>


            <button class="primary-btn text-uppercase">Insertion !</button></br> </br>
            </form>




				<?php
			 		 $show = new UserManager();

			 		 $act = $show->Gestion();
			 		 $act = $show->delete();

?>




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
	<?php  require_once("Footer.php") ?>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky-sidebar.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
	</html>
