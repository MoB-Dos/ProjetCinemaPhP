<?php
require '../../Class/ClassManager/Admin/AjoutFilmManager.php';
require '../../Class/SetUp/SetUpSalleFilm.php';


$ajout = new SetUpSalleFilm([
    'salle' => $_POST['salle'],
    'description' => $_POST['description'],
]);


$nametrue = $_POST['nom'];


$add = new AjoutFilmManager();

$act = $add->AjoutImage($nametrue, $_FILES['photo']);

$act2 = $add->AjoutPage($nametrue );

?>