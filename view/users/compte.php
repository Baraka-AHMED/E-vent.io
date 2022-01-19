

<div class="compte">
 <?php $compte = new Comptecontroller();?>
    
  <h1>Bonjour <b><?=  $compte->getUserAction('username');?></b></h1>
  <div class="cpt">
    <div class="cptinfo">
      <h4>Mes informations : </h4>
      <li>e-mail : <?= $_SESSION['auth']->email; ?></li>
      <li>Rôle : <?= $_SESSION['auth']->role; ?></li>
    </div>

    {
    <div class="cptinfo">
      <h4>Mes annonces : </h4>
      <li>annonces : <?php $user= $compte->getUserAction('annonce');
        foreach($user as $annonce){
           echo "$annonce->name" ;
        }
      
       ?></li>
    </div>

    <?php if(($_SESSION['role'] == 'admin')){
    
    echo'<div class="cptinfo">

      <h4>Gestion des utilisateurs : </h4>
      <li><a id="gestionUsrLink" href="index.php?ctrl=Compte&action=GestionUser">Gerer les utilisateurs</a></li>
    </div>  ';
    }

    ?>
  </div>
</div>
