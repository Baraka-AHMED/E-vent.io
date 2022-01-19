<!--A supp et mettre le code dans User.php --> 
<?php

final class Changepassword
{
	public function changepass($id)
	{
		session_start();
		$password = password_hash($_POST['motdp'] , PASSWORD_BCRYPT);
		require_once('noyau/Model.php');
		$pdo -> prepare("UPDATE users SET password = ?, change_pass=1 WHERE id_user = ?")-> execute([$password, $id]);
		return 'sucess';
	}
}