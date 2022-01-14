<?php
include_once("model/Connexion.php");


final class Connexioncontroller {
  public $O_connexion;

  public function __construct(){
    $this->O_connexion = new Connexion();
  }

  public function ConnexionAction(){
    $result = $this->O_connexion->getlogin();    
    if($result == 'login')
    {
      Vue::montrer('accueil/homepage');
    }
    else
    {
      echo'Identifiant ou mot de passe incorrect, Vous n\'avez pas de compte';
      
      Vue::montrer('users/sign-in');
    }
  }

  public function SessionAction(){
    if(session_status() == PHP_SESSION_NONE){
      session_start(); 
    }
  }
}

?>