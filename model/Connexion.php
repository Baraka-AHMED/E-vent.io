<?php

final class Connexion
{
    private $_S_message = "connexion";

    public function donneMessage()
    {
        return $this->_S_message ;
    }

}
?>

<?php

if(!empty($_POST)) {
  
  require_once 'database.php';
  session_start();

  $req = $pdo -> prepare('SELECT * FROM users WHERE username = :username OR email = :username');
  $req -> execute(['username' => $_POST['username']]);

  $user = $req->fetch();

  if(password_verify($_POST['password'], $user->password)) {
    $_SESSION['auth'] = $user;
    header('Location: index.html');
    exit();
  }
  else{
    $erreurs = array("Identifiant ou mot de passe incorrect", "Vous n'avez pas de compte");
  }
}

?>