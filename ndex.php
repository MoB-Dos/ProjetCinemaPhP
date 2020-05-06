<?php
session_start ();

if (isset($_SESSION['login'])) {


    if ($_SESSION['admin'] == 0) {

        echo'user';

      ?>
      <input type="button" value="Deconnexion" onclick="window.location='Traitement/User/deco.php';">

      <input type="submit" value="Affichage" onclick="window.location='View/User/Info/Affichage.php';" />

      <input type="submit" value="Reservation" onclick="window.location='View/Reservation/AffichageReservation.php';" />

      <input type="submit" value="voir film" onclick="window.location='View/Film/PageFilm.php';" />

      <?php

    }
    else {


        echo 'Admin';


      ?>
      <input type="button" value="Deconnexion" onclick="window.location='Traitement/User/deco.php';">

      <input type="submit" value="Affichage" onclick="window.location='View/User/Info/Affichage.php';" />

      <input type="submit" value="Reservation" onclick="window.location='View/Reservation/AffichageReservation.php';" />

      <input type="submit" value="Ajout Admin" onclick="window.location='View/Admin/AjoutAdmin.php';" />

      <input type="submit" value="voir film" onclick="window.location='View/Film/PageFilm.php';" />

      <input type="submit" value="ajout film" onclick="window.location='View/Admin/AjoutFilm.php';" />

      <input type="submit" value="Gestion" onclick="window.location='View/User/Info/Gestion.php';" />  


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
