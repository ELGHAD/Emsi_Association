<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clubs - Association des Étudiants EMSI</title>
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
                <a class="nav-link active" href="clubs.html">Clubs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
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
    <main class="clubs-content pt-5 mt-5">
      <div class="container">
        <!-- Page Header -->
        <section class="page-header mb-5">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h1 class="display-4 mb-3">Clubs</h1>
              <p class="lead text-muted">
                Découvrez et rejoignez les clubs de l'association
              </p>
            </div>
            <div class="col-md-4 text-md-end">
              <div class="input-group">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Rechercher un club..."
                  id="search-input"
                />
                <button
                  class="btn btn-outline-primary"
                  type="button"
                  id="search-button"
                >
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </section>

        <!-- Filters -->
        <section class="filters mb-4">
          <div class="row">
            <div class="col-md-12">
              <div class="btn-group" role="group">
                <button
                  type="button"
                  class="btn btn-outline-primary active"
                  data-filter="all"
                >
                  Tous
                </button>
                <button
                  type="button"
                  class="btn btn-outline-primary"
                  data-filter="technique"
                >
                  Technique
                </button>
                <button
                  type="button"
                  class="btn btn-outline-primary"
                  data-filter="culturel"
                >
                  Culturel
                </button>
                <button
                  type="button"
                  class="btn btn-outline-primary"
                  data-filter="sportif"
                >
                  Sportif
                </button>
                <button
                  type="button"
                  class="btn btn-outline-primary"
                  data-filter="academique"
                >
                  Académique
                </button>
                <button
                  type="button"
                  class="btn btn-outline-primary"
                  data-filter="social"
                >
                  Social
                </button>
              </div>
            </div>
          </div>
        </section>

        <!-- Clubs Grid -->
        <section class="clubs-grid mb-5">
          <div class="row" id="clubs-container">
            <!-- Les clubs seront chargés dynamiquement -->
          </div>
        </section>

        <!-- Pagination -->
        <section class="pagination-section">
          <nav aria-label="Navigation des pages">
            <ul class="pagination justify-content-center" id="pagination">
              <!-- La pagination sera générée dynamiquement -->
            </ul>
          </nav>
        </section>
      </div>
    </main>

    <!-- Club Modal -->
    <div class="modal fade" id="clubModal" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="club-title"></h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
            ></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-8">
                <div class="club-image mb-4">
                  <img
                    src=""
                    alt=""
                    id="club-image"
                    class="img-fluid rounded"
                  />
                </div>
                <div class="club-description mb-4" id="club-description"></div>
                <div class="club-activities mb-4">
                  <h6>Activités</h6>
                  <ul id="club-activities-list">
                    <!-- Les activités seront chargées dynamiquement -->
                  </ul>
                </div>
                <div class="club-schedule">
                  <h6>Horaires de réunion</h6>
                  <p id="club-schedule"></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <h6 class="card-title">Informations</h6>
                    <ul class="list-unstyled">
                      <li class="mb-2">
                        <i class="fas fa-users text-primary"></i>
                        <span id="club-members"></span> membres
                      </li>
                      <li class="mb-2">
                        <i class="fas fa-calendar-alt text-primary"></i>
                        <span id="club-creation-date"></span>
                      </li>
                      <li class="mb-2">
                        <i class="fas fa-map-marker-alt text-primary"></i>
                        <span id="club-location"></span>
                      </li>
                    </ul>
                    <button class="btn btn-primary w-100" id="join-button">
                      Rejoindre le club
                    </button>
                    <button
                      class="btn btn-outline-danger w-100 mt-2 d-none"
                      id="leave-button"
                    >
                      Quitter le club
                    </button>
                  </div>
                </div>
                <div class="card mt-3">
                  <div class="card-body">
                    <h6 class="card-title">Responsables</h6>
                    <div id="club-leaders">
                      <!-- Les responsables seront chargés dynamiquement -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
      // Configuration
      let currentFilter = "all";
      let searchQuery = "";
      let currentPage = 1;
      const ITEMS_PER_PAGE = 9;

      // Charger les clubs
      async function loadClubs() {
        try {
          const response = await fetch(
            `${API_BASE_URL}/clubs?page=${currentPage}&filter=${currentFilter}&search=${searchQuery}`
          );
          const data = await response.json();

          const container = document.getElementById("clubs-container");
          container.innerHTML = data.clubs
            .map(
              (club) => `
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="${club.image}" class="card-img-top" alt="${club.nom}">
                            <div class="card-body">
                                <h5 class="card-title">${club.nom}</h5>
                                <p class="card-text">${club.description}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-primary">${club.categorie}</span>
                                    <button class="btn btn-outline-primary btn-sm" 
                                            onclick="showClub(${club.id})">
                                        Voir détails
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                `
            )
            .join("");

          // Mettre à jour la pagination
          updatePagination(data.total, data.totalPages);
        } catch (error) {
          console.error("Erreur:", error);
          utils.showToast("Erreur lors du chargement des clubs", "error");
        }
      }

      // Afficher un club
      async function showClub(id) {
        try {
          const response = await fetch(`${API_BASE_URL}/clubs/${id}`);
          const club = await response.json();

          document.getElementById("club-title").textContent = club.nom;
          document.getElementById("club-image").src = club.image;
          document.getElementById("club-description").innerHTML =
            club.description;
          document.getElementById("club-members").textContent = club.membres;
          document.getElementById("club-creation-date").textContent =
            utils.formatDate(club.dateCreation);
          document.getElementById("club-location").textContent = club.lieu;
          document.getElementById("club-schedule").textContent = club.horaires;

          // Activités
          const activitiesList = document.getElementById(
            "club-activities-list"
          );
          activitiesList.innerHTML = club.activites
            .map(
              (activite) => `
                    <li class="mb-2">${activite}</li>
                `
            )
            .join("");

          // Responsables
          const leadersContainer = document.getElementById("club-leaders");
          leadersContainer.innerHTML = club.responsables
            .map(
              (responsable) => `
                    <div class="d-flex align-items-center mb-3">
                        <img src="${responsable.avatar}" class="rounded-circle me-2" 
                             alt="${responsable.nom}" width="40" height="40">
                        <div>
                            <h6 class="mb-0">${responsable.nom}</h6>
                            <small class="text-muted">${responsable.role}</small>
                        </div>
                    </div>
                `
            )
            .join("");

          // Gérer l'état d'adhésion
          const joinButton = document.getElementById("join-button");
          const leaveButton = document.getElementById("leave-button");

          if (club.estMembre) {
            joinButton.classList.add("d-none");
            leaveButton.classList.remove("d-none");
          } else {
            joinButton.classList.remove("d-none");
            leaveButton.classList.add("d-none");
          }

          // Stocker l'ID du club pour les actions
          document.getElementById("clubModal").dataset.clubId = id;

          const modal = new bootstrap.Modal(
            document.getElementById("clubModal")
          );
          modal.show();
        } catch (error) {
          console.error("Erreur:", error);
          utils.showToast("Erreur lors du chargement du club", "error");
        }
      }

      // Mettre à jour la pagination
      function updatePagination(total, totalPages) {
        const pagination = document.getElementById("pagination");
        let html = `
                <li class="page-item ${currentPage === 1 ? "disabled" : ""}">
                    <a class="page-link" href="#" data-page="${
                      currentPage - 1
                    }">Précédent</a>
                </li>
            `;

        for (let i = 1; i <= totalPages; i++) {
          html += `
                    <li class="page-item ${currentPage === i ? "active" : ""}">
                        <a class="page-link" href="#" data-page="${i}">${i}</a>
                    </li>
                `;
        }

        html += `
                <li class="page-item ${
                  currentPage === totalPages ? "disabled" : ""
                }">
                    <a class="page-link" href="#" data-page="${
                      currentPage + 1
                    }">Suivant</a>
                </li>
            `;

        pagination.innerHTML = html;

        // Ajouter les gestionnaires d'événements
        pagination.querySelectorAll(".page-link").forEach((link) => {
          link.addEventListener("click", (e) => {
            e.preventDefault();
            const page = parseInt(e.target.dataset.page);
            if (page && page !== currentPage) {
              currentPage = page;
              loadClubs();
            }
          });
        });
      }

      // Gestionnaires d'événements
      document.addEventListener("DOMContentLoaded", () => {
        // Vérifier l'authentification
        const token = localStorage.getItem("token");
        if (token) {
          document.getElementById("auth-buttons").classList.add("d-none");
          document.getElementById("user-menu").classList.remove("d-none");
          // TODO: Charger les informations de l'utilisateur
        }

        // Charger les clubs initiaux
        loadClubs();

        // Filtres
        document.querySelectorAll("[data-filter]").forEach((button) => {
          button.addEventListener("click", () => {
            document
              .querySelectorAll("[data-filter]")
              .forEach((btn) => btn.classList.remove("active"));
            button.classList.add("active");
            currentFilter = button.dataset.filter;
            currentPage = 1;
            loadClubs();
          });
        });

        // Recherche
        let searchTimeout;
        document
          .getElementById("search-input")
          .addEventListener("input", (e) => {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
              searchQuery = e.target.value;
              currentPage = 1;
              loadClubs();
            }, 500);
          });

        // Rejoindre/Quitter un club
        document
          .getElementById("join-button")
          .addEventListener("click", async () => {
            const clubId = document.getElementById("clubModal").dataset.clubId;
            try {
              const response = await fetch(
                `${API_BASE_URL}/clubs/${clubId}/rejoindre`,
                {
                  method: "POST",
                  headers: {
                    Authorization: `Bearer ${localStorage.getItem("token")}`,
                  },
                }
              );

              if (!response.ok)
                throw new Error("Erreur lors de l'adhésion au club");

              utils.showToast("Adhésion au club réussie !", "success");
              document.getElementById("join-button").classList.add("d-none");
              document
                .getElementById("leave-button")
                .classList.remove("d-none");
            } catch (error) {
              console.error("Erreur:", error);
              utils.showToast("Erreur lors de l'adhésion au club", "error");
            }
          });

        document
          .getElementById("leave-button")
          .addEventListener("click", async () => {
            const clubId = document.getElementById("clubModal").dataset.clubId;
            try {
              const response = await fetch(
                `${API_BASE_URL}/clubs/${clubId}/quitter`,
                {
                  method: "POST",
                  headers: {
                    Authorization: `Bearer ${localStorage.getItem("token")}`,
                  },
                }
              );

              if (!response.ok)
                throw new Error("Erreur lors de la sortie du club");

              utils.showToast(
                "Vous avez quitté le club avec succès",
                "success"
              );
              document.getElementById("join-button").classList.remove("d-none");
              document.getElementById("leave-button").classList.add("d-none");
            } catch (error) {
              console.error("Erreur:", error);
              utils.showToast("Erreur lors de la sortie du club", "error");
            }
          });
      });
    </script>
  </body>
</html>
