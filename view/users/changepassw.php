  
    <nav class = "formulaire">
      <form action="index.php?ctrl=user&action=Changepassword" method="POST">
        <h2>Entrez votre nouveau mot de passe</h2>
        <input type="password" placeholder="Entrer votre nouveau mot de passe" name="motdp" required>
        <h2>Confirmez votre nouveau mot de passe</h2>
        <input type="password" placeholder="Confirmez votre nouveau mot de passe" name="confmdp" required>
        <a><input type="submit"  name="action" value='Valider'></a>
      </form>
    </nav>