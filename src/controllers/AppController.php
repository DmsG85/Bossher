<?php

class AppController{

    public static function index()
    {

        require VIEWS . "app/home.php";
        
    }

    public static function envoyerMail()
    {

        echo "Envoyer un mail";
        
    }
    
    public static function contact()
    {

        require VIEWS . "app/contact.php";
        
    }
    public static function connexion()
    {

        require VIEWS . "app/connexion.php";
        
    }

}