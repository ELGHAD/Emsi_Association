<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Événements - Association des Étudiants EMSI</title>
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
    <!-- FullCalendar CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css"
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
                <a class="nav-link active" href="evenements.html">Événements</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="clubs.html">Clubs</a>
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
    <main class="evenements-content pt-5 mt-5">
      <div class="container">
        <!-- Page Header -->
        <section class="page-header mb-5">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h1 class="display-4 mb-3">Événements</h1>
              <p class="lead text-muted">
                Découvrez et participez aux événements de l'association
              </p>
            </div>
            <div class="col-md-4 text-md-end">
              <div class="btn-group" role="group">
                <button
                  type="button"
                  class="btn btn-outline-primary active"
                  data-view="calendar"
                >
                  <i class="fas fa-calendar"></i> Calendrier
                </button>
                <button
                  type="button"
                  class="btn btn-outline-primary"
                  data-view="list"
                >
                  <i class="fas fa-list"></i> Liste
                </button>
              </div>
            </div>
          </div>
        </section>

        <!-- Filters -->
        <section class="filters mb-4">
          <div class="row">
            <div class="col-md-8">
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
                  data-filter="conferences"
                >
                  Conférences
                </button>
                <button
                  type="button"
                  class="btn btn-outline-primary"
                  data-filter="workshops"
                >
                  Ateliers
                </button>
                <button
                  type="button"
                  class="btn btn-outline-primary"
                  data-filter="competitions"
                >
                  Compétitions
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
            <div class="col-md-4">
              <div class="input-group">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Rechercher un événement..."
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

        <!-- Calendar View -->
        <section id="calendar-view" class="mb-5">
          <div class="card">
            <div class="card-body">
              <div id="calendar"></div>
            </div>
          </div>
        </section>

        <!-- List View -->
        <section id="list-view" class="mb-5 d-none">
          <div class="row" id="events-container">
            <!-- Les événements seront chargés dynamiquement -->
          </div>
        </section>

        <!-- Pagination (List View Only) -->
        <section class="pagination-section d-none" id="list-pagination">
          <nav aria-label="Navigation des pages">
            <ul class="pagination justify-content-center" id="pagination">
              <!-- La pagination sera générée dynamiquement -->
            </ul>
          </nav>
        </section>
      </div>
    </main>

    <!-- Event Modal -->
    <div class="modal fade" id="eventModal" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="event-title"></h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
            ></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-8">
                <div class="event-image mb-4">
                  <img
                    src=""
                    alt=""
                    id="event-image"
                    class="img-fluid rounded"
                  />
                </div>
                <div
                  class="event-description mb-4"
                  id="event-description"
                ></div>
                <div class="event-details">
                  <h6>Détails de l'événement</h6>
                  <ul class="list-unstyled">
                    <li class="mb-2">
                      <i class="fas fa-calendar text-primary"></i>
                      <span id="event-date"></span>
                    </li>
                    <li class="mb-2">
                      <i class="fas fa-clock text-primary"></i>
                      <span id="event-time"></span>
                    </li>
                    <li class="mb-2">
                      <i class="fas fa-map-marker-alt text-primary"></i>
                      <span id="event-location"></span>
                    </li>
                    <li class="mb-2">
                      <i class="fas fa-users text-primary"></i>
                      <span id="event-participants"></span> participants
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <h6 class="card-title">Inscription</h6>
                    <p class="card-text" id="event-registration-info"></p>
                    <button class="btn btn-primary w-100" id="register-button">
                      S'inscrire à l'événement
                    </button>
                    <button
                      class="btn btn-outline-danger w-100 mt-2 d-none"
                      id="unregister-button"
                    >
                      Se désinscrire
                    </button>
                  </div>
                </div>
                <div class="card mt-3">
                  <div class="card-body">
                    <h6 class="card-title">Organisateur</h6>
                    <div class="d-flex align-items-center">
                      <img
                        src=""
                        alt=""
                        id="organizer-avatar"
                        class="rounded-circle me-2"
                        width="32"
                        height="32"
                      />
                      <div>
                        <h6 class="mb-0" id="organizer-name"></h6>
                        <small class="text-muted" id="organizer-role"></small>
                      </div>
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
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
      // Configuration
      let calendar;
      let currentView = "calendar";
      let currentFilter = "all";
      let searchQuery = "";
      let currentPage = 1;
      const ITEMS_PER_PAGE = 9;

      // Initialiser le calendrier
      document.addEventListener("DOMContentLoaded", function () {
        const calendarEl = document.getElementById("calendar");
        calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: "dayGridMonth",
          locale: "fr",
          headerToolbar: {
            left: "prev,next today",
            center: "title",
            right: "dayGridMonth,timeGridWeek,timeGridDay",
          },
          buttonText: {
            today: "Aujourd'hui",
            month: "Mois",
            week: "Semaine",
            day: "Jour",
          },
          events: `${API_BASE_URL}/evenements/calendar`,
          eventClick: function (info) {
            showEvent(info.event.id);
          },
          eventDidMount: function (info) {
            info.el.title = info.event.title;
          },
        });
        calendar.render();

        // Charger les événements initiaux
        loadEvents();
      });

      // Charger les événements
      async function loadEvents() {
        try {
          const response = await fetch(
            `${API_BASE_URL}/evenements?page=${currentPage}&filter=${currentFilter}&search=${searchQuery}`
          );
          const data = await response.json();

          if (currentView === "list") {
            const container = document.getElementById("events-container");
            container.innerHTML = data.events
              .map(
                (event) => `
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <img src="${
                                  event.image
                                }" class="card-img-top" alt="${event.titre}">
                                <div class="card-body">
                                    <h5 class="card-title">${event.titre}</h5>
                                    <p class="card-text">${
                                      event.description
                                    }</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">
                                            <i class="fas fa-calendar"></i> ${utils.formatDate(
                                              event.date
                                            )}
                                        </small>
                                        <button class="btn btn-outline-primary btn-sm" 
                                                onclick="showEvent(${
                                                  event.id
                                                })">
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
          }
        } catch (error) {
          console.error("Erreur:", error);
          utils.showToast("Erreur lors du chargement des événements", "error");
        }
      }

      // Afficher un événement
      async function showEvent(id) {
        try {
          const response = await fetch(`${API_BASE_URL}/evenements/${id}`);
          const event = await response.json();

          document.getElementById("event-title").textContent = event.titre;
          document.getElementById("event-image").src = event.image;
          document.getElementById("event-description").innerHTML =
            event.description;
          document.getElementById("event-date").textContent = utils.formatDate(
            event.date
          );
          document.getElementById("event-time").textContent = event.heure;
          document.getElementById("event-location").textContent = event.lieu;
          document.getElementById("event-participants").textContent =
            event.participants;
          document.getElementById("organizer-avatar").src =
            event.organisateur.avatar;
          document.getElementById("organizer-name").textContent =
            event.organisateur.nom;
          document.getElementById("organizer-role").textContent =
            event.organisateur.role;

          // Gérer l'état d'inscription
          const registerButton = document.getElementById("register-button");
          const unregisterButton = document.getElementById("unregister-button");

          if (event.estInscrit) {
            registerButton.classList.add("d-none");
            unregisterButton.classList.remove("d-none");
          } else {
            registerButton.classList.remove("d-none");
            unregisterButton.classList.add("d-none");
          }

          const modal = new bootstrap.Modal(
            document.getElementById("eventModal")
          );
          modal.show();
        } catch (error) {
          console.error("Erreur:", error);
          utils.showToast("Erreur lors du chargement de l'événement", "error");
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
              loadEvents();
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

        // Changement de vue
        document.querySelectorAll("[data-view]").forEach((button) => {
          button.addEventListener("click", () => {
            document
              .querySelectorAll("[data-view]")
              .forEach((btn) => btn.classList.remove("active"));
            button.classList.add("active");
            currentView = button.dataset.view;

            document
              .getElementById("calendar-view")
              .classList.toggle("d-none", currentView !== "calendar");
            document
              .getElementById("list-view")
              .classList.toggle("d-none", currentView !== "list");
            document
              .getElementById("list-pagination")
              .classList.toggle("d-none", currentView !== "list");

            if (currentView === "calendar") {
              calendar.render();
            } else {
              loadEvents();
            }
          });
        });

        // Filtres
        document.querySelectorAll("[data-filter]").forEach((button) => {
          button.addEventListener("click", () => {
            document
              .querySelectorAll("[data-filter]")
              .forEach((btn) => btn.classList.remove("active"));
            button.classList.add("active");
            currentFilter = button.dataset.filter;
            currentPage = 1;
            loadEvents();
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
              loadEvents();
            }, 500);
          });

        // Inscription/Désinscription
        document
          .getElementById("register-button")
          .addEventListener("click", async () => {
            const eventId =
              document.getElementById("eventModal").dataset.eventId;
            try {
              const response = await fetch(
                `${API_BASE_URL}/evenements/${eventId}/inscription`,
                {
                  method: "POST",
                  headers: {
                    Authorization: `Bearer ${localStorage.getItem("token")}`,
                  },
                }
              );

              if (!response.ok) throw new Error("Erreur lors de l'inscription");

              utils.showToast("Inscription réussie !", "success");
              document
                .getElementById("register-button")
                .classList.add("d-none");
              document
                .getElementById("unregister-button")
                .classList.remove("d-none");
            } catch (error) {
              console.error("Erreur:", error);
              utils.showToast("Erreur lors de l'inscription", "error");
            }
          });

        document
          .getElementById("unregister-button")
          .addEventListener("click", async () => {
            const eventId =
              document.getElementById("eventModal").dataset.eventId;
            try {
              const response = await fetch(
                `${API_BASE_URL}/evenements/${eventId}/desinscription`,
                {
                  method: "POST",
                  headers: {
                    Authorization: `Bearer ${localStorage.getItem("token")}`,
                  },
                }
              );

              if (!response.ok)
                throw new Error("Erreur lors de la désinscription");

              utils.showToast("Désinscription réussie !", "success");
              document
                .getElementById("register-button")
                .classList.remove("d-none");
              document
                .getElementById("unregister-button")
                .classList.add("d-none");
            } catch (error) {
              console.error("Erreur:", error);
              utils.showToast("Erreur lors de la désinscription", "error");
            }
          });
      });
    </script>
  </body>
</html>
