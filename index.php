<?php
//include'router/routeur.php';
require'noyau/ChargementAuto.php';

Usercontroller::SessionAction();
    //var_dump($_GET);
    //$O_routeur = new routeur();
    //$O_routeur->start();
    $S_controleur = isset($_GET['ctrl']) ? $_GET['ctrl'] : null;
    $S_action = isset($_GET['action']) ? $_GET['action'] : null;

    Vue::ouvrirTampon(); 
    $O_controleur = new Controleur($S_controleur, $S_action);
    $O_controleur->executer();

    $contenuPourAffichage = Vue::recupererContenuTampon();

    Vue::montrer('gabarit', array('body' => $contenuPourAffichage)); 

    