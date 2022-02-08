<?php

class EventController{

    public static function addEvent()
    {

       /// insert et modif
       if (!empty($_POST)){
            Event::insertEvent([
                
                'id' => $_POST['id_event'],
                'categorie' => $_POST['categorie'],
                'resume' => $_POST['resume'],
                'lieu' => $_POST['lieu']

            ]);
       }
        
        include VIEWS . 'admin/addEvent.php';
    }

    public static function EventList(){

        // Récupération de la liste
        $listeEvents = Event::allEvents();

        include VIEWS . 'event/events.php';
    }

    public static function oneEvent()
    {
    // Récupération détail d'un évenement
        $oneEvent = Event::oneEvent();
        $detailEvent = $oneEvent["eventInfo"];

        include VIEWS . "event/oneEvent";
    }
   



}