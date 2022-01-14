<?php

final class Comptecontroller
{
  public $O_compte;
  public function __construct(){
    $this->O_compte = new Compte();
  }

  public function CompteAction()
    {
        Vue::montrer('users/compte');
    }

    public function getUserAction($attribut){
      if ($attribut == 'username'){
        return $_SESSION['auth']->username; 
      }
      if ($attribut == 'email'){
        return $this->O_compte->getEmail();
      }
      if ($attribut == 'role'){
        return $this->O_compte->getRole();
      }
      else{
        echo 'erreur de la nature';
      }
    }

}