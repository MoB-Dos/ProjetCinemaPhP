<?php

class reservationManager

{


public function reservationM(SetUpReservationPlace $ajoutReserv)
{
  $login = $ajoutReserv->getLogin();
  $place = $ajoutReserv->getPlace();
  $Date = $ajoutReserv->getDate();
  $heure =$ajoutReserv->getHeure();
  $film = $ajoutReserv->getFilm();
  $Prix = $ajoutReserv->getPrix();

var_dump($Prix);

  try
  {
  $bdd= new PDO('mysql:host=localhost;dbname=cinemaphp;charset=utf8','root','');
  }
  catch(Exception $e)
  {
    die('Erreur:'.$e->getMessage());
  }
 
        $req = $bdd->prepare('INSERT INTO reservationplace (login,place,date,heure,film,prix) VALUES (?,?,?,?,?,?)');
        $req -> execute(array($login,$place,$Date,$heure,$film,$Prix));
        
}

public function affichageReserv(){

  try
  {
  $bdd= new PDO('mysql:host=localhost;dbname=cinemaphp;charset=utf8','root','');
  }
  catch(Exception $e)
  {
    die('Erreur:'.$e->getMessage());
  }

  $req = $bdd->prepare('SELECT * FROM reservationplace WHERE login = :login');
  $req->execute(array('login' => $_SESSION['login']));

  $data=$req->fetchall();


  //Affichage de chacune des donnees selon le profil_id
  foreach ($data as $value) {

      echo " votre nombre de place : ".$value['place'].'<br><br>';
      echo "date : ".$value['date'].'<br><br>';
      echo "heure : ".$value['heure'].'<br><br>' ;
      echo "votre film: ".$value['film'].'<br><br>' ;
      echo "prix: ".$value['prix'].'<br><br>' ;
      echo "3D: ".$value['3D'].'<br><br>' ;
    }

}
}
       



/*public function reservationM(SetUp $donnees){
  //Connexion à la base de données projetweb

    $bdd= new PDO('mysql:host=localhost;dbname=cinemaphp;charset=utf8','root','');
    $prepare = $bdd->prepare('INSERT INTO reservationplace (login, place, date, heure, film, prix) VALUES (?, ?, ?, ?, ?, ?)');
    $a = $prepare->execute(array(
      $donnees->getLogin(),
      $donnees->getPlace(),
      $donnees->getDate(),
      $donnees->getHeure(),
      $donnees->getFilm(),
      $donnees->getForfait(),
      ));

}
}*/

?>
