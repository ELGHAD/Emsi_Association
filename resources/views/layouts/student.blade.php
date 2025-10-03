<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESI Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: #f8f9fa;
        }
        .student-layout {
            display: flex;
            min-height: 100vh;
        }
        .student-sidebar {
            width: 320px;
            background: #007A3D;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem 1rem 1rem 1rem;
            min-height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 1000;
        }
        .student-sidebar-logo {
            margin-bottom: 2rem;
        }
        .student-sidebar-user {
            text-align: center;
            margin-bottom: 2rem;
        }
        .student-user-name {
            font-weight: bold;
            font-size: 1.2rem;
        }
        .student-user-role {
            font-size: 0.95rem;
            color: #e0f7ef;
        }
        .student-nav {
            width: 100%;
        }
        .student-nav-link {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: #fff;
            font-weight: 500;
            font-size: 1.1rem;
            padding: 0.75rem 1.25rem;
            border-radius: 0.75rem;
            margin-bottom: 0.5rem;
            transition: background 0.2s, color 0.2s, border-bottom 0.2s;
            text-decoration: none;
            border-bottom: 3px solid transparent;
        }
        .student-nav-link.active, .student-nav-link:hover {
            background: rgba(0, 122, 61, 0.15);
            color: #fff;
            text-decoration: none;
            border-bottom: 3px solid #fff;
        }
        .student-main-content {
            margin-left: 320px;
            padding: 2.5rem 2rem 2rem 2rem;
            width: 100%;
        }
        @media (max-width: 991.98px) {
            .student-sidebar {
                width: 120px;
                padding: 1rem 0.5rem;
            }
            .student-main-content {
                margin-left: 120px;
                padding: 1.5rem 0.5rem;
            }
            .student-nav-link {
                font-size: 0.95rem;
                padding: 0.5rem 0.5rem;
            }
        }
    </style>
</head>
<body>
@if(auth()->check())
<div class="student-layout">
    <aside class="student-sidebar">
        <div class="student-sidebar-logo mb-4">
            <i class="fas fa-user-graduate fa-2x text-white"></i>
        </div>
        <div class="student-sidebar-user mb-3">
            <span class="student-user-name">{{ Auth::user()->first_name ?? Auth::user()->name }}</span><br>
            <span class="student-user-role">Étudiant</span>
        </div>
        <nav class="student-nav flex-column w-100">
            <a href="{{ route('dashboard') }}" class="student-nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="fas fa-home"></i> Tableau de bord
            </a>
            <a href="{{ url('/evenements') }}" class="student-nav-link {{ request()->is('evenements*') ? 'active' : '' }}">
                <i class="fas fa-calendar-alt"></i> Événements
            </a>
            <a href="{{ url('/clubs') }}" class="student-nav-link {{ request()->is('clubs*') ? 'active' : '' }}">
                <i class="fas fa-users"></i> Clubs
            </a>
            <form action="{{ route('logout') }}" method="POST" class="mt-3">
                @csrf
                <button type="submit" class="student-nav-link w-100 text-start" style="background:none;border:none;outline:none;">
                    <i class="fas fa-sign-out-alt"></i> Déconnexion
                </button>
            </form>
        </nav>
    </aside>
    <main class="student-main-content">
        @yield('student-content')
    </main>
</div>
@else
    <div class="container py-5 text-center">
        <div class="alert alert-warning mt-5">Vous devez être connecté en tant qu'étudiant pour accéder à cette page.</div>
        <a href="{{ url('/') }}" class="btn btn-success mt-3">Retour à l'accueil</a>
    </div>
@endif
</body>
</html> 