<?php

class PdoBridge
{
    private static string $serveur = 'mysql:host=localhost';
    private static string $bdd = 'dbname=d5_mvc_tp2';
    private static string $user = 'root';
    private static string $mdp = '';
    private static $monPdoBridge = null;
    /**
     * @var PDO   <--- need by PhpStorm to find Methods of PDO
     */
    private static PDO $monPdo;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct()
    {
        PdoBridge::$monPdo = new PDO(PdoBridge::$serveur . ';' . PdoBridge::$bdd, PdoBridge::$user, PdoBridge::$mdp);
        PdoBridge::$monPdo->query("SET CHARACTER SET utf8");
    }

    public function _destruct()
    {
        PdoBridge::$monPdo = null;
    }

    /**
     * Fonction statique qui crée l'unique instance de la classe
     *
     * Appel : $instancePdolafleur = PdoBridge::getPdoBridge();
     * @return l'unique objet de la classe PdoBridge
     */
    public static function getPdoBridge()
    {
        if (PdoBridge::$monPdoBridge == null) {
            PdoBridge::$monPdoBridge = new PdoBridge();
        }
        return PdoBridge::$monPdoBridge;
    }

    public function getLesMembres()
    {
        // modifiez la requête sql
        $sql = 'SELECT id,nom,prenom FROM membres';
        $lesLignes = PdoBridge::$monPdo->query($sql);
        return $lesLignes->fetchALL(PDO::FETCH_ASSOC);
    }
    public  function getUnMembre($id){
        $sql = "SELECT id,nom,prenom FROM membres WHERE id=$id";
        $lesLignes = PdoBridge::$monPdo->query($sql);
        return $lesLignes->fetchALL(PDO::FETCH_ASSOC);
    }

    public function getMaxId()
    {
        // modifiez la requête sql
        $req = "SELECT max(id) AS maxi FROM membres";
        $res = PdoBridge::$monPdo->query($req);
        $uneLignes = $res->fetch();
        return 1 + intval($uneLignes["maxi"]);
    }

    public function updateMembre($id,$nom, $prenom){
        $sql="UPDATE membres SET nom='$nom', prenom='$prenom' WHERE id=$id";
        $req = PdoBridge::$monPdo->exec($sql);
    }

    public function addMembre($nom,$prenom){

        $id = $this->getMaxId();
        $sql="INSERT INTO membres (id,nom,prenom) VALUES (:id,:nom,:prenom)";
        $stmt = PdoBridge::$monPdo->prepare($sql);
        $stmt->bindValue(':nom',$nom,PDO::PARAM_STR);
        $stmt->bindValue(':prenom',$prenom,PDO::PARAM_STR);
        $stmt->bindValue(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
        
    }

    public function deleteMembre($id){
        $sql = 'DELETE FROM membres WHERE id = :id';
        $stmt = PdoBridge::$monPdo->prepare($sql);
        $stmt->bindValue(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
    }


}
