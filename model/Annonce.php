<?php
final class Annonce
{
	public function addAnnonce()
	{
		require_once('noyau/Model.php');
		if(!empty($_POST))
		{
			session_start();
			$name = $_POST['name'];
			$author = $_SESSION['auth'] -> username;
			$description = $_POST['description'];
			$description_courte = $_POST['description_courte'];
			$date = date("Y-m-d",time());
			require_once('model/Campagne.php');
			$Campagne = new Campagne();
			$getCampagne = $Campagne -> getCampagne();
			if ($date >= $getCampagne->date_deb && $date <= $getCampagne->date_fin )
			{
				$req = $pdo->prepare('INSERT INTO idee(id, name, author, campagne, date, description, description_courte, points, supplement)VALUES (\'' . '\', :name, :author, :campagne, :date, :description, :description_courte, points, supplement)');
				$req->bindParam(':name', $name );
				$req->bindParam(':author', $author);
				$req->bindParam(':date', $date);
				$req->bindParam(':description', $description);
				$req->bindParam(':description_courte', $description_courte);
				$req->bindParam(':campagne', $getCampagne -> id);
				$req->execute();
				$reqq = $pdo -> prepare('UPDATE users SET nb_event = nb_event+1 WHERE id_user = ?');
				$reqq->execute([$_SESSION['auth']->id_user]);
				return 'ok';
				exit();
			}

			else
			{
				echo 'evenement pas dans une campagne';
				$_SESSION['flash']['error'] = 'Cet événement n\'est pas dans une campagne';
			}

		}

	}

	public function getArticle($id)
	{
		require('noyau/Model.php');
		if($id == null)
		{
			$req = $pdo->query('SELECT * FROM idee ORDER BY points DESC');
			$reqq = $req -> fetchAll(PDO::FETCH_CLASS);
			return $reqq;
		}

		if($id == 'jury')
		{
			$req = $pdo->query('SELECT * FROM idee WHERE points >= 20');
			$reqq = $req -> fetchAll(PDO::FETCH_CLASS);
			return $reqq;
		}

		else
		{
			$req = $pdo->prepare('SELECT * FROM idee WHERE id = ?');
			$req -> execute([$id]);
			$article = $req -> fetch();
			return $article;
		}
	}

	public function addpoint($points, $id)
	{
		require ('noyau/Model.php');
		$id_user = $_SESSION['id'];
		$req = $pdo->prepare('SELECT * FROM users WHERE id_user = ? ');
		$req ->execute([$id_user]);
		$user = $req->fetch();
		$user_point = $user->points;
		var_dump($user_point);
		if($user_point >= $points)
		{
			$req= $pdo ->prepare('UPDATE idee SET points = points + ? WHERE id = ?');
			$req -> execute([$points, $id]);
			$reqq = $pdo ->prepare('UPDATE users SET points = points - ? WHERE id_user = ?');
			$reqq -> execute([$points, $user -> id_user]);
			return 'ok';
		}
	}

	public function VoteAnno($id)
	{
		require ('noyau/Model.php');
		$req = $pdo ->prepare('UPDATE idee SET win = 1 WHERE id = ?');
		$req -> execute([$id]);
		return 'sucess';
	}

	public function getArticleWin()
	{
		require('noyau/Model.php');
		$req = $pdo->query('SELECT * FROM idee WHERE win = 1');
		$reqq = $req -> fetchAll(PDO::FETCH_CLASS);
		return $reqq;
	}
}

?> 