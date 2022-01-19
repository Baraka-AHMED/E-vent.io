<?php

final class Comptecontroller
{
	public function __construct()
	{
		$this->O_compte = new Compte();
	}

	public function CompteAction()
	{
		Vue::montrer('users/compte');
	}

	public function getUserAction($attribut)
	{
		if ($attribut == 'username')
		{
			return $_SESSION['auth']->username;
		}

		if ($attribut == 'email')
		{
			return $this->O_compte->getEmail();
		}

		if ($attribut == 'role')
		{
			return $this->O_compte->getRole();
		}

		if ($attribut == 'annonce')
		{
			return $this->O_compte->getAnno();
		}

		else
		{
			$_SESSION['flash']['error'] = 'Échec de l\'opération d\'insertion';
		}
	}

	public function GestionUserAction()
	{
		Vue::montrer('users/gestionUser');
		$getmember = $this->O_compte->GetMember();
		echo '<ul class="usrlist">';
		foreach($getmember as $mb)
		{
			echo '<div class="usrinformations">';
			echo '<li>'. "Pseudo : " . $mb -> username . '</li>';
			if ($mb->role === 'donateur')
			{
				echo '<li>' . "Nombre de points : " . $mb -> points . '</li>';
			}

			echo '<li>' . "Rôle : " .  $mb -> role . '</li>' . '<br>';
			echo '</div>';
		}

		echo '</ul>';
	}
}
?>