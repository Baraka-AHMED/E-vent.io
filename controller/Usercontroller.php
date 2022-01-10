<?php

final class Usercontroller 
{
  
    public function SigninAction()
    {
        Vue::montrer('users/sign-in');/* array('connexion' =>  $O_connexion->Connexion()));*/
        
     
    }
     

    public function ConnexionAction()
    {
      Vue::montrer('accueil/contact');
        if(!empty($_POST)) {
            
            Vue::montrer('accueil/contact');
            
            /*
            require_once 'view/users/sign-in.php';
            require_once 'noyau/Model.php';

            session_start();
          
            $req = $pdo -> prepare('SELECT * FROM users WHERE username = :username');
            $req->execute(['username' => $_POST['username']]);
          
            $user = $req->fetch();
          
            if(strcmp($_POST['password'], $user->password) == 0) {
              $_SESSION['auth'] = $user;
              $_SESSION['role'] = $user->role;
              }
            else{
              $erreurs = array("Identifiant ou mot de passe incorrect", "Vous n'avez pas de compte");
            }
            echo 'vous êtes connectez';
            var_dump($dbLink);*/
        }  

    

    }
}



