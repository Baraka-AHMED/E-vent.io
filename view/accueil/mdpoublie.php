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
          <li><a href="connexion.php">Connexion</a></li>         
          <li><a href="contact.html">Contact</a></li>
        </ul>
    </section>
    
    <nav class = "formulaire">
      <form action="" method="POST">
        <h2>Entrez votre mail pour reinitialiser votre mot de passe</h2>
        <input type="email" placeholder="Entrer votre mail" name="mail" required>
      </form>
    </nav>
  
<?php require "footer.php" ?>