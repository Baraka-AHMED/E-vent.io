<?php
    if (isset($_POST['submit']))
    {
     /* récupérer les données du formulaire en utilisant la valeur des attributs name comme clé */
     $id = $_POST['id']; 
     $name = $_POST['name']; 
     $author = $_POST['author'];
     $description = $_POST['description']; 
     $points = $_POST['points'];
     $supplement = $_POST['supplement'];

     $sql = 'INSERT INTO idee (id, name, author, description, points, supplement,) VALUES($id, $name, $author, $description, $points, $supplement)';
  ?>

  <h1>Votre évènement à été posté !</h1>
  <img class="tick-picture" src="img/tick_vert.png" alt="Green tick">
  <p>Veuillez patienter, vous allez être redirigés vers la page d'accueil</p>
