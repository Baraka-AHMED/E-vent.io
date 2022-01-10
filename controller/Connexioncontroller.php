include_once('noyau/Model.php');
 
if (isset($_POST['username']) && $_POST['password'])
{
    include('model/Connexion.php);
    $tc = new TestConnexion();
    $ligne = $tc->username($_POST['pseudo'],$_POST['password'] );
    if(ligne == 1){ //si ligne ==1 alors l'utilisateur a rentré un bon identifiant et mot de passe
        require_once('vue/contact.php');
    }
     
}else{
    require_once('vue/contact.php')
}