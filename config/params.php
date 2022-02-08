<?php

/**
 * Fichier contenant la configuration de l'application
 */
const CONFIG = [
    'db' => [
        'DB_HOST' => 'localhost',
        'DB_PORT' => '3306',
        'DB_NAME' => 'bossher',
        'DB_USER' => 'root',
        'DB_PSWD' => '',
    ],
    'app' => [
        'name' => 'bossher',
        'projectBaseUrl' => 'http://localhost/bossher'
    ]
];

/**
 * Constantes pour accéder rapidement aux dossiers importants du MVC
 */
const BASE_DIR = __DIR__ . '\\..\\';
const BASE_PATH = CONFIG['app']['projectBaseUrl'] . '/public/index.php/';
const PUBLIC_FOLDER = BASE_DIR . 'public\\';
const VIEWS = BASE_DIR . 'views/';
const MODELS = BASE_DIR . 'src/models/';
const CONTROLLERS = BASE_DIR . 'src/controllers/';
const PHOTO = BASE_DIR.'public\\upload\\';
const COVER = '../../public/upload/';

/**
 * Liste des actions/méthodes possibles (les routes du routeur)
 */
$routes = [

    //Général
    ''                      => ['AppController', 'index'],
    '/qui_sommes_nous'           => ['AppController', 'qui_sommes_nous'],
    '/contact'                   => ['AppController', 'contact'],
    '/mentions_legales'          => ['AppController', 'legal'],
    '/politique_confidentialite' => ['AppController', 'rgpd'],
    '/erreur'                    => ['AppController', 'erreur'],

    //Membre
    '/inscription'         => ['MembreController', 'addMembre'],
    '/connexion'           => ['MembreController', 'connexionMembre'],
    '/profil'              => ['MembreController', 'profil'],
    '/deconnexion'          => ['MembreController', 'deconnexion'],

    //Event
    '/events'           => ['EventController', 'listEvent'],
    '/oneEvent'         => ['EventController', 'oneEvent'],

    //Admin
    '/addEvents'         => ['EventController', 'addEvents'],
    '/EventEdit'        => ['EventController', 'EventEdit'],
    '/EventList'        => ['EventController', 'EventList'],
    '/membreList'        => ['MembreController', 'membreList']

];
