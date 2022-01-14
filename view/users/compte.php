

<div class="compte">
  <p>Bonjour <b><?= Comptecontroller::getUserAction('username'); ?></b></p>

  <p>Mes informations : </p>
  <li>e-mail : <?= $_SESSION['auth']->email; ?></li>
  <li>Rôle : <?= $_SESSION['auth']->role; ?></li>

  <p>Mes annonces : </p>
  <li>e-mail : <?= $_SESSION['auth']->email; ?></li>
  <li>Rôle : <?= $_SESSION['auth']->role; ?></li>
  </div>
