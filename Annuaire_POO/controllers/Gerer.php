<?php

class Gerer
{
    private $pdo;

    public function __construct()
    {
        $this->pdo=PdoBridge::getPdoBridge();
    }
    public function accueil():void
    {
        $message="Ce site permet d'enregistrer les participants à une épreuve.";
        include("views/v_accueil.php");
    }
    public function lister()
    {
        $les_membres=$this->pdo->getLesMembres();
        require 'views/v_listemembres.php';
    }
    public function choisir():void
    {
        $les_membres = $this->pdo->getLesMembres();
        require 'views/v_choisirmembre.php';
    }
   
    public function modifier():void
    {
        $id=$_REQUEST['id'];
        $unMembre=$this->pdo->getUnMembre($id);
        $unMembre=$unMembre[0];
        require "views/v_saisiemembre.php";
    }

    public function supprimer(){
        $les_membres = $this->pdo->getLesMembres();
        include 'views/v_supprmembre.php';
    }
    
    public function error():void
    {
        $_SESSION["message_erreur"] = "Site en construction";
        include("views/404.php");
    }

    public function ajouter(){

        require 'views/v_ajoutmembre.php';
    }

    public function ajoutMembre(){
        $nom = $_REQUEST['nom'];
        $prenom = $_REQUEST['prenom'];
        $this->pdo->addMembre($nom,$prenom);
        $this->lister();
    }

    public function modifMembre(){
      $id = $_REQUEST['id'];
      $nom = $_REQUEST['nom'];
      $prenom = $_REQUEST['prenom'];
      $this->pdo->updateMembre($id,$nom,$prenom);
      $this->lister();     
    }

    public function deleteMembre(){
        $id = $_REQUEST['id'];
        $this->pdo->deleteMembre($id);
        $this->lister();
    }


}
