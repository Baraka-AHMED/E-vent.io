<?php

final class Annonce {

  public function addAnnonce() {
  require_once('noyau/Model.php');
  if(!empty($_POST)){
    session_start();
    $name = $_POST['name'];
    $author_id =$_SESSION['id'];
    $description = $_POST['description'];
    $null = NULL;
    $req = $pdo->prepare('INSERT INTO idee(id, name, author, description, points, supplement) 
                        VALUES (\'' . '\', :name, :author_id, :description, 0, supplement)');
  //$req->bindParam(':id', $null);                  
  $req->bindParam(':name', $name );
  $req->bindParam(':author_id', $author_id);
  $req->bindParam(':description', $description);
  //$req->bindParam(':points', $null);
  //$req->bindParam(':supplement', $null);
  $req->execute();
  var_dump($req);
  /*$exec = $res->execute(array(":name"=>$firstname,":author_id"=>$author_id, ":description"=>$description ));  */
  return 'ok';
  exit();

  
  }
}
}
?> 