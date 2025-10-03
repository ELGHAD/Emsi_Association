<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Association des Étudiants EMSI</title>
    <!-- Bootstrap 5 CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Header -->
    <header class="fixed-top">
      <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="assets/images/logo.png" alt="EMSI Logo" height="40" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="actualites.html">Actualités</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="evenements.html">Événements</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="clubs.html">Clubs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
            </ul>
            <div class="d-flex">
              @guest
                <a href="connexion.html" class="btn btn-outline-primary me-2">Se connecter</a>
                <a href="inscription.html" class="btn btn-primary">S'inscrire</a>
              @else
                <a href="dashboard.html" class="btn btn-primary">Mon compte</a>
              @endguest
            </div>
          </div>
        </div>
      </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
      <div class="container">
        <div class="row align-items-center min-vh-100">
          <div class="col-lg-6">
            <h1 class="display-4 fw-bold mb-4">
              Bienvenue à l'Association des Étudiants EMSI
            </h1>
            <p class="lead mb-4">
              Découvrez une communauté dynamique d'étudiants passionnés, des
              événements enrichissants et des opportunités uniques de
              développement personnel.
            </p>
            @if(!auth()->check())
              <a href="inscription.html" class="btn btn-primary btn-lg">Rejoignez-nous</a>
            @endif
          </div>
          <div class="col-lg-6">
            <img
              src="assets/images/hero-image.jpg"
              alt="Étudiants EMSI"
              class="img-fluid rounded shadow"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Image Campus avant Actualités Récentes -->
    <section class="py-4">
      <div class="container">
        <img src="assets/images/campus1.jpg" alt="Campus EMSI" class="img-fluid rounded shadow mb-4 w-100" style="max-height: 400px; object-fit: cover;">
      </div>
    </section>

    <!-- Actualités Récentes -->
    <section class="py-5">
      <div class="container">
        <h2 class="text-center mb-5">Actualités Récentes</h2>
        <div class="row" id="actualites-recentes">
          <!-- Les actualités seront chargées dynamiquement via JavaScript -->
        </div>
      </div>
    </section>

    <!-- Événements à venir -->
    <section class="py-5 bg-light">
      <div class="container">
        <h2 class="text-center mb-5">Événements à venir</h2>
        <div class="row" id="evenements-a-venir">
          <!-- Les événements seront chargés dynamiquement via JavaScript -->
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h5>À propos</h5>
            <p>
              L'Association des Étudiants EMSI est une organisation dédiée à
              l'épanouissement des étudiants et au développement de la vie
              étudiante.
            </p>
          </div>
          <div class="col-md-4">
            <h5>Liens rapides</h5>
            <ul class="list-unstyled">
              <li><a href="#" class="text-light">Accueil</a></li>
              <li><a href="#" class="text-light">Actualités</a></li>
              <li><a href="#" class="text-light">Événements</a></li>
              <li><a href="#" class="text-light">Clubs</a></li>
              <li><a href="#" class="text-light">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h5>Contact</h5>
            <ul class="list-unstyled">
              <li><i class="fas fa-map-marker-alt"></i> EMSI, Maroc</li>
              <li><i class="fas fa-phone"></i> +212 XXX-XXXXXX</li>
              <li><i class="fas fa-envelope"></i> contact@emsi.ma</li>
            </ul>
          </div>
        </div>
        <hr class="my-4" />
        <div class="text-center">
          <p class="mb-0">
            &copy; 2024 Association des Étudiants EMSI. Tous droits réservés.
          </p>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
