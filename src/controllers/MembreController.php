<?php

class MembreController{

    //Afficher la liste des membres dans l'admin (marche pas)
    public static function membreList(){

        include VIEWS . 'membres/membreList.php';

    }

    //Afficher la page profil
    public static function profil(){

        include VIEWS . 'membres/profil.php';

    }
    public static function addMembre(){

       /// insert et modif
       if (!empty($_POST)){
            Membre::addMembre([
                
                'id' => null,
                'email' => $_POST['email'],
                'pseudo' => $_POST['pseudo'],
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'adresse' => $_POST['adresse'],
                'tel' => $_POST['tel'],
                'numero_voie' => $_POST['numero_voie'],
                'code_postal' => $_POST['code_postal'],
                'ville' => $_POST['ville'],
                'mdp'=> $_POST['mdp']

            ]);
       }
        
        include VIEWS . 'membres/inscription.php';
    }
    //Connexion
    public static function connexionMembre(){
       
        //Si le membre est connecté, affiche la page profil
         if(Membre::isConnected()){

            header("location:".BASE_PATH."profil");
        }


        // Si POST n'est pas vide, stocke les données POST dans des variables :

        if(!empty($_POST)){

            $pseudo=$_POST["pseudo"];
            $mdp=$_POST["mdp"];
            $msg="";

            if(Membre::verifPseudo($pseudo)){
                $msg .= "<div class=\"alert alert-danger\" role=\"alert\">Veuillez saisir votre pseudo</div>";
            }

            if(Membre::verifMdp($mdp)){
                $msg .= "<div class=\"alert alert-danger\" role=\"alert\">Veuillez saisir votre mot de passe</div>";
            }

            if(!Membre::verifPseudo($pseudo) && !Membre::verifMdp($mdp)){

                // Vérification de la connexion :
                $infoMembre = Membre::connexionVerif($pseudo,$mdp);
                
                // Si pseudo n'est pas dans la BDD / MDP:
                if($infoMembre == ""){

                    $msg .= "<div class=\"alert alert-danger\" role=\"alert\">Le pseudo ou le mot de passe est incorrect. Veuillez réesayer.</div>";
                }elseif(!password_verify($mdp, $infoMembre["pw"])){

                    $msg .= "<div class=\"alert alert-danger\" role=\"alert\">Le pseudo ou le mot de passe est incorrect. Veuillez réesayer.</div>";
                }else{
                    Membre::connexionValid($infoMembre);
                }

            }
            
        
        
        }
    // Vérifier la connexion de l'utilisateur
        // $infoConnexion = Membre::connexionVerif();
       include VIEWS . 'membres/connexion.php';     

         
    }
    public static function deconnexion(){
        
        destroySession();

           // Sinon redirection accueil
            header("location:".BASE_PATH);

    }
}

  


