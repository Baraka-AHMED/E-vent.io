<?php

final class Campagnecontroller{
    public function CampagneAction()
    {
      

        Vue::montrer('evenement/campagne');
    }  

    public function __construct(){
    $this->$O_campagne = new Campagne();
  }
    public function PostAction() {
    $result = $this->$O_campagne->addCampagne();    
    
    if($result == 'ok'){
    echo 'Données insérées';
    }
    else{
    echo "Échec de l'opération d'insertion";
    
  }
  }
  
}

?>