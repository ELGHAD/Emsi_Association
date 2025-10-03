<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inscription - Association des Étudiants EMSI</title>
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
  <body class="bg-light">
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
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Registration Section -->
    <section
      class="registration-section min-vh-100 d-flex align-items-center py-5"
    >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg">
              <div class="card-body p-5">
                <h2 class="text-center mb-4">Inscription</h2>
                <form id="register-form" class="needs-validation" novalidate>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="nom" class="form-label">Nom</label>
                      <input
                        type="text"
                        class="form-control"
                        id="nom"
                        name="nom"
                        required
                      />
                      <div class="invalid-feedback">
                        Veuillez entrer votre nom.
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="prenom" class="form-label">Prénom</label>
                      <input
                        type="text"
                        class="form-control"
                        id="prenom"
                        name="prenom"
                        required
                      />
                      <div class="invalid-feedback">
                        Veuillez entrer votre prénom.
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email EMSI</label>
                    <div class="input-group">
                      <span class="input-group-text">@</span>
                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="prenom.nom@emsi.ma"
                        required
                      />
                      <div class="invalid-feedback">
                        Veuillez entrer une adresse email EMSI valide.
                      </div>
                    </div>
                    <div class="form-text">
                      Utilisez votre adresse email EMSI (@emsi.ma)
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label"
                      >Mot de passe</label
                    >
                    <div class="input-group">
                      <span class="input-group-text"
                        ><i class="fas fa-lock"></i
                      ></span>
                      <input
                        type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        required
                        minlength="8"
                      />
                      <button
                        class="btn btn-outline-secondary"
                        type="button"
                        id="togglePassword"
                      >
                        <i class="fas fa-eye"></i>
                      </button>
                    </div>
                    <div class="form-text">
                      Le mot de passe doit contenir au moins 8 caractères.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="confirm-password" class="form-label"
                      >Confirmer le mot de passe</label
                    >
                    <div class="input-group">
                      <span class="input-group-text"
                        ><i class="fas fa-lock"></i
                      ></span>
                      <input
                        type="password"
                        class="form-control"
                        id="confirm-password"
                        name="confirm-password"
                        required
                      />
                    </div>
                    <div class="invalid-feedback">
                      Les mots de passe ne correspondent pas.
                    </div>
                  </div>
                  <div class="mb-3 form-check">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="terms"
                      required
                    />
                    <label class="form-check-label" for="terms">
                      J'accepte les
                      <a
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#termsModal"
                        >conditions d'utilisation</a
                      >
                    </label>
                    <div class="invalid-feedback">
                      Vous devez accepter les conditions d'utilisation.
                    </div>
                  </div>
                  <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg">
                      S'inscrire
                    </button>
                  </div>
                </form>
                <hr class="my-4" />
                <div class="text-center">
                  <p class="mb-0">Déjà inscrit ?</p>
                  <a href="connexion.html" class="btn btn-outline-primary mt-2">
                    Se connecter
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Terms Modal -->
    <div class="modal fade" id="termsModal" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Conditions d'utilisation</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
            ></button>
          </div>
          <div class="modal-body">
            <h6>1. Acceptation des conditions</h6>
            <p>
              En vous inscrivant sur le site de l'Association des Étudiants
              EMSI, vous acceptez les présentes conditions d'utilisation.
            </p>

            <h6>2. Utilisation du site</h6>
            <p>
              Vous vous engagez à utiliser le site de manière responsable et à
              respecter les autres utilisateurs.
            </p>

            <h6>3. Protection des données</h6>
            <p>
              Vos données personnelles sont collectées et traitées conformément
              à notre politique de confidentialité.
            </p>

            <h6>4. Responsabilités</h6>
            <p>
              L'association n'est pas responsable des contenus publiés par les
              utilisateurs.
            </p>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Fermer
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
      // Toggle password visibility
      document
        .getElementById("togglePassword")
        .addEventListener("click", function () {
          const password = document.getElementById("password");
          const icon = this.querySelector("i");

          if (password.type === "password") {
            password.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
          } else {
            password.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
          }
        });

      // Password confirmation validation
      const password = document.getElementById("password");
      const confirmPassword = document.getElementById("confirm-password");

      function validatePassword() {
        if (password.value !== confirmPassword.value) {
          confirmPassword.setCustomValidity(
            "Les mots de passe ne correspondent pas"
          );
        } else {
          confirmPassword.setCustomValidity("");
        }
      }

      password.addEventListener("change", validatePassword);
      confirmPassword.addEventListener("keyup", validatePassword);

      // Form validation
      const form = document.getElementById("register-form");
      form.addEventListener(
        "submit",
        (event) => {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add("was-validated");
        },
        false
      );
    </script>
  </body>
</html>
