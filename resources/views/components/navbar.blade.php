<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
    <div class="container">
        <div class="d-flex align-items-center w-100">
            <!-- Logo à gauche -->
            <div class="me-auto">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/emsi_logo.jpg') }}" alt="EMSI Logo" class="navbar-logo">
                </a>
            </div>
            <!-- Liens de navigation centrés -->
            <div class="flex-grow-1 d-flex justify-content-center">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('formations*') ? 'active' : '' }}" href="{{ route('formations.index') }}">Formations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('actualites*') ? 'active' : '' }}" href="{{ url('/actualites') }}">Actualités</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('dashboard*') ? 'active' : '' }}" href="{{ route('dashboard') }}">Tableau de bord</a>
                        </li>
                    @endguest
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('evenements*') ? 'active' : '' }}" href="{{ url('/evenements') }}">Événements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('clubs*') ? 'active' : '' }}" href="{{ url('/clubs') }}">Clubs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('a-propos') ? 'active' : '' }}" href="{{ url('/a-propos') }}">À propos</a>
                    </li>
                </ul>
            </div>
            <!-- Auth à droite -->
            <div class="ms-auto d-flex align-items-center">
                @guest
                    <div class="auth-buttons">
                        <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Connexion</a>
                    </div>
                @else
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle text-dark text-decoration-none" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Mon Profil</a></li>
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}">Tableau de bord</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Déconnexion</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</nav>

<style>
.navbar {
    padding: 0.2rem 0;
    background: linear-gradient(to right, #ffffff, #f8f9fa) !important;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1) !important;
    height: 180px;
    display: flex;
    align-items: center;
}

.navbar-logo {
    height: 160px;
    width: auto;
    object-fit: contain;
    transition: transform 0.3s ease;
    margin: 0;
    filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
}

.navbar-brand {
    padding: 0;
    margin-right: 1rem;
    display: flex;
    align-items: center;
}

.navbar-logo:hover {
    transform: scale(1.05);
}

.navbar-collapse {
    margin-top: 0 !important;
}

.nav-link {
    font-size: 1rem;
    font-weight: 500;
    color: #333 !important;
    padding: 0.5rem 1rem !important;
    transition: all 0.3s ease;
    position: relative;
}

.nav-link::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: 0;
    left: 50%;
    background-color: #198754;
    transition: all 0.3s ease;
    transform: translateX(-50%);
}

.nav-link:hover::after,
.nav-link.active::after {
    width: 80%;
}

.nav-link:hover {
    color: #198754 !important;
}

.nav-link.active {
    color: #198754 !important;
}

.auth-buttons .btn {
    padding: 0.6rem 1.5rem;
    font-weight: 500;
    border-radius: 25px;
    transition: all 0.3s ease;
    border-width: 2px;
}

.auth-buttons .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.dropdown-toggle {
    font-weight: 500;
    padding: 0.5rem 1rem;
    border-radius: 25px;
    transition: all 0.3s ease;
}

.dropdown-toggle:hover {
    background-color: #f8f9fa;
}

.dropdown-menu {
    border: none;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    padding: 0.5rem;
}

.dropdown-item {
    padding: 0.7rem 1.2rem;
    border-radius: 5px;
    transition: all 0.2s ease;
}

.dropdown-item:hover {
    background-color: #f8f9fa;
    transform: translateX(5px);
}

.dropdown-divider {
    margin: 0.5rem 0;
}

@media (max-width: 991.98px) {
    .navbar-collapse {
        background: white;
        padding: 1rem;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        margin-top: 1rem;
    }
    
    .nav-link {
        padding: 0.8rem 1rem !important;
    }
    
    .auth-buttons {
        margin-top: 1rem;
        text-align: center;
    }
}
</style> 