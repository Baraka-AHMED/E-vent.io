<?php

final class Compte
{
	public function getUsername()
	{
		require_once('noyau/Model.php');
		$username = $user->username;
		return $this->$username;
	}

	public function getEmail()
	{
		$email = $user->email;
		return $email;
	}

	public function getRole()
	{
		$role = $user->role;
		return $role;
	}

	public function getAnno()
	{
		require('noyau/Model.php');
		$username = ($_SESSION['auth']->username);
		$req = $pdo -> prepare('SELECT name FROM idee WHERE author = ?');
		$req->execute([$username]);
		$annonce = $req->fetchAll(PDO::FETCH_CLASS);
		return $annonce;
	}

	public function GetMember()
	{
		require_once('noyau/Model.php');
		$req = $pdo -> prepare('SELECT username, role, points FROM users');
		$req->execute();
		$getmember = $req->fetchAll();
		return $getmember;
	}

	public function GetId()
	{
		require_once('noyau/Model.php');
		if(empty($_SESSION))
		{
			$id = $_SESSION['id'];
			$req = $pdo -> prepare('SELECT id from users where id = :id ');
			$req->bindParam(':id', $id);
			$req->execute();
			return $req;
		}

	}

	public function GetAnnonce()
	{
		require_once('noyau/Model.php');
		$author_id = Compte::GetId() ;
		$req = $pdo -> prepare('SELECT * from idee where author = :author_id');
		$req->bindParam(':author_id', $author_id);
		$req->execute();
		$getannonce = $req->fetchAll();
		return $getannonce;
	}
}

?>