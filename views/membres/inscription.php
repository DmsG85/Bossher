<?php  include VIEWS. 'inc/header.php'; ?>
<body style="background: #eee;">
 
     <main>
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="fond_kc">
                    <div class="card rounded-3  ">
                        <div class="row ">
                            <!-- colonne de gauche  -->
                        <div class="col-md-6 d-flex   colgauche_kc" style="background: #6667AB;">
                        <div class=" px-3 py-5 p-md-5 mx-md-4">
                                             <h3 class="mb-4">Phrase d'accroche genre Halte aux clichés! </h3>
                                            <p>Boss'HER est une communauté de femmes qui exercent ou souhaitent exercer un métier dit "d'hommes" ! Des femmes qui ont besoin de conseils et envie d'en donner. De partager leurs expériences, de développer leur réseau et/ou de découvrir de nouveaux métiers. L'objectif de Boss'HER est de convaincre les femmes qui ont un projet de franchir le pas et d'obtenir tout le soutien nécessaire pour le concrétiser !</p>
                                        </div>
                            </div>

                 <!-- colonne de droite  -->
                  <div class="col-md-6 coldroite_kc">
                    <div class="card-body p-md-5">
                      <h3 class="mb-5">Inscrivez vous à notre platforme</h3>

                      <form action="" method="post">
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div >
                            <label class="form-label" for="nom">Nom</label>
                            <input type="text" id="nom" name="nom"class="form-control form-control-lg" />
                            
                          </div>
                        </div>
                        
                        <div class="col-md-6 mb-4">
                          <div >
                            <label class="form-label" for="prenom">Prenom</label>
                            <input type="text" id="prenom" name ="prenom" class="form-control form-control-lg" />
                            
                          </div>
                        </div>
                      </div>

                      <div class="mb-4">
                        <label class="form-label" for="adresse">Adresse</label>
                        <input type="text" id="adresse" nom="adresse" class="form-control form-control-lg" />
                        
                      </div>
                        <div class="col-md-6 mb-4">
                          <div >
                            <label class="form-label" for="numero_voie">Numero de la voie</label>
                            <input type="text" id="numero_voie" name ="numero_voie" class="form-control form-control-lg" />
                            
                          </div>
                        </div>
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div>
                            <label class="form-label" for="ville">Ville</label>
                            <input type="text" id="ville" name ="ville" class="form-control form-control-lg" />
                            
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div>
                            <label class="form-label" for="code_postal">Code postal</label>
                            <input type="number" id="code_postal" name="code_postal" class="form-control form-control-lg" />
                            
                          </div>
                       
                       
                        </div>
                      </div>
                      <div class="mb-4">
                        <label class="form-label" for="tel">Numéro de télephone </label>
                        <input type="tel" id="tel" nom="tel" class="form-control form-control-lg" />
                        
                      </div>
                      <div class="mb-4">
                        <label class="form-label" for="mdp">Mot de passe</label>
                        <input type="password" id="mdp" nom="mdp" class="form-control form-control-lg" />
                        
                      </div>

                      <div class="form-check d-flex mb-5">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c"
                        />
                        <label class="form-check-label" for="form2Example3">j'ai lu et j'accepte les conditions générales d'utilisation</label>
                      </div>
                      
      
                      <div class=" pt-1 mb-5 pb-1">
                        <input type="submit" class="btn btn-primary" value="S'incrire">

                        
                    </div>

                    

                    </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </main>
<?php  include VIEWS. 'inc/footer.php'; ?>