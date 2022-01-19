<?php

final class routeur
{
	public function start()
	{
		$url = $_SERVER['REQUEST_URI'];
		if(!empty($url)&& $url[-1]==="/" && $url!='/')
		{
			$url = substr($url,0,-1);
			header('Location:'.$url);
		}

		$parametres =[];
		if(isset($_GET['p']))$parametres = explode('/',$_GET['p']);
		var_dump($parametres);
		var_dump($_GET);
		die();
		if($parametres[0]!='')
		{
			$controller = ucfirst(strtolower(array_shift($parametres))).'controller';
			$controller = new $controller();
			$action = (isset($parametres[0]))?ucfirst(array_shift($parametres)).'Action' : 'defautAction';
			var_dump($action);
		}

		else
		{
			$controller = new Homepagecontroller();
			$controller->defautAction();
		}
	}
}
?>