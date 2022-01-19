<?php 

final class Homepagecontroller
{
  
	public function __construct()
	{
		$this->$O_homepage =  new Homepage();
		
	}

	public function defautAction()
	{
		Vue::montrer('accueil/homepage');
	}

	public function InfoAction()
	{
		Vue::montrer('accueil/about');
	}

	public function ContactAction()
	{
		Vue::montrer('accueil/contact');
	}

	public function CguAction()
	{
		Vue::montrer('accueil/cgu');
	}

	public function CookieAction()
	{
		Vue::montrer('accueil/cookie');
	}

	public function PostAction()
	{
		$result = $this->$O_homepage->addAccount();
		if($result == 'ok')
		{
		}
    else
		{
			$_SESSION['flash']['error'] ='Échec de l\'opération d\'insertion';
		}

	}
}
  
?>