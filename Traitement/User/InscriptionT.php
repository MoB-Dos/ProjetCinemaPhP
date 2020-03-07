<?php



require '../../Class/ClassManager/User/UserManager.php';
require '../../Class/SetUp/SetUpUser.php';

var_dump($_POST);

$ajout = new SetUpUser([
    'login' => $_POST['login'],
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
    'mail' =>$_POST['mail'],
    'mdp' => $_POST['mdp'],
    'mdp2' => $_POST['mdp2'],

]);

$add = new UserManager($ajout);

$r = $add->Inscription($ajout);






?>