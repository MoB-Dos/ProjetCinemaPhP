<?php



require '../../../Class/ClassManager/User/UserManager.php';
require '../../../Class/SetUp/SetUpGestion.php';

var_dump($_POST);

$Setup = new SetUpGestion([
    'mail' => $_POST['mail'],

]);

$add = new UserManager($Setup);

$act = $add->MdpOublier($Setup);

$ajout = new SetUpGestion([

    'mdp' => $_POST['mdp'],
    'mdp2' => $_POST['mdp2'],

]);
$act = $add->MdpOublier2($ajout);

?>
