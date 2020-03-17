<?php


class AdminManager

{


public function AjoutAdmin($login)
{


    var_dump($login);

    try
    {
    $bdd= new PDO('mysql:host=localhost;dbname=cinemaphp;charset=utf8','root','');
    }
    catch(Exception $e)
    {
      die('Erreur:'.$e->getMessage());
    }

    //Sélection des données dans la table utilisateur
    $reponse=$bdd->prepare('UPDATE user SET admin = 1 WHERE login = :login');
    $reponse->execute(array('login' => $login,));

    //header("location: ../../ndex.php");

}


}




?>