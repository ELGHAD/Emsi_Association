@extends('layouts.app')

@section('title', 'Formations - EMSI')

@section('content')
<div class="container py-5 mt-5">
    <!-- Page Header -->
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-4 mb-3">Nos Formations</h1>
            <p class="lead text-muted">Découvrez nos programmes de formation adaptés à vos besoins</p>
        </div>
    </div>

    <!-- Formations Grid -->
    <div class="row g-4">
        @foreach($formations as $formation)
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm hover-shadow">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <span class="badge bg-primary fs-6">{{ $formation['code'] }}</span>
                        <span class="badge bg-secondary">
                            <i class="fas fa-graduation-cap me-1"></i>
                            {{ $formation['niveau'] }}
                        </span>
                    </div>
                    <h5 class="card-title h4 mb-3">{{ $formation['nom'] }}</h5>
                    <p class="card-text text-muted mb-4">{{ Str::limit($formation['description'], 150) }}</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2">
                            <i class="fas fa-clock text-primary me-2"></i>
                            <strong>Durée:</strong> {{ $formation['duree'] }}
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-book text-primary me-2"></i>
                            <strong>Spécialités:</strong>
                            <ul class="mt-2">
                                @foreach($formation['specialites'] as $specialite)
                                    <li class="text-muted">{{ $specialite }}</li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card-footer bg-transparent border-top-0">
                    <a href="{{ route('formations.show', $formation['id']) }}" class="btn btn-primary w-100">
                        <i class="fas fa-info-circle me-2"></i>Voir les détails
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
.hover-shadow {
    transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
}

.hover-shadow:hover {
    transform: translateY(-5px);
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
}

.card {
    border: none;
    border-radius: 10px;
}

.badge {
    padding: 0.5em 1em;
    font-weight: 500;
}

.card-title {
    color: #2c3e50;
    font-weight: 600;
}

.btn-primary {
    padding: 0.75rem 1.5rem;
    font-weight: 500;
}
</style>
@endsection 