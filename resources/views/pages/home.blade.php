@extends('layouts.app')

@section('title', 'Accueil - EMSI')

@section('content')
    <!-- Hero Section -->
    <div class="hero-section position-relative">
        <div class="hero-image">
            <img src="{{ asset('assets/images/Emsi Campus.jpg') }}" alt="EMSI Campus" class="w-100">
            <div class="hero-overlay"></div>
        </div>
        <div class="container position-relative">
            <div class="row min-vh-100 align-items-center">
                <div class="col-md-8 text-white">
                    <h1 class="display-3 fw-bold mb-4 text-shadow">Bienvenue à l'EMSI</h1>
                    <p class="lead mb-4 text-shadow">École Marocaine des Sciences de l'Ingénieur - Votre avenir commence ici</p>
                    @guest
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-5 py-3">Se connecter</a>
                    @endguest
                </div>
            </div>
        </div>
    </div>

    <!-- Actualités Section -->
    <section class="py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="section-title">Actualités récentes</h2>
                <a href="{{ route('actualites.index') }}" class="btn btn-outline-primary">Voir toutes les actualités</a>
            </div>
            <div class="row">
                @foreach($news as $article)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="{{ $article->image_url }}" class="card-img-top" alt="{{ $article->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
                                <a href="{{ route('actualites.show', $article) }}" class="btn btn-primary">Lire la suite</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Formations Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="section-title">Nos Formations</h2>
                <a href="{{ route('formations.index') }}" class="btn btn-outline-primary">Voir toutes les formations</a>
            </div>
            <div class="row">
                @foreach($formations as $formation)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h5 class="card-title mb-0">{{ $formation['nom'] }}</h5>
                                    <span class="badge bg-primary">{{ $formation['code'] }}</span>
                                </div>
                                <p class="card-text">{{ Str::limit($formation['description'], 100) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">
                                        <i class="fas fa-clock me-1"></i> {{ $formation['duree'] }}
                                    </span>
                                    <span class="badge bg-secondary">{{ $formation['niveau'] }}</span>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent border-0">
                                <a href="{{ route('formations.show', $formation['id']) }}" class="btn btn-primary w-100">Voir les détails</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @auth
    <!-- Événements Section -->
    <section class="py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="section-title">Événements à venir</h2>
                <a href="{{ route('evenements.index') }}" class="btn btn-outline-primary">Voir tous les événements</a>
            </div>
            <div class="row">
                @foreach($events as $event)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="{{ $event->image_url }}" class="card-img-top" alt="{{ $event->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $event->title }}</h5>
                                <p class="card-text">{{ Str::limit($event->description, 100) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">
                                        <i class="fas fa-calendar me-1"></i> {{ $event->date->format('d/m/Y') }}
                                    </span>
                                    <a href="{{ route('evenements.show', $event) }}" class="btn btn-primary">Plus d'infos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endauth

    @auth
    <!-- Clubs Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="section-title">Clubs étudiants</h2>
                <a href="{{ route('clubs.index') }}" class="btn btn-outline-primary">Voir tous les clubs</a>
            </div>
            <div class="row">
                @foreach($clubs as $club)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="{{ $club->image_url }}" class="card-img-top" alt="{{ $club->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $club->name }}</h5>
                                <p class="card-text">{{ Str::limit($club->description, 100) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">
                                        <i class="fas fa-users me-1"></i> {{ $club->members_count }} membres
                                    </span>
                                    <a href="{{ route('clubs.show', $club) }}" class="btn btn-primary">Rejoindre</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endauth

    <style>
    .hero-section {
        position: relative;
        overflow: hidden;
        height: 100vh;
    }
    
    .hero-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    
    .hero-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.4));
    }
    
    .text-shadow {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    
    .btn-primary {
        background-color: #28a745;
        border: none;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        background-color: #218838;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    </style>
@endsection 