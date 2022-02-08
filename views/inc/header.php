<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Boss'Her</title>


    <!-- Lien CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Lien CSS perso -->
    <link rel="stylesheet" href= <?= CONFIG['app']['projectBaseUrl'] . '/public/assets/styles/style.css'?>>

    <!-- Les Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&family=Space+Mono&family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/a789332bd0.js" crossorigin="anonymous"></script>
</head>

<body id="page-top">
    
     <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark opacity-75 fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href=<?= CONFIG['app']['projectBaseUrl'] . '/public'?>><i class="fas fa-home"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-3 mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href=<?= BASE_PATH . 'events'?>>Evenements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href=<?= BASE_PATH .'blog'?>>Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href=<?= BASE_PATH .'contact'?>>Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href=<?= BASE_PATH .'qui_sommes_nous'?>>Qui sommes-nous? </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active btn btn-outline-warning" aria-current="page" href=<?= BASE_PATH .'connexion'?>>Accès membres</a> 
                            
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    