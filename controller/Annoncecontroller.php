<?php

final class Annoncecontroller
{
	public function __construct()
	{
		$this->O_annonce = new Annonce();
		$this->O_campagne = new Campagne();
	}

	public function AnnonceAction()
	{
		Vue::montrer('evenement/annonce');
	}

	public function PostAction()
	{
		$result = $this->O_annonce->addAnnonce();
		if($result == 'ok')
		{
			$_SESSION['flash']['sucess'] =  'Données insérées';
		}

		else
		{
			$_SESSION['flash']['error'] = 'Échec de l\'opération d\'insertion';
		}

	}

	public function getAnnonceAction()
	{
		$article = $this->O_annonce->getArticle(null);
		return $article;
	}

	public function getAnnonceseuilAction()
	{
		$article = $this->O_annonce->getArticle('jury');
		return $article;
	}

	public function getAnnonceWinAction()
	{
		$article = $this->O_annonce->getArticleWin();
		return $article;
	}

	public function goEvenementAction()
	{
		$id = $_GET['id'];
		$article = $this->O_annonce->getArticle($id);
		echo '<div class="article">';
		echo '<h2>' .  $article->name . '</h2>';
		echo '<h4>' . "Article créé par : " . '</h4>' . '<p>' . $article->author . '</p>';
		echo '<h4>' . "Date de création de l'article : " . '</h4>' . '<p>' . $article->date . '</p>';
		echo '<h4>' . "Description de l'évènement : " . '</h4>' . '<p>' . $article->description . '</p>';
		echo '<h4>' . "Nombres de points obtenus : " . '</h4>' . '<p>' . $article->points . '</p>';
		echo '<h4>' . "Suppléments déblocables : " . '</h4>' . '<p>' . $article->supplement . '</p>';
		echo '</div>';
		if(isset($_SESSION['auth']))
		{
			if(($_SESSION['role'] == 'donateur') || ($_SESSION['role'] == 'admin'))
			{
        echo '<div class="formevent">';
				echo '<form action="index.php?ctrl=annonce&action=Addpoints&id=' . $id . '" method="POST"><input id = "point" placeholder="Donner vos points" name="point"><input type="submit"  name="action" value="Donner vos points"></form>';
        echo '</div>';
			}
		}

	}

	public function  AddpointsAction()
	{
		$points = $_POST['point'];
		$id = $_GET['id'];
		$currentdate= date ('d-m-Y');
		$enddaate = $this->O_campagne->getDate();
		if($enddaate!=$currentdate)
		{
			$addpoint = $this->O_annonce->addpoint($points, $id);
			if($addpoint == 'ok')
			{
				header('Location:index.php');
			}

			else
			{
				$_SESSION['flash']['error'] ='Échec de l\'opération d\'insertion';
			}
		}

		else
		{
			$_SESSION['flash']['error'] ='Vous ne pouvez plus voter';
		}

	}

	public function VoteAction()
	{
		$id = $_GET['id'];
		$result = $this->O_annonce->VoteAnno($id);
		if ($result == 'sucess')$_SESSION['flash']['sucess'] = 'Votre vote à été pris en compte';
		else$_SESSION['flash']['erreur'] = 'Erreur du vote';
	}
}

?>