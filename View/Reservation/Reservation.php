<body>
<head>


</head>
<form action="../../Traitement/Reservation/ReservationT.php" method="post">

  <?php

  session_start ();

  if(isset($_SESSION['login']))
  {
    
    echo $_SESSION['login'].'<br></br>';

  }else{
    echo "pas connecter";
  }
    
  
    $today =  date("Y/m/d") ;
  ?>

  <input type="number" class="form-control" id="place" name="place" placeholder="Entrer le nombre de Place ptdr " required ><br></br>

    <input type="date" class="form-control" id="$date" name="date" placeholder="Entrer la Date ptdr " min=<?php $today ?>  required > (date) <br></br>


   Quelle film voulez-vous visionez dans notre cinéma ?<br/>
   <select name="classe" id="mySelect"  onchange="myFunction()">
	 <?php
      try
      {
	    $bdd= new PDO('mysql:host=localhost;dbname=cinemaphp;charset=utf8','root','');
	    }
      catch(Exception $e)
      {
		  die('Erreur:'.$e->getMessage());
	    }            

	   $reponse=$bdd->query('SELECT film FROM film Where ');
	   $donne=$reponse->fetchall();
    
     foreach ($donne as $value) 
     {
		   echo '<option>'.$value['film'].'</option>';
	   }          

	  ?>
   </select><br><br>
   
   <p id="demo"></p>
   
   <script>
    
    function myFunction() 
    {
    var x = document.getElementById("mySelect").value;
    document.getElementById("demo").innerHTML = "You selected: " + x;
    }
   
   </script>

<select name="classe" id="mySelect"  onchange="myFunction()">
	 <?php
      try
      {
	    $bdd= new PDO('mysql:host=localhost;dbname=cinemaphp;charset=utf8','root','');
	    }
      catch(Exception $e)
      {
		  die('Erreur:'.$e->getMessage());
	    }            

	   $reponse=$bdd->query('SELECT horaire FROM film Where film = ?');
	   $donne=$reponse->fetchall();
    
     foreach ($donne as $value) 
     {
		   echo '<option>'.$value['film'].'</option>';
	   }          

	  ?>
   </select><br><br>



   
   Nombre de Reduction : <br/>
  <input type="number" name="etudiant"/> tarif etudiant<br />
  <input type="number" name="enfant" /> tarif enfant<br />
  <input type="number" name="navigo" /> navigo<br />
  <input type="number" name="normal" /> non :(<br /></br>

  
  <button type="submit" value="submit" class="primary-btn text-uppercase">Souscrire à un visionage de film qualitatif</button><br></br>
</form>


<input type="submit" value="retour" onclick="window.location='../../ndex.php';" />


</body>
