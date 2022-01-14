
<section class = "Connex">
  <img src="view/img/image_connexion.png" id="img_conx" alt="img conx">
  
  <?php if (!empty($erreurs)): ?>
    <div class = "erreur">
      <p>Voici les erreurs qui ont pu se passer :</p>
      <ul>
        <?php foreach($erreurs as $erreur): ?>
        <li><?= $erreur; ?> </li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>
  
    <form action="index.php?ctrl=connexion&action=connexion" method="POST">
      <h2>Connectez-vous</h2>
      <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
      <input type="password" placeholder="Entrer le mot de passe" name="password" required>
      <a href="index.php?ctrl=mdpoublie&action=mdpoublie" id="mdp"> Mot de passe oublié ?</a>
      <input type="submit"  name="action" value='Connexion'></a>
      <p id="pasdecompte"> Vous n'avez pas de compte ? </p>
      <a href="index.php?ctrl=contact&action=contact"><input type="button" id='noaccount' value='Faire une demande de compte'></a>
    </form>
</section>