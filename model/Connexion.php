<?php


require_once 'noyau/Model.php'


 final class TestConnexion{
    global $bdd;
     
    public function login(login, mdp){
         
    $requete = $bdd -> prepare('SELECT * FROM users WHERE username = ? and password = ?');
    $ligne = $requete->execute(array(username, mdp);
    return $ligne;
     
         
    }

    public function Connexion()
    {
      echo'on est dedans';
        if(!empty($_POST)) {
            require_once 'view/users/sign-in.php'
            require_once 'noyau/Model.php';
            session_start();
          
            $req = $pdo -> prepare('SELECT * FROM users WHERE username = :username OR email = :username');
            $req -> execute(['username' => $_POST['username']]);
          
            $user = $req->fetch();
          
            if(password_verify($_POST['password'], $user->password)) {
              $_SESSION['auth'] = $user;
              header('Location: index.php');
              exit();
            }
            else{
              $erreurs = array("Identifiant ou mot de passe incorrect", "Vous n\'avez pas de compte");
            }
          }
    }
}

?>
