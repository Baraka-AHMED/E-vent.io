<?php
  $indexaddr = 'index.php';
  $aboutaddr = 'about.php';
  // Comme ca si on change les noms des pages c'est facile de les changer partout, faudra rajouter celles qu'on a pas encore faites
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>À propos</title>
    <link href="css/style.css" href="about.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;800&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- CREATION D'UNE BANNIERE HAUT DE PAGE -->
   <header>
      <nav>

        <label for="toggle">☰</label>
        <input type="checkbox" id="toggle">

        <ul class="menu">  
          <li><a href="<?php echo $indexaddr; ?>">Accueil</a></li>
          <li><a href="<?php echo $aboutaddr; ?>">À Propos</a></li>
          <li><a href="#">Partner</a></li>
          <li><a href="#">Prix</a></li>
          <li><a href="connexion.html">Connexion</a></li>
        </ul>
    </header>
    <div class="Text-info"
      <strong><h1> QUI SOMMES-NOUS ?</h1></strong>
    <script src="script.js"></script>
  </body>
</html>