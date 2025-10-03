<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connexion - Association des Étudiants EMSI</title>
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

    <!-- Login Section -->
    <section class="login-section min-vh-100 d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg">
              <div class="card-body p-5">
                <h2 class="text-center mb-4">Connexion</h2>
                <form id="login-form" class="needs-validation" novalidate>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email EMSI</label>
                    <div class="input-group">
                      <span class="input-group-text"
                        ><i class="fas fa-envelope"></i
                      ></span>
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
                      />
                      <button
                        class="btn btn-outline-secondary"
                        type="button"
                        id="togglePassword"
                      >
                        <i class="fas fa-eye"></i>
                      </button>
                      <div class="invalid-feedback">
                        Veuillez entrer votre mot de passe.
                      </div>
                    </div>
                  </div>
                  <div class="mb-3 form-check">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="remember"
                      name="remember"
                    />
                    <label class="form-check-label" for="remember"
                      >Se souvenir de moi</label
                    >
                  </div>
                  <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg">
                      Se connecter
                    </button>
                  </div>
                  <div class="text-center mt-3">
                    <a
                      href="#"
                      class="text-decoration-none"
                      data-bs-toggle="modal"
                      data-bs-target="#forgotPasswordModal"
                    >
                      Mot de passe oublié ?
                    </a>
                  </div>
                </form>
                <hr class="my-4" />
                <div class="text-center">
                  <p class="mb-0">Pas encore de compte ?</p>
                  <a
                    href="inscription.html"
                    class="btn btn-outline-primary mt-2"
                  >
                    Créer un compte
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Forgot Password Modal -->
    <div class="modal fade" id="forgotPasswordModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Réinitialisation du mot de passe</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
            ></button>
          </div>
          <div class="modal-body">
            <form id="forgot-password-form">
              <div class="mb-3">
                <label for="reset-email" class="form-label">Email EMSI</label>
                <input
                  type="email"
                  class="form-control"
                  id="reset-email"
                  required
                />
                <div class="form-text">
                  Un lien de réinitialisation sera envoyé à votre adresse email.
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Annuler
            </button>
            <button
              type="submit"
              form="forgot-password-form"
              class="btn btn-primary"
            >
              Envoyer le lien
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

      // Form validation
      const forms = document.querySelectorAll(".needs-validation");
      Array.from(forms).forEach((form) => {
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
      });
    </script>
  </body>
</html>
