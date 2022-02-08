<?php
 
class Abonnement extends Db{

    public static function insertAbonnement($data){

        $request="REPLACE INTO abonnement VALUES (:id_abonnement, :prix, :date, :id_membre )";
        $response=self::getDb()->prepare($request);
        $response->execute($data);
        
    }
    
    public static function ReadAll(){

        $request="SELECT * FROM abonnement";
        $response=self::getDb()->prepare($request);
        $response->execute();

        return $response->fetchAll(PDO::FETCH_ASSOC);

   }

    // public static function deleteAbonnement(array $data){

    //     
    //     $request="DELETE FROM abonnement 
    //                     WHERE id_abonnement=:id_abonnement";
    //     $response=self::getDb()->prepare($request);
    //     return $response->execute($data);

    // }
}
