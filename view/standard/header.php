<?php 
echo'<header>
  <nav>
    <label for="toggle">☰</label>
    <input type="checkbox" id="toggle">
    <ul class="menu">  
      <li><a href="<?php echo $indexaddr; ?>">Accueil</a></li>
      <li><a href="index.php?ctrl=about&action=info">À Propos</a></li> '?>

<?php
  if (isset($_SESSION['auth'])):
    echo'<li> <a href="compte.php">Compte</a></li>
            <li> <a href="deconnexion.php">Déconnexion</a></li>' ?>
  <?php else:
    echo'<li> <a href="index.php?ctrl=user&action=signin">Connexion</a></li>' ?>
  <?php endif; ?> 

  <?php echo' 
    </ul>
  </nav>
</header>'
?>