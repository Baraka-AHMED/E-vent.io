<?php 


echo'<header>
  <nav>
  <input type="checkbox" id="active">
  <label for="active" class="menu-btn"><span></span></label>
  <label for="active" class="close"></label>
    <div class="wrapper">
      <ul class="menu">  
        <li><a href="index.php">Accueil</a></li>
        <li><a href="index.php?ctrl=homepage&action=contact">Contact</a></li> '?>

<?php
  if (isset($_SESSION['auth'])):
    
    echo'<li> <a href="index.php?ctrl=compte&   action=Compte">Compte</a></li>
         <li> <a href="index.php?ctrl=user&action=logout">Déconnexion</a></li>'
         ?> 
  <?php else:
    echo'<li> <a href="index.php?ctrl=user&action=signin">Connexion</a></li>' ?>
  <?php endif; ?> 

  <?php echo' 
      </ul>
    </div>
  </nav>';?> 

  <?php 
  if(isset($_SESSION['flash'])){
	  foreach($_SESSION['flash'] as $type => $message){
		echo '<div class = "erreur-' . $type . '">';
		echo '<p>' . $message . '</p>';  
		echo '</div>';
    }
	  unset($_SESSION['flash']); 
  }
  echo '</header>';
?>