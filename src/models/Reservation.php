<?php
 
class Reservation extends Db{

    public static function insertReservation($data){

        $request="REPLACE INTO reservation VALUES (:id_reservation, :id_membre, :id_event, :date)";
        $response=self::getDb()->prepare($request);
        $response->execute($data);
        
    }
    
    public static function ReadAll(){

        $request="SELECT * FROM reservation";
        $response=self::getDb()->prepare($request);
        $response->execute();

        return $response->fetchAll(PDO::FETCH_ASSOC);

   }

    // public static function deleteReservation(array $data){

    //     
    //     $request="DELETE FROM reservation 
    //                     WHERE id_reservation=:id_reservation";
    //     $response=self::getDb()->prepare($request);
    //     return $response->execute($data);

    // }
}
