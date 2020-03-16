<?php
session_start ();

if (isset($_SESSION['login'])) {


    if ($_SESSION['admin'] == 0) {
  
        echo'user';
  
      ?>
      <input type="button" value="Deconnexion" onclick="window.location='Traitement/User/deco.php';">

      <input type="submit" value="Affichage" onclick="window.location='View/User/Info/Affichage.php';" />    
      <?php
  
    }
    else {
  
  
        echo 'Admin';

       
      ?>
      <input type="button" value="Deconnexion" onclick="window.location='Traitement/User/deco.php';">

      <input type="submit" value="Affichage" onclick="window.location='View/User/Info/Affichage.php';" />    
      <?php
  
  
    }
  }
  else {
  
      echo 'bvn';
    
      ?>
      <input type="submit" value="Connexion" onclick="window.location='View/User/Connexion.html';" />     

      <input type="submit" value="inscription" onclick="window.location='View/User/inscription.html';" />    
      

      <?php

      
  }

?>




