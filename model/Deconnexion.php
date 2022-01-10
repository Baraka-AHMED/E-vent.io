<?php 

  class Deconnexion {
    
    public function logout(){
      session_start();
      unset($_SESSION['auth']);
    }
  }
?>