<?php
require '../../Class/ClassManager/Admin/AjoutFilmManager.php';


$nametrue = $_POST['nom'];

//$salle= $_POST['salle'];

//$description = $_POST['description'];

$add = new AjoutFilmManager();

$act = $add->AjoutImage($nametrue, $_FILES['photo']);

$act2 = $add->AjoutPage($nametrue );

?>