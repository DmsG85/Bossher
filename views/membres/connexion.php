<?php  include VIEWS. 'inc/header.php'; ?>

<main >
    
    <div class="container py-5 h-100">
        
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="fond">
                <div class="card rounded-3  ">
                    <div class="row ">
                        <div class="col-md-6 d-flex align-items-center colgauche_kc ">
                            <div class=" px-3 py-4 p-md-5 mx-md-4">
                                <h3 class="mb-4">Phrase d'accroche genre Halte aux clichés! </h3>
                                <p>Boss'HER est une communauté de femmes qui exercent ou souhaitent exercer un métier dit "d'hommes" ! Des femmes qui ont besoin de conseils et envie d'en donner. De partager leurs expériences, de développer leur réseau et/ou de découvrir de nouveaux métiers. L'objectif de Boss'HER est de convaincre les femmes qui ont un projet de franchir le pas et d'obtenir tout le soutien nécessaire pour le concrétiser !</p>
                            </div>
                        </div>
                   
                    <div class="col-md-6 coldroite">
                    <div class="card-body p-md-5 mx-md-4">

             <div class="  text-center">
                 <!-- peut etre mettre le logo ici  -->
                        
                 <h3 class="mt-1 mb-5 pb-1">Accéder à votre compte</h3>
                        </div>
                        <? $msg ?>
                        <form action="" method="post">
                     

                        <div class="form-outline mb-4">
                            <label class="form-label" for="pseudo">Votre Pseudo</label>
                            <input type="text" id="pseudo" name="pseudo"class="form-control" placeholder="Tapez ici votre pseudo" required/>
                            
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="mdp" >Votre mot de passe </label>
                            <input type="password" id="mdp"  name="mdp"class="form-control"placeholder="Tapez ici votre mot de passe" required />
                            
                        </div>

                        <div class=" pt-1 mb-5 pb-1">
                            <button class="btn btn-primary  mb-3" type="button"<?= BASE_PATH .'profil'?>>Se connecter</button>
                            <a class="px-5"href="">Mot de passe oublié?</a>
                        </div>

                        <div class="d-flex align-items-center justify-content-center pb-4">
                            <p class="mb-0  mx-3">Pas encore de compte?</p>
                            <a class="nav-link active btn btn-outline-info" aria-current="page" href=<?= BASE_PATH .'inscription'?>>Créer un compte</a> 
                        </div>

                        </form>

                    </div>
                    </div>
                    
                </div>
                </div>
            </div>
            </div>
        </div>

<?=(isset($msg))?$msg:""?>

<?php  include VIEWS. 'inc/footer.php'; ?>