@extends('layouts.app')

@section('title', $formation['nom'] . ' - EMSI')

@section('content')
<!-- Page Header -->
<div class="page-header bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 mb-3">{{ $formation['nom'] }}</h1>
                <p class="lead text-muted mb-0">{{ Str::limit($formation['description'], 200) }}</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <span class="badge bg-primary fs-5">{{ $formation['code'] }}</span>
                <span class="badge bg-secondary fs-5 ms-2">
                    <i class="fas fa-graduation-cap me-1"></i>
                    {{ $formation['niveau'] }}
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Formation Details Section -->
<section class="formation-details py-5">
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- About Section -->
                <div class="card shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h2 class="card-title h3 mb-4">À propos de la formation</h2>
                        <p class="lead mb-4">{{ $formation['description'] }}</p>
                        
                        <div class="row g-4">
                            <div class="col-md-12">
                                <div class="card h-100 border-0 bg-light">
                                    <div class="card-body">
                                        <h3 class="h5 mb-3">Informations clés</h3>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-3">
                                                <i class="fas fa-clock text-success me-2"></i>
                                                <strong>Durée:</strong> {{ $formation['duree'] }}
                                            </li>
                                            <li class="mb-3">
                                                <i class="fas fa-graduation-cap text-success me-2"></i>
                                                <strong>Niveau:</strong> {{ $formation['niveau'] }}
                                            </li>
                                            <li class="mb-3">
                                                <i class="fas fa-code text-success me-2"></i>
                                                <strong>Code:</strong> {{ $formation['code'] }}
                                            </li>
                                            <li>
                                                <i class="fas fa-calendar text-success me-2"></i>
                                                <strong>Prochaine rentrée:</strong> {{ $formation['rentree'] }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modules Section -->
                <div class="card shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h2 class="card-title h3 mb-4">Spécialités</h2>
                        <div class="row g-4">
                            @foreach($formation['specialites'] as $specialite)
                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-book text-success me-2 mt-1"></i>
                                    <div>
                                        <h4 class="h6 mb-1">{{ $specialite }}</h4>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Job Prospects -->
                <div class="card shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h2 class="card-title h3 mb-4">Débouchés professionnels</h2>
                        <div class="row g-4">
                            @foreach($formation['debouches'] as $debouche)
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    <span>{{ $debouche }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Admission Requirements -->
                <div class="card shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h2 class="card-title h3 mb-4">Conditions d'admission</h2>
                        <ul class="list-unstyled mb-0">
                            @foreach($formation['conditions'] as $condition)
                            <li class="mb-3">
                                <i class="fas fa-check text-success me-2"></i>
                                {{ $condition }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Partners -->
                <div class="card shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h2 class="card-title h3 mb-4">Partenaires</h2>
                        <div class="row g-4">
                            @foreach($formation['partenaires'] as $partenaire)
                            <div class="col-6">
                                <div class="text-center">
                                    <img src="{{ asset('assets/images/partenaires/' . $partenaire) }}" 
                                         alt="Logo partenaire" 
                                         class="img-fluid"
                                         style="max-height: 60px;">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Contact CTA -->
                <div class="card shadow-sm">
                    <div class="card-body p-4 text-center">
                        <h3 class="h4 mb-3">Intéressé par cette formation ?</h3>
                        <p class="mb-4">Contactez-nous pour plus d'informations sur les conditions d'admission et les dates de rentrée.</p>
                        <a href="{{ route('contact.index') }}" class="btn btn-primary btn-lg w-100">
                            <i class="fas fa-envelope me-2"></i>Nous contacter
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.page-header {
    background: linear-gradient(to right, #f8f9fa, #e9ecef);
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

.text-success {
    color: #198754 !important;
}
</style>
@endsection 