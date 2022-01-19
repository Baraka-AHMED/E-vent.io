<?php

final class Campagne {

  public function getCampagne(){
    require('noyau/Model.php');
      $req = $pdo->query('SELECT * FROM campagne');
      $reqq = $req -> fetch();
      return $reqq;
  }

  public function addCampagne() {
    require_once('noyau/Model.php');
    if(!empty($_POST)){
      $name = $_POST['name'];
      $author_id =$_SESSION['id'];
      $date_deb = $_POST['date_deb'];
      $date_fin = $_POST['date_fin'];
      $points = $_POST['points'];

      $date = date("Y-m-d",time());

      $getCampagne = Campagne::getCampagne();
      
      if ($date >= $getCampagne->date_fin ){

        $req = $pdo->prepare('INSERT INTO campagne(name, author, date_deb, date_fin, points) 
                            VALUES (:name, :author_id, :date_deb, :date_fin, :points)');
                    
        $req->bindParam(':name', $name );
        $req->bindParam(':author_id', $author_id);
        $req->bindParam(':date_deb', $date_deb);
        $req->bindParam(':date_fin', $date_fin);
        $req->bindParam(':points', $points);
        $req->execute();

        $req2 = $pdo -> prepare("UPDATE users SET points = ?, nb_event = 0");
        $req2 -> execute([$points]);

        $req3 = $pdo -> prepare("DELETE from idee");
        $req3 ->execute();

        return 'ok';}
    else
      return 'une campagne est déjà en cours';
    
    }
  }

  public function getDate(){
  $getDate = Campagne::getCampagne();
  $date = $getDate->date_fin;
  $ddate = date('d-m-Y', strtotime($date));
  return $ddate;
  }
}

?> 