
 <section class = "Connex">
      <img src="view\img\image_connexion.png" class="img_conx" alt="img conx">
      
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

    
      <nav class = "connexion">
        <form action="" method="POST">
          <h2>Connectez-vous</h2>
          <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
          <input type="password" placeholder="Entrer le mot de passe" name="password" required>
          <a href="mdpoublie.php" id="mdp"> Mot de passe oublié ?</a>
          <input type="submit" id='submit' value='Connexion'>
          <p id="pasdecompte"> Vous n'avez pas de compte ? </p>
          <input type="submit" id='noaccount' value='Faire une demande de compte'>
        </form>
    </section>

    