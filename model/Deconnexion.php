<?php 
  session_start();
  unset($_SESSION['auth']);
  $_SESSION['flash']['sucess'] = "Vous avez été déconnecté";
  header('Location: connexion.php');
?>