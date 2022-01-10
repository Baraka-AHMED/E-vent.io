<?php
require 'noyau/ChargementAuto.php';
final class routeur {
  public function start(){
$url = $_SERVER['REQUEST_URI'];
        if(!empty($url)&& $url[-1]==="/" && $url!='/'){
            $url = substr($url,0,-1);
        header('Location:'.$url);
        }
       
    $parametres =[];
    if(isset($_GET['p']))
    $parametres = explode('/',$_GET['p']);
    
    if($parametres[0]!=''){
        $controller = '\\controllers\\'.ucfirst(strtolower(array_shift($parametres))).'controller';
        $controller = new $controller();
        $action = (isset($parametres[0]))? array_shift($parametres) : 'defautAction';
    }
    else 
{
    $controller = new MainController();
    $controller->defaultAction();
}
}
}
?>