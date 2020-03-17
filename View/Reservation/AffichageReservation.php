<?php

session_start ();

require '../../Class/ClassManager/Reservation/ReservationManager.php';



$show = new ReservationManager();
								
$act = $show->affichageReserv();


?>

<input type="submit" value="retour" onclick="window.location='../../ndex.php';" /> 