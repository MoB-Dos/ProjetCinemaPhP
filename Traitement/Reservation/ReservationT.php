<?php

require '../../Class/ClassManager/reservation/reservationManager.php';
require '../../Class/SetUp/SetUpReservationPlace.php';

$somme = $_POST['etudiant'] +  $_POST['enfant']+  $_POST['navigo']+  $_POST['normal'];

if($somme == $_POST['place'] )
{
  
  
  $TabPrix= [
  "etudiant" => $_POST['etudiant'],
  "enfant" => $_POST['enfant'],
  "navigo" => $_POST['navigo'],
  "normal" => $_POST['normal'],
];

$ajoutReserv = new SetUpReservationPlace([
  'login' => $_POST['login'],
  'place' => $_POST['place'],
  'date' => $_POST['date'],
  'heure' => $_POST['heure'],
  'film' => $_POST['film'],
  'TabPrix' => $TabPrix,
]);

$add = new reservationManager($ajoutReserv);
$act = $add->reservationM($ajoutReserv);

}
else
{
  echo "no";
}
?>
