<?php

class reservationManager

{


  public function __construct()
  {

  }
  
public function reservation(SetUpReservationPlace $ajout)
{

    $login = $ajout->getLogin();
    $place = $ajout->getPlace();
    $film = $ajout->getFilm();
    $Prix =$ajout->getPrix();
    $heure = $ajout->getHeure();
    $date = $ajout->getDate();


    //Connexion à la base de données projetweb
    try
    {
    $bdd= new PDO('mysql:host=localhost;dbname=cinemaphp;charset=utf8','root','');
    }
    catch(Exception $e)
    {
      die('Erreur:'.$e->getMessage());
    }




        $req = $bdd->prepare('INSERT INTO reservationplace (login, place, date ,heure ,film ,prix) VALUES (?,?,?,?,?,?)');
        $req -> execute(array($login, $place, $date, $heure, $film, $prix));


}
}
        ?>
