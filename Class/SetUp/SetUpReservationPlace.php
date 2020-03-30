<?php


class SetUpReservationPlace
{
  private $_login,$_date,$_place,$_film,$_heure, $_forfait,$_prix,$_tabPrix;

  private $Etud = 7.50;
  private $Enf = 5;
  private $Nav = 8;
  private  $Norm = 11;


  public function __construct(array $donnees)
  {
      $this->hydrate($donnees);
  }

  // Un tableau de données doit être passé à la fonction (d'où le préfixe « array »).
  public function hydrate(array $donnees)
  {
      foreach ($donnees as $key => $value)
      {
          // On récupère le nom du setter correspondant à l'attribut.
          $method = 'set'.ucfirst($key);

          // Si le setter correspondant existe.
          if (method_exists($this, $method))
          {
              // On appelle le setter.
              $this->$method($value);
    
          }

      }
  }


  public function setLogin($login) {
      if (is_string($login) && strlen($login) <= 100) {
          $this->_login = $login;
      } else {trigger_error('erreur login',E_USER_WARNING);
        return; }
  }

public function setPlace($place) {

  if ($place >= 1 && $place <= 20) {
      $this->_place = $place;
  } else { trigger_error('erreur place',E_USER_WARNING);
    return; }
}


public function setPrix($prix) {

  if(isset($tabPrix)){
  $Prix = (($Etud*$TabPrix['etudiant'])+($Enf*$TabPrix['enfant'])+($Nav*$TabPrix['navigo'])+($Norm*$TabPrix['normal']));
  $this->_prix = $Prix;
  } else { trigger_error('erreur prix',E_USER_WARNING);
    return; }
}



public function setDate($date) {

/*  try{
    $bdd= new PDO('mysql:host=localhost;dbname=projetrestauration;charset=utf8','root','');
    }

    catch(Exception $e){
      die('Erreur:'.$e->getMessage());
    }

  $req = $bdd->prepare ('SELECT COUNT(*) as ladate FROM reservationtable WHERE date = ?  ');
  $req -> execute(array($date));


  $donnees=$req->fetch();

 if ($donnees['ladate'] < 50) {
      $this->_date = $date;
  } else { trigger_error('erreur date',E_USER_WARNING); */
  $this->_date = $date;

    return; }



//separation

public function setFilm($film) {

    if (isset($film)) {
      $this->_film = $film;
    } else { trigger_error('erreur film',E_USER_WARNING);
      return; }
  }


   /* public function setForfait($forfait) {

        if ($_POST['film']="Three Kingdoms") {
          if ($_POST['forfait']="etudiant"){
            $forfait=15-15*0.90;
          }

          if ($_POST['forfait']="enfant"){
            $forfait=15-15*0.50;
          }

          if ($_POST['forfait']="navigo"){
            $forfait=15-15*0.99;
          }
        }

        if ($_POST['film']="Joker") {
          if ($_POST['forfait']="etudiant"){
            $forfait=20-20*0.90;
          }

          if ($_POST['forfait']="enfant"){
            $forfait=20-20*0.50;
          }

          if ($_POST['forfait']="navigo"){
            $forfait=20-20*0.99;
          }
        }

        if ($_POST['film']="The Witcher") {
          if ($_POST['forfait']="etudiant"){
            $forfait=30-30*0.90;
          }

          if ($_POST['forfait']="enfant"){
            $forfait=30-30*0.50;
          }

          if ($_POST['forfait']="navigo"){
            $forfait=30-30*0.99;
          }
        }

        if ($_POST['film']="Bleds Genocide") {
          $forfait=150-150*0.90;
        }

        if ($_POST['forfait']="enfant"){
          $forfait=150-150*0.50;
        }

        if ($_POST['forfait']="navigo"){
          $forfait=150-150*0.99;
        }
        


        $this->_forfait= $forfait;
          return;
        }*/




      public function setHeure($heure) {

        /*if () { //je ferais ce set quand je verais le format de l'heure recupéré sur sql afin de la comparer à x > date actuel
            $this->_heure = $heure;
        } else { trigger_error('erreur heure',E_USER_WARNING);*/
        $this->_heure = $heure;

          return; }






public function getFilm() { return $this->_film; }
public function getHeure() { return $this->_heure; }
/*public function getForfait() { return $this->_forfait; }*/
public function getDate() { return $this->_date; }
public function getPlace() { return $this->_place; }
public function getLogin() { return $this->_login; }
public function getPrix() { return $this->_prix; }


}



 ?>
