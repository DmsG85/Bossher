<?php include VIEWS . 'inc/header.php'; ?>

    <main id="main_kb">
        <h1 class="h1_kb">Contactez-nous !</h1>
        <h5 class="h5_kb">ET SI ON DÉBUTAIT UNE VRAIE HISTOIRE ENSEMBLE ?
            PARLEZ-NOUS DE VOUS !</h5>
        <p class="p_kb">Vous souhaitez échanger avec nous ? Utilisez notre formulaire :</p>

        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="fond">
                    <div class="card rounded-3  ">
                        <div class="row ">
                            <div class="col-md-6 d-flex align-items-center colgauche ">
                                <div class=" px-3 py-4 p-md-5 mx-md-4">
                                    <img src="../../public/assets/img/contact_img.jpg" width="550" alt="">

                                </div>
                            </div>

                            <div class="col-md-6 coldroite">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="  text-center">


                                        <h3 class="mt-1 mb-5 pb-1">Nous contacter :</h3>
                                    </div>

                                    <form action="" method="post">


                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="pseudo">Nom</label>
                                            <input type="text" id="nom" name="nom" class="form-control" placeholder="Tapez ici votre Nom" />

                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="prénom">Prénom</label>
                                            <input type="text" id="prénom" name="prénom" class="form-control" placeholder="Tapez ici votre Prénom" />

                                        </div>

                                        <div class="form-outline mb-4">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" id="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="nom@exemple.com">

                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Tapez ici votre message" rows="3"></textarea>
                                        </div>

                                        <div class=" d-md-flex justify-content-md-end">
                                            <button class="btn btn-primary me-md-1" type="button">Envoyer</button>
                                        </div>

                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
            <h4 class="h4_kb">Promis, on répond à tout le monde et le plus rapidement possible !</h4>

    <p class="p_kb">Passé un délai de 72h prévenez la police :D</p>
    </main>



    <?php include VIEWS . 'inc/footer.php'; ?>