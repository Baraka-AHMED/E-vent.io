<?php

final class Connexion {

    
  public function getlogin()
  {
    require_once('noyau/Model.php');
    if(!empty($_POST)){
      session_start();

      $req = $pdo -> prepare('SELECT * FROM users WHERE username = :username');
      $req->execute(['username' => $_POST['username']]);

      $user = $req->fetch();
      if(strcmp($_POST['password'], $user->password) == 0){
        $_SESSION['auth'] = $user;
        $_SESSION['role'] = $user->role;          
        return 'login'; 
        exit();
      }
        
      else{
        return 'invalid user';
      }
    }
  }


  public function isLogged(){
  
    if(session_status() == PHP_SESSION_NONE){
      return false; 
    }
    else{
      return true;
    } 
  }
}

  
?>