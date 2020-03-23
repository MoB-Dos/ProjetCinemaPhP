<?php

require '../../Class/ClassManager/reservation/reservationManager.php';
require '../../Class/SetUp/SetUpReservationPlace.php';


$a = new SetUp([
  'login' => $_POST['login'],
  'place' => $_POST['place'],
  'date' => $_POST['date'],
  'heure' => $_POST['heure'],
  'film' => $_POST['film'],
  'forfait' => $_POST['forfait'],
]);

$oui = new reservationManager();
$oui ->reservationM($a);

?>
