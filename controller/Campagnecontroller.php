<?php

final class Campagnecontroller
{
	public function CampagneAction()
	{
		Vue::montrer('evenement/campagne');
	}

	public function __construct()
	{
		$this->$O_campagne = new Campagne();
	}

	public function PostAction()
	{
		$result = $this->$O_campagne->addCampagne();
		if($result == 'ok')
		{
			$_SESSION['flash']['sucess'] = 'Campagne créée !';
			header('Location : index.php');
		}

		else
		{
			$_SESSION['flash']['error'] = 'Échec de l\'opération d\'insertion';
		}

	}

	public function getDateAction()
	{
		$result = $this->$O_campagne->getDate();
		return $result;
	}
}

?>