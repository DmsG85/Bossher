<?php include VIEWS . 'inc/header.php'; ?>

<main class="vh-100" >

  <div class="container py-5 h-100">
    
      <div class="row d-flex justify-content-center align-items-center h-100">
        <h1 class="text-center">Mon compte</h1>
        <div class="col col-md-6 mb-4 mb-lg-0">
        <div class="card mb-3" >
          <div class="row ">
            <!-- colonne de gauche -->
            <div class="col-md-4 gradient-custom text-center " >
              <img
                src="../../public/assets/img/image-profil2.webp" alt="Photo" class=" photo_kc my-5" />
              <h5>Nom<?= $_SESSION["nom"] ?></h5>
              <h5>Prénom<?= $_SESSION["prenom"] ?></h5>
              
            </div>
            <!-- colonne de droite  -->
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Informations</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted"><?= $_SESSION["email"] ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>numero de telephone </h6>
                    <p class="text-muted"><?= $_SESSION["tel"] ?></p>
                  </div>
                </div>
                <h6>Mon compte</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Mes abonnements </h6>
                    <p class="text-muted">abonnement d'un an </p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Mes evenements</h6>
                    <p class="text-muted">soirée à Paris </p>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include VIEWS . 'inc/footer.php'; ?>