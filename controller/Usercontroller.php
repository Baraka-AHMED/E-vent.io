<?php

final class Usercontroller 
{
  
    public function SigninAction()
    {
        Vue::montrer('users/sign-in');
        
     
    }
    public function __construct(){
    $this->O_connexion = new Connexion();
    $this->O_deconnexion =new Deconnexion();
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
  
    public function LogoutAction()
    {
      $this->O_deconnexion->logout();
      $_SESSION['flash']['sucess'] = "Vous avez été déconnecté";
      Vue::montrer('users/sign-in');
        
    }
}
    



