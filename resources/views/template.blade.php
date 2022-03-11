<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <meta name="description" content="Bienvenue sur le site spécialisé dans la vente et le conseil de jeux vidéo !">
    <meta name="keywords" content="RPG, Strategie, STR, Jeux, Jeux vidéo, Sport, Aventure, Achat, Prix, Pas cher">
    <meta name="language" content="fr-fr">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="/app.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Playfair+Display&family=Roboto&family=Smooch&display=swap"
        rel="stylesheet" />

    <link rel="icon" href="/images/favicon.ico" />
</head>

<body class="site">
    <main class="site_content">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href={{route('home')}}>
                    <img id="logo" src="/images/hitman.png" alt="Logo" />Games Bond</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href={{route('home')}}>Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href={{route('catalog')}}>Catalogue</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href={{route('home')}}>Mon compte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href={{route('cart')}}>Mon panier</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href={{route('home')}}>Espace Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <body class="site">
            <main class="site_content">

            >

@yield('content')



</main>
<footer>
  <h2>Pour nous contacter</h2>
  <div class="container">
    <div class="row">
      <div class="colo col-sm-12 col-xl-4">
        <i class="far fa-address-card"></i>
        Games Bond <br />
        16 Bd Maréchal Lyautey <br />
        38000 Grenoble
      </div>

      <div class="colo col-sm-12 col-xl-4">
        <i class="fas fa-at"></i>
        contact@games-bond.fr
      </div>

      <div class="colo colo1 col-sm-12 col-xl-4">
        <i class="fas fa-phone-square-alt"></i>
        09 00 70 07 70
      </div>

      <div class="reseaux">
        <a href="https://fr-fr.facebook.com/">
          <i class="fab fa-facebook"></i>
        </a>
        <a href="https://www.instagram.com/?hl=fr">
          <i class="fab fa-instagram-square"></i>
        </a>
        <a href="https://twitter.com/?lang=fr">
          <i class="fab fa-twitter-square"></i>
        </a>
        <a href="https://fr.linkedin.com/">
          <i class="fab fa-linkedin"></i>
        </a>
      </div>
      <div class="copyright">
        <a href="#">&copy; Copyright</a>
        <a href="#">Mentions légales</a>
        <a href="#">Plan du site</a>
        <a href="#">Newsletter</a>
      </div>
    </div>
  </div>

</footer>

<!-- SCRIPTS -->

<script src="https://kit.fontawesome.com/afa68139eb.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
