<?php


final class Homepage
{
	public function addAccount()
	{
		require_once('noyau/Model.php');
		if(!empty($_POST))
		{
			$username = Modelbis::generstr(8);
			$password = Modelbis::generstr();
			$email = $_POST['email'];
			$surname = $_POST['surname'];
			$firstname = $_POST['firstname'];
			$role = $_POST['role'];
			$choix= $_POST['choix'];
			if($choix=="Dmdcmpt")
			{
				session_start();
				$req = $pdo->prepare('INSERT INTO users(id_user, username, password, change_pass, email, surname, firstname, role) VALUES (\'' . '\', :username , :password,\'' . '\' , :email, :surname, :firstname, :role)');
				$req->bindParam(':username', $username);
				$req->bindParam(':password', $password);
				$req->bindParam(':email', $email );
				$req->bindParam(':surname', $surname);
				$req->bindParam(':firstname', $firstname);
				$req->bindParam(':role', $role);
				$req->execute();
				mail($email, 'Vos codes d\'accès pour vous connecter' , "Voici votre nouveau nom d'utilisateur : $:login et voici votre mot de passe : $password");
				$_SESSION['flash']['sucess'] = 'Un email de reinitialisation à bien été envoyé.';
				return 'ok';
			}

		}

		else
      return 'echec';
		exit();
	}

}
?>