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

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Connexion</title>
    <link href="css/style.css"  rel="stylesheet" type="text/css" />
    <link href="css/formulaire.css" rel="stylesheet">
    <link href="css/connexion.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;800&display=swap" rel="stylesheet">
    
  </head>

  <body>
      <!-- CREATION D'UNE BANNIERE HAUT DE PAGE -->
    <section class ="intro">
      <nav class="menu">
        <ul class="menu">  
          <li><a href="index.html">Accueil</a></li>
          <li><a href="about.html">À Propos</a></li>
          <li><a href="#">Partner</a></li>
          <li><a href="#">Prix</a></li>         
          <li><a href="contact.php">Contact</a></li>
        </ul>
    </section>
    
    <section class = "Connex">
      <img src="img/image_connexion.png" class="img_conx" alt="img conx">
      
      <?php if (!empty($erreurs)): ?>
        <div class = "erreur-danger">
          <p>Voici les erreurs qui ont pu se passé :</p>
          <ul>
            <?php foreach($erreurs as $erreur): ?>
            <li><?= $erreur; ?> </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

    
      <nav class = "connexion">
        <form action="" method="POST">
          <h2>Connectez-vous</h2>
          <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
          <input type="password" placeholder="Entrer le mot de passe" name="password" required>
          <a href="mdpoublie.php" id="mdp"> Mot de passe oublié ?</a>
          <input type="submit" id='submit' value='Connexion'>
          <p id="wsh"> Vous n'avez pas de compte ? </p>
          <input type="submit" id='noaccount' value='Faire une demande de compte'>
        </form>
    </section>

<?php require 'footer.php'; ?>