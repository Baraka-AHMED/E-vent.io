<?php
  if(!empty($_POST)) {
  require_once 'database.php';
  session_start();

  $req = $pdo -> prepare('SELECT * FROM users email = ?');
  $req -> execute([$_POST['email']]);
  $user = $req->fetch();
  
    if($user){
      $newpassw = generepassw();

      $pdo -> prepare ('UPDATE users SET password = ? where id = ?')->execute([$newpassw, $user->id]);

      mail($_POST['email'], 'Reinitialisation mot de passe', "Voici votre nouveau mot de passe : $newpassw");
      $_SESSION['flash']['sucess'] = 'Un email de reinitialisation à bien été envoyé.';
      header('Location: connexion.php');
      exit();
    }else{
      $_SESSION['flash']['danger'] = "L'email ne correspond à aucun compte";
    }
  }
?>
    
    <nav class = "formulaire">
      <form action="" method="POST">
        <h2>Entrez votre mail pour reinitialiser votre mot de passe</h2>
        <input type="email" placeholder="Entrer votre mail" name="mail" required>
      </form>
    </nav>
  
