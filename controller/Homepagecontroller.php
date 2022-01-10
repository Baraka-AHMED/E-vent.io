<?php

final class Homepagecontroller
{
    public function defautAction()
    {
      
        $O_homepage =  new Homepage();

        Vue::montrer('accueil/homepage', array('homepage' =>  $O_homepage->donneMessage()));
    }

   public function ConnexionAction()
    {
      if(!empty($_POST)) {   
        require_once 'noyau/Model.php';
        
        session_start();

        $req = $pdo -> prepare('SELECT * FROM users WHERE username = :username');
        $req->execute(['username' => $_POST['username']]);

        $user = $req->fetch();

        if(strcmp($_POST['password'], $user->password) == 0) {
          $_SESSION['auth'] = $user;
          $_SESSION['role'] = $user->role;
          Vue::montrer('accueil/homepage');
          exit();
        }
        else{
          $erreurs = array("Identifiant ou mot de passe incorrect", "Vous n'avez pas de compte");
        }
      }  
      
    }
    
    

}

?>