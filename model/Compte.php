




<?php

final class Compte {
  
  public static function getUsername()
  {
    require_once('noyau/Model.php');
      $username = $user->username;
      return $this->$username;
  }

    public static function getEmail()
  {

      $email = $user->email;
      return $email;

  }

    public function getRole()
  {

      $role = $user->role;
      return $role;

  }
}

?>