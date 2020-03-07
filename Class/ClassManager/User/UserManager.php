<?php


class UserManager

{

public function inscription(SetUpUser $ajout)
{

    $nom = $ajout->getNom();
    $prenom = $ajout->getPrenom();
    $mail = $ajout->getMail();
    $login =$ajout->getLogin();
    $mdp = $ajout->getMdp();
    $mdpc = $ajout->getMdp2();

    $admin=0;
    //Connexion à la base de données projetweb
    try
    {
    $bdd= new PDO('mysql:host=localhost;dbname=cinemaphp;charset=utf8','root','');
    }
    catch(Exception $e)
    {
      die('Erreur:'.$e->getMessage());
    }

    //Sélection des données dans la table utilisateur
    $reponse=$bdd->prepare('SELECT * FROM user WHERE nom=? AND prenom=? OR mail=?');
    $reponse->execute(array($nom, $prenom,$mail));

    $donne=$reponse->fetchall();

    //Si l'utilisateur existe déjà, on affiche une boite de dialogue d'alerte
    if ($donne)
    {
      echo '<body onLoad="alert(\'Utilisateur déjà existant\')">';

      echo '<meta http-equiv="refresh" content="0;URL=Inscription1.php">';
    }

    //Sinon si les mots de passe sont bien rentrés, on enregistre dans la tabe utilisateur
    else
    {
      if ($mdp == $mdpc)
      {
        $mdpc = md5($mdpc);

        $req = $bdd->prepare('INSERT INTO user (nom,prenom, login,mail,mdpc,mdp,admin) VALUES (?,?,?,?,?,?,?)');
        $req -> execute(array($nom,$prenom, $login,$mail,$mdpc,$mdp,$admin));

        //Envoi du mail de confirmation
        //$objet = "Bienvenue dans le club !";
        //$sujet = "Vous pourrez recevoir ici toutes les nouvauté ou encore les promotions sur nos fabuleux Hamburger.";
        //$DE = "projetweb932@gmail.com";
        //$email = $mail;

        //$this-> Mail($objet,$sujet,$email);

        //header("location: ../steakshopModif/Connexion-Form#form.php");
      }

      //Sinon, on affiche une boite de dialogue d'erreur
      else
      {
        echo '<body onLoad="alert(\'Veuillez entrer deux mots de passe identiques\')">';

        echo '<meta http-equiv="refresh" content="0;URL=Inscription1.php">';
      }
     }



}


public function connexion()
{




}


}

?>