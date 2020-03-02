<?php

class SetUp
{
  private $_login,$_message;


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


    public function setMessage($message) {

        if (strlen($message) > 1 && strlen($objet) <= 200) {
            $this->_message = $message;
        } else { trigger_error('erreur message',E_USER_WARNING);
          return; }
      }



public function getMessage() { return $this->_message; }
public function getLogin() { return $this->_login; }


}


 ?>
