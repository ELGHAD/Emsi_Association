@extends('layouts.student')

@section('student-content')
<div class="container py-5 mt-3">
    <!-- Back Button -->
    <div class="mb-4">
        <a href="{{ route('evenements.index') }}" class="btn btn-success" style="background-color: #007A3D; border-color: #007A3D; color: #fff;">
            <i class="fas fa-arrow-left me-2"></i>Retour aux événements
        </a>
    </div>

    <!-- Event Header -->
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="display-4 mb-2">{{ $event->title }}</h1>
            <div class="d-flex align-items-center mb-3">
                <span class="badge event-type-badge">{{ $event->type }}</span>
                <small class="text-muted ms-2">
                    <i class="fas fa-calendar-alt me-1" style="color: #007A3D;"></i>
                    {{ $event->date ? $event->date->format('d/m/Y H:i') : 'Date non définie' }}
                </small>
            </div>
        </div>
        <div class="col-md-4 text-md-end">
            @auth
                @if(isset($event->is_participant) && $event->is_participant)
                    <form action="{{ route('events.cancel', $event) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Annuler ma participation</button>
                    </form>
                @else
                    <form action="{{ route('events.participate', $event) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-success" style="background-color: #007A3D; border-color: #007A3D;">Participer</button>
                    </form>
                @endif
            @else
                <a href="{{ route('login') }}" class="btn btn-success" style="background-color: #007A3D; border-color: #007A3D;">Connectez-vous pour participer</a>
            @endauth
        </div>
    </div>

    <!-- Event Content -->
    <div class="row">
        <div class="col-md-8">
            <!-- Featured Image -->
            @if($event->image)
                <div class="mb-4">
                    <img src="{{ asset('storage/' . $event->image) }}" 
                         alt="{{ $event->title }}" 
                         class="img-fluid rounded shadow">
                </div>
            @endif

            <!-- Description -->
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Description</h5>
                    <div class="card-text">
                        {!! nl2br(e($event->description)) !!}
                    </div>
                </div>
            </div>

            <!-- Additional Information -->
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Informations</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-map-marker-alt" style="color: #007A3D;"></i>
                            <strong>Lieu:</strong> {{ $event->location }}
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-users" style="color: #007A3D;"></i>
                            <strong>Participants:</strong> 
                            {{ $event->participants->count() }} / {{ $event->capacity }}
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-clock" style="color: #007A3D;"></i>
                            <strong>Date:</strong> 
                            {{ $event->date ? $event->date->format('d/m/Y H:i') : 'Date non définie' }}
                        </li>
                        @if($event->end_date)
                            <li class="mb-2">
                                <i class="fas fa-calendar-check" style="color: #007A3D;"></i>
                                <strong>Fin:</strong> 
                                {{ $event->end_date ? $event->end_date->format('d/m/Y H:i') : 'Date non définie' }}
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-md-4">
            <!-- Participants -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Participants</h5>
                </div>
                <div class="card-body">
                    @if($event->participants->count() > 0)
                        <div class="list-group">
                            @foreach($event->participants as $participant)
                                <div class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        @if($participant->avatar)
                                            <img src="{{ asset('storage/' . $participant->avatar) }}" 
                                                 alt="{{ $participant->name }}" 
                                                 class="rounded-circle me-2" 
                                                 width="40" height="40">
                                        @else
                                            <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center me-2" 
                                                 style="width: 40px; height: 40px;">
                                                {{ strtoupper(substr($participant->name, 0, 1)) }}
                                            </div>
                                        @endif
                                        <div>
                                            <h6 class="mb-0">{{ $participant->name }} {{ $participant->first_name }}</h6>
                                            <small class="text-muted">
                                                Inscrit le {{ $participant->pivot->date_inscription ? $participant->pivot->date_inscription->format('d/m/Y') : 'Date inconnue' }}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-muted mb-0">Aucun participant pour le moment.</p>
                    @endif
                </div>
            </div>

            <!-- Share & Print -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Partager</h5>
                    <div class="d-flex gap-2 mb-3">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" 
                           class="btn btn-outline-primary" 
                           target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($event->title) }}" 
                           class="btn btn-outline-info" 
                           target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($event->title) }}" 
                           class="btn btn-outline-primary" 
                           target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    <button onclick="window.print()" class="btn btn-outline-secondary w-100">
                        <i class="fas fa-print me-2"></i>Imprimer
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.event-type-badge {
    background-color: #007A3D !important;
    color: #fff !important;
    font-weight: 500;
    border-radius: 0.75rem;
    padding: 0.5em 1em;
    font-size: 1em;
}
</style>
@endsection 