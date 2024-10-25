<?php
if (session_status() === PHP_SESSION_NONE) { session_start(); }
include 'models/PdoBridge.php';

include 'views/v_gabarit_entete.php';
include 'views/v_menu.php';



$uc = 'Gerer';
$action = 'accueil';

if (isset($_REQUEST['action'])) {
    $action=$_REQUEST['action'];
}

if (isset($_REQUEST['uc'])) {
    $uc=$_REQUEST['uc'];
}
include "controllers/$uc.php";
$ctrl=new $uc();
$ctrl->$action();

include("views/v_gabarit_pied.php");