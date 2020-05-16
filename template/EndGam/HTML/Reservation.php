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
			<h2>Reservation</h2>
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
			
					
				<form action="../../../Traitement/Reservation/ReservationT.php" method="post">

  <?php

  

  if(isset($_SESSION['login']))
  {
    
	


	?>

	<h6 style="font-size:150px color:white"> <?php echo $_SESSION['login'] ?></h6> <br></br>

	<?php
	
	$today =  date("Y/m/d") ;
	?>
  
	<!--<input type="number" class="form-control" id="place" name="place" placeholder="Entrer le nombre de Place " required  ><br></br>-->
  
	  <input type="number" name="NbmPlace" onchange="myFunction()"  id="mySelect4"  min=0  /> tarif etudiant <br></br>
  
	  <input type="date" class="form-control" id="$date" name="date" placeholder="Entrer la Date ptdr " min=<?php $today ?>  required > (date) <br></br>
  
  
	 Quelle film voulez-vous visionez dans notre cinéma ?<br/>
	 <select name="film" >
	   <?php
		try
		{
		  $bdd= new PDO('mysql:host=localhost;dbname=cinemaphp;charset=utf8','root','');
		  }
		catch(Exception $e)
		{
			die('Erreur:'.$e->getMessage());
		  }            
  
		 $reponse=$bdd->query('SELECT film FROM film ');
		 $donne=$reponse->fetchall();
	  
	   foreach ($donne as $value) 
	   {
			 echo '<option>'.$value['film'].'</option>';
		 }          
  
		?>
	 </select><br><br>
  
  
	 <select name="heure" id="heureSelect">
	  <option value="">--choisissez une heure--</option>
	  <option value="10h">10h</option>
	  <option value="12h">12h</option>
	  <option value="15h">15h</option>
	  <option value="21h">21h</option>
	  <option value="24h">24h</option>
	  </select><br></br>
  
  
  
  
  
  
	 
	 <script>
	  
	  function myFunction() 
	  {
  
	  var a = document.getElementById("mySelect").value;
	  var b = document.getElementById("mySelect1").value;
	  var c = document.getElementById("mySelect2").value;
	  var d = document.getElementById("mySelect3").value;
  
	  var f = document.getElementById("mySelect4").value;
  
	  var e = parseInt(a) + parseInt(b) + parseInt(c) + parseInt(d);
  
	  test(e,f)
	  
	  
  
	  }

	  function test(e,f)
	  {
  
		if(parseInt(e) == parseInt(f) )
	  {
		
	   
		
		document.getElementById("submit").type = "submit"; 
  
		
		document.getElementById("demo3").innerHTML = "";
  
  
	  }else
	  {
		  
		document.getElementById("demo3").innerHTML = "les comptes ne sont pas bon ou il manque des 0 ";
	  
	  }
  
	  }
	 
	 </script>
  
	 Nombre de Reduction : <br/>
	<input type="number" name="etudiant" onchange="myFunction()"  id="mySelect"  min=0  value="0"/> tarif etudiant <br />
	<input type="number" name="enfant" onchange="myFunction()"  id="mySelect1" min=0  value="0"/> tarif enfant<br />
	<input type="number" name="navigo" onchange="myFunction()"  id="mySelect2" min=0  value="0"/> navigo<br />
	<input type="number" name="normal" onchange="myFunction()"  id="mySelect3" min=0  value="0"/> rien<br /></br>
  
   
  
	<p id="demo3"></p>
  
  
  
	
  
	
	<input type="hidden" id="submit" value="submit" ><br></br>
  
	<input type="hidden" name="prix" value="retour" /> <br /></br>
  
  	</form>
  
	</div>
	
	</div>
<?php

  }else{
	
	?>

		<p style="font-size:60px "> Veuillez-vous connecter pour reserver une place </p>


	<?php



  }
    
  ?>
    
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
