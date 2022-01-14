<?php

final class Annoncecontroller{
  public $O_annonce;

  public function __construct(){
    $this->O_annonce = new Annonce();
  }
  
  public function AnnonceAction()
    {
      Vue::montrer('evenement/annonce');
    }

  public function PostAction() {
    $result = $this->O_annonce->addAnnonce();    
    
    if($result == 'ok'){
    echo 'Données insérées';
  }else{
    echo "Échec de l'opération d'insertion";
    
  }
  }
  
}