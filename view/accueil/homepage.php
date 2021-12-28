<?php
  if(session_status() == PHP_SESSION_NONE){
    session_start();
  }
  
  $indexaddr = 'index.php';
  $aboutaddr = 'about.php';
?>

  <head>
    <link href="view\css\style.css" rel="stylesheet" type="text/css"/>
    <link href="view\css\index.css" rel="stylesheet" type="text/css"/>
  </head>
  
  <body>
   
    <div class="titre-accueil">
      <h1>E-Event . IO !</h1>
      <p>Bienvenue sur E-Event.IO! Le meilleur site de gestion d’idéations d’événements.</p>
    </div>
    <article class="annonces">
      <h3>Propositions d'évènements</h3>
      <article class="annonce">
        <h5>03 March 2018</h5>
        <p>Premiere annonce</p>
      </article>
      <article class="annonce">
        <h5>04 March 2018</h5>
        <p>Deuxieme annonce</p>
      </article>
      <article class="annonce">
        <h5>05 March 2018</h5>
        <p>Troisième annonce</p>
      </article>
    </article>
    <script src="script.js"></script>
  </body>

</html>