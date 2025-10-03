@extends('layouts.admin')

@section('content')
<div class="dashboard-container">
    <div class="dashboard-header mb-4">
        <img src="{{ asset('assets/images/emsi_logo.jpg') }}" alt="EMSI Logo" class="dashboard-logo">
        <h1 class="dashboard-title">Tableau de bord</h1>
    </div>

    <div class="row g-4">
        <!-- Utilisateurs -->
        <div class="col-md-6 col-lg-3">
            <div class="dashboard-card">
                <div class="card-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="card-content">
                    <h3>{{ $users->count() }}</h3>
                    <p>Utilisateurs</p>
                </div>
                <a href="{{ route('admin.users.index') }}" class="card-link">
                    <i class="fas fa-arrow-right"></i>
                </a>
                <div class="card-bg"></div>
            </div>
        </div>

        <!-- Clubs -->
        <div class="col-md-6 col-lg-3">
            <div class="dashboard-card">
                <div class="card-icon">
                    <i class="fas fa-users-cog"></i>
                </div>
                <div class="card-content">
                    <h3>{{ $clubs->count() }}</h3>
                    <p>Clubs</p>
                </div>
                <a href="{{ route('admin.clubs.index') }}" class="card-link">
                    <i class="fas fa-arrow-right"></i>
                </a>
                <div class="card-bg"></div>
            </div>
        </div>

        <!-- Événements -->
        <div class="col-md-6 col-lg-3">
            <div class="dashboard-card">
                <div class="card-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="card-content">
                    <h3>{{ $events->count() }}</h3>
                    <p>Événements</p>
                </div>
                <a href="{{ route('admin.events.index') }}" class="card-link">
                    <i class="fas fa-arrow-right"></i>
                </a>
                <div class="card-bg"></div>
            </div>
        </div>

        <!-- Actualités -->
        <div class="col-md-6 col-lg-3">
            <div class="dashboard-card">
                <div class="card-icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <div class="card-content">
                    <h3>{{ $news->count() }}</h3>
                    <p>Actualités</p>
                </div>
                <a href="{{ route('admin.news.index') }}" class="card-link">
                    <i class="fas fa-arrow-right"></i>
                </a>
                <div class="card-bg"></div>
            </div>
        </div>
    </div>
</div>

<style>
.dashboard-container {
    padding: 2.5rem;
    min-height: calc(100vh - 60px);
    background: #f8f9fa;
}

.dashboard-header {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    background: white;
    padding: 1.5rem;
    border-radius: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    margin-bottom: 2rem;
}

.dashboard-logo {
    height: 60px;
    width: auto;
    object-fit: contain;
}

.dashboard-title {
    font-size: 2rem;
    font-weight: 600;
    color: #2c3e50;
    margin: 0;
    background: linear-gradient(135deg, #198754, #146c43);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.dashboard-card {
    background: white;
    border-radius: 20px;
    padding: 2rem;
    position: relative;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
    height: 100%;
    min-height: 200px;
    display: flex;
    flex-direction: column;
    border: 1px solid rgba(25, 135, 84, 0.1);
}

.dashboard-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 20px 30px rgba(25, 135, 84, 0.15);
    border-color: rgba(25, 135, 84, 0.2);
}

.card-icon {
    position: absolute;
    top: 1.5rem;
    right: 1.5rem;
    width: 65px;
    height: 65px;
    background: linear-gradient(135deg, #198754, #146c43);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.8rem;
    box-shadow: 0 8px 16px rgba(25, 135, 84, 0.2);
    transition: all 0.3s ease;
}

.dashboard-card:hover .card-icon {
    transform: scale(1.1) rotate(5deg);
}

.card-content {
    margin-top: 2rem;
    position: relative;
    z-index: 1;
}

.card-content h3 {
    font-size: 3rem;
    font-weight: 700;
    color: #2c3e50;
    margin: 0;
    line-height: 1;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
}

.card-content p {
    color: #6c757d;
    margin: 1rem 0 0;
    font-size: 1.3rem;
    font-weight: 500;
}

.card-link {
    position: absolute;
    bottom: 1.5rem;
    right: 1.5rem;
    width: 45px;
    height: 45px;
    background: linear-gradient(135deg, #198754, #146c43);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 8px rgba(25, 135, 84, 0.2);
    z-index: 2;
}

.card-link:hover {
    transform: translateX(5px) scale(1.1);
    background: linear-gradient(135deg, #146c43, #0f5132);
    color: white;
    box-shadow: 0 6px 12px rgba(25, 135, 84, 0.3);
}

.card-bg {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(25, 135, 84, 0.05), rgba(20, 108, 67, 0.1));
    opacity: 0;
    transition: all 0.3s ease;
}

.dashboard-card:hover .card-bg {
    opacity: 1;
}

@media (max-width: 768px) {
    .dashboard-container {
        padding: 1.5rem;
    }
    
    .dashboard-header {
        flex-direction: column;
        text-align: center;
        padding: 1rem;
    }

    .dashboard-logo {
        height: 50px;
    }

    .dashboard-title {
        font-size: 1.5rem;
    }
    
    .dashboard-card {
        margin-bottom: 1.5rem;
        min-height: 180px;
        padding: 1.5rem;
    }

    .card-icon {
        width: 50px;
        height: 50px;
        font-size: 1.5rem;
    }

    .card-content h3 {
        font-size: 2.5rem;
    }

    .card-content p {
        font-size: 1.1rem;
    }

    .card-link {
        width: 40px;
        height: 40px;
    }
}
</style>
@endsection 