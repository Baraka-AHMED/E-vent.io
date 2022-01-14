,<?php

final class Campagne {

  public function addCampagne() {
  require_once('noyau/Model.php');
  if(!empty($_POST)){
    session_start();
    $name = $_POST['name'];
    $author_id =$_SESSION['id'];
    $date_deb = $_POST['date_deb'];
    $date_fin = $_POST['date_fin'];
    $points = $_POST['points'];
    $req = $pdo->prepare('INSERT INTO campagne(id, name, author, date_deb, date_fin, points) 
                        VALUES (\'' . '\', :name, :author_id, :date_deb, :date_fin, :points)');
                 
  $req->bindParam(':name', $name );
  $req->bindParam(':author_id', $author_id);
  $req->bindParam(':date_deb', $date_deb);
  $req->bindParam(':date_fin', $date_fin);
  $req->bindParam(':points', $points);

  //$req->execute([':author_id' => $_POST['author_id']]);
  //$req->execute([':date_deb' => $_POST['date_deb']]);
  //$req->execute([':date_fin' => $_POST['date_fin']]);
  //$req->execute([':points' => $_POST['points']]);
  $req->execute();
  return 'ok';
  exit();

  
  }
}
}
?> 