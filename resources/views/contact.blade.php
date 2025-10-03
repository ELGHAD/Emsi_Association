<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact - Association des Étudiants EMSI</title>
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
          <a class="navbar-brand" href="index.html">
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
                <a class="nav-link active" href="contact.html">Contact</a>
              </li>
            </ul>
            <div class="d-flex align-items-center">
              <div id="auth-buttons">
                <a href="connexion.html" class="btn btn-outline-primary me-2"
                  >Se connecter</a
                >
                <a href="inscription.html" class="btn btn-primary"
                  >S'inscrire</a
                >
              </div>
              <div id="user-menu" class="d-none">
                <div class="dropdown">
                  <button
                    class="btn btn-link text-dark text-decoration-none dropdown-toggle"
                    type="button"
                    id="notificationsDropdown"
                    data-bs-toggle="dropdown"
                  >
                    <i class="fas fa-bell"></i>
                    <span class="notification-badge">0</span>
                  </button>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="notificationsDropdown"
                  >
                    <li><h6 class="dropdown-header">Notifications</h6></li>
                    <li>
                      <a class="dropdown-item" href="#">Aucune notification</a>
                    </li>
                  </ul>
                </div>
                <div class="dropdown ms-3">
                  <button
                    class="btn btn-link text-dark text-decoration-none dropdown-toggle d-flex align-items-center"
                    type="button"
                    id="userDropdown"
                    data-bs-toggle="dropdown"
                  >
                    <img
                      src="assets/images/profile-placeholder.jpg"
                      class="rounded-circle me-2"
                      alt="Photo de profil"
                      width="32"
                      height="32"
                    />
                    <span id="user-name">John Doe</span>
                  </button>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="userDropdown"
                  >
                    <li>
                      <a class="dropdown-item" href="dashboard.html"
                        >Tableau de bord</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="profile.html"
                        >Mon profil</a
                      >
                    </li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                      <a class="dropdown-item" href="#" id="logout-btn"
                        >Déconnexion</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <!-- Main Content -->
    <main class="contact-content pt-5 mt-5">
      <div class="container">
        <!-- Page Header -->
        <section class="page-header mb-5">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h1 class="display-4 mb-3">Contact</h1>
              <p class="lead text-muted">
                Nous sommes là pour répondre à vos questions
              </p>
            </div>
          </div>
        </section>

        <!-- Contact Information and Form -->
        <section class="contact-section mb-5">
          <div class="row">
            <!-- Contact Information -->
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title mb-4">Informations de contact</h5>
                  <div class="contact-info">
                    <div class="d-flex mb-3">
                      <i
                        class="fas fa-map-marker-alt text-primary me-3 mt-1"
                      ></i>
                      <div>
                        <h6 class="mb-1">Adresse</h6>
                        <p class="mb-0">
                          123 Avenue de l'Université<br />
                          75000 Paris, France
                        </p>
                      </div>
                    </div>
                    <div class="d-flex mb-3">
                      <i class="fas fa-phone text-primary me-3 mt-1"></i>
                      <div>
                        <h6 class="mb-1">Téléphone</h6>
                        <p class="mb-0">+33 1 23 45 67 89</p>
                      </div>
                    </div>
                    <div class="d-flex mb-3">
                      <i class="fas fa-envelope text-primary me-3 mt-1"></i>
                      <div>
                        <h6 class="mb-1">Email</h6>
                        <p class="mb-0">contact@emsi-association.fr</p>
                      </div>
                    </div>
                    <div class="d-flex">
                      <i class="fas fa-clock text-primary me-3 mt-1"></i>
                      <div>
                        <h6 class="mb-1">Horaires d'ouverture</h6>
                        <p class="mb-0">
                          Lundi - Vendredi: 9h00 - 18h00<br />
                          Samedi: 9h00 - 13h00
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Contact Form -->
            <div class="col-md-8">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Envoyez-nous un message</h5>
                  <form id="contact-form">
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input
                          type="text"
                          class="form-control"
                          id="nom"
                          required
                        />
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input
                          type="email"
                          class="form-control"
                          id="email"
                          required
                        />
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="sujet" class="form-label">Sujet</label>
                      <input
                        type="text"
                        class="form-control"
                        id="sujet"
                        required
                      />
                    </div>
                    <div class="mb-3">
                      <label for="message" class="form-label">Message</label>
                      <textarea
                        class="form-control"
                        id="message"
                        rows="5"
                        required
                      ></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">
                      Envoyer le message
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Map Section -->
        <section class="map-section mb-5">
          <div class="card">
            <div class="card-body p-0">
              <div id="map" style="height: 400px"></div>
            </div>
          </div>
        </section>
      </div>
    </main>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script src="assets/js/main.js"></script>
    <script>
      // Initialiser la carte
      function initMap() {
        const location = { lat: 48.8566, lng: 2.3522 }; // Coordonnées de Paris
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 15,
          center: location,
        });
        const marker = new google.maps.Marker({
          position: location,
          map: map,
        });
      }

      // Gérer l'envoi du formulaire
      document.addEventListener("DOMContentLoaded", () => {
        // Vérifier l'authentification
        const token = localStorage.getItem("token");
        if (token) {
          document.getElementById("auth-buttons").classList.add("d-none");
          document.getElementById("user-menu").classList.remove("d-none");
          // TODO: Charger les informations de l'utilisateur
        }

        // Initialiser la carte
        initMap();

        // Gérer l'envoi du formulaire
        document
          .getElementById("contact-form")
          .addEventListener("submit", async (e) => {
            e.preventDefault();

            const formData = {
              nom: document.getElementById("nom").value,
              email: document.getElementById("email").value,
              sujet: document.getElementById("sujet").value,
              message: document.getElementById("message").value,
            };

            try {
              const response = await fetch(`${API_BASE_URL}/contact`, {
                method: "POST",
                headers: {
                  "Content-Type": "application/json",
                },
                body: JSON.stringify(formData),
              });

              if (!response.ok)
                throw new Error("Erreur lors de l'envoi du message");

              utils.showToast("Message envoyé avec succès !", "success");
              e.target.reset();
            } catch (error) {
              console.error("Erreur:", error);
              utils.showToast("Erreur lors de l'envoi du message", "error");
            }
          });
      });
    </script>
  </body>
</html>
