<?php

class reservationManager

{




public function reservationM(SetUp $donnees)
{



    //Connexion à la base de données projetweb

        $bdd= new PDO('mysql:host=localhost;dbname=cinemaphp;charset=utf8','root','');
        $prepare = $bdd->prepare('INSERT INTO reservationplace (pseudo, commentaire) VALUES (?, ?, ?, ?, ?, ?)');
        $a = $prepare->execute(array(
          $donnees->getLogin(),
          $donnees->getPlace(),
          $donnees->getDate(),
          $donnees->getHeure(),
          $donnees->getFilm(),
          $donnees->getPrix(),
          ));
}
}
        ?>
