<?php

final class Homepagecontroller
{
    public function defautAction()
    {
      
        $O_homepage =  new Homepage();

        Vue::montrer('accueil/homepage');
    }  
  
}

?>