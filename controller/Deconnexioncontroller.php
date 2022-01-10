<?php

final class Deconnexioncontroller
{
  public $O_deconnexion;

  public function __construct(){
    $this->O_deconnexion = new Deconnexion();
  }
    public function LogoutAction()
    {
      $this->O_deconnexion->logout();
      $_SESSION['flash']['sucess'] = "Vous avez été déconnecté";
      Vue::montrer('users/sign-in');
        
    }

}