<?php
 
class Membre extends Db{


    public static function addMembre($data){

        $request="REPLACE INTO membre VALUES (:id_membre, :email, :pseudo, :nom, :prenom, :adresse, :tel, :numero_voie, :code_postal, :ville, :mdp )";
        $response=self::getDb()->prepare($request);
        $response->execute($data);

        
    }
    
    public static function ReadAll(){

        $request="SELECT * FROM membre";
        $response=self::getDb()->prepare($request);
        $response->execute();

        return $response->fetchAll(PDO::FETCH_ASSOC);

   }

    // public static function deleteMembre(array $data){

    //     
    //     $request="DELETE FROM membre 
    //                     WHERE id_membre=:id_membre";
    //     $response=self::getDb()->prepare($request);
    //     return $response->execute($data);

    // }
    
  // Vérification si connecté
  public static function isConnected(){
        if(isset($_SESSION["pseudo"])){
            return true;
        }
    }

    // VerifPseudo
    public static function verifPseudo($pseudo){

        // pseudo n'existe pas
        if(!isset($pseudo)){
            return true;
        }

        // pseudo vide
        if(empty($pseudo)){
            return true;
        }

    }

    // VerifiMDP
    public static function verifMdp($mdp){

        // mdp n'existe pas
        if(!isset($mdp)){
            return true;
        }

        //  mdp vide
        if(empty($mdp)){
            return true;
        }
    }



    // Vérification de l'utilisateur pour la connexion
    public static function connexionVerif($pseudo,$mdp)
    {       

        // Si pseudo pas vide et est valide
        if(!empty($pseudo) && !self::verifPseudo($pseudo)){

            // Connexion avec la base de données
            $resquest = "SELECT * FROM membre WHERE pseudo=?";
            $preparedRequest = self::getDb()->prepare($resquest);
            $preparedRequest->execute([$pseudo]);
            return $preparedRequest->fetch(PDO::FETCH_ASSOC);
        }
    }

    public static function connexionValid($infoMembre){
        $_SESSION["id_membre"] = $infoMembre["id_Membre"];
        $_SESSION["nom"] = $infoMembre["nom"];
        $_SESSION["prenom"] = $infoMembre["prenom"];
        $_SESSION["pseudo"] = $infoMembre["pseudo"];
        $_SESSION["email"] = $infoMembre["email"];
        $_SESSION["adresse"] = $infoMembre["adresse"];
        $_SESSION["numero_voie"] = $infoMembre["numero_voie"];
        $_SESSION["mdp"] = $infoMembre["mdp"];
        $_SESSION["ville"] = $infoMembre["ville"];
        $_SESSION["code_postal"] = $infoMembre["code_postal"];
        $_SESSION["tel"] = $infoMembre["tel"];

        $_SESSION["admin"] = $infoMembre["admin"];
        
        header("location:".BASE_PATH."profil");
        exit;

    }

    // Destruction SESSION pour déconnexion
    // public static function destroySession($deconnexion){
    // // Si SESSION existe et que "deconnexion" dans GET :
    //     if(isset($_SESSION["pseudo"]) && $deconnexion=="ok"){
    //         //Détruit la session
    //         session_destroy(); 
    //     }

    // }
}
