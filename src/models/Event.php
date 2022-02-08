<?php
 
class Event extends Db{

    public static function insertEvent($data){
        
        $request="REPLACE INTO event VALUES (:id, :email, :pseudo, :nom, :prenom, :adresse, :tel, :numero_voie, :code_postal, :ville )";
        $response=self::getDb()->prepare($request);
        $response->execute($data);
        
    }
    public static function AllEvents(){ 

        $request="SELECT * FROM event";
        $response=self::getDb()->prepare($request);
        $response->execute();

        return $response->fetchAll(PDO::FETCH_ASSOC);

    }
    public static function oneEvent(){ 

        $request="SELECT * FROM event";
        $response=self::getDb()->prepare($request);
        $response->execute();

        return $response->fetchAll(PDO::FETCH_ASSOC);

    }
    
}
