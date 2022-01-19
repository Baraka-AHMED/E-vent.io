<?php

final class Usercontroller
{
	public function SigninAction()
	{
		Vue::montrer('users/sign-in');
	}

	public function __construct()
	{
		$this->O_changepassword =new Changepassword();
		$this->O_user=new User();
	}

	public function ConnexionAction()
	{
		$result = $this->O_user->getlogin();
		if($result == 'login')
		{
			Vue::montrer('accueil/homepage');
		}

		else if($result == 'changemdp')
		{
			Vue::montrer('users/changepassw');
		}

		else
		{
			$_SESSION['flash']['error'] = 'Identifiant ou mot de passe incorrect, Vous n\'avez pas de compte';
			Vue::montrer('users/sign-in');
		}

	}

	public function ChangepasswordAction()
	{
		$id = $_SESSION['id'];
		if(!empty($_POST))
		{
			session_start();
			if($_POST['motdp'] == $_POST['confmdp'])
			{
				$result = $this->O_changepassword->changepass($id);
				if($result == 'sucess')
				{
					session_start();
					Vue::montrer('accueil/homepage');
				}

				else
				{
					$_SESSION['flash']['error'] = 'Erreur';
				}
			}

			else
			{
				$_SESSION['flash']['error'] = 'mdp pas identique';
			}
		}

	}

	public function SessionAction()
	{
		if(session_status() == PHP_SESSION_NONE)
		{
			session_start();
		}

	}

	public function LogoutAction()
	{
		$this->O_user->logout();
		$_SESSION['flash']['sucess'] = "Vous avez été déconnecté";
		Vue::montrer('users/sign-in');
	}

	public function MdpoublieAction()
	{
		Vue::montrer('users/mdpoublie');
	}

	public function canpostAction()
	{
		if ($this->O_user->isFull()) 
    {  return 'pas ok';}
		else
		{
			return 'ok';
		}
	}
}

?>