@extends('layouts.student')

@section('student-content')
<div class="container py-5 mt-3">
    <!-- Back Button -->
    <div class="mb-4">
        <a href="{{ route('clubs.index') }}" class="btn btn-success" style="background-color: #007A3D; border-color: #007A3D; color: #fff;">
            <i class="fas fa-arrow-left me-2"></i>Retour aux clubs
        </a>
    </div>

    <!-- Club Header -->
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="display-4 mb-2">{{ $club->name }}</h1>
            <div class="d-flex align-items-center mb-3">
                <span class="badge event-type-badge">{{ $club->category }}</span>
                <small class="text-muted ms-2">
                    <i class="fas fa-users me-1" style="color: #007A3D;"></i>
                    {{ $club->members->count() }} membres
                </small>
            </div>
        </div>
        <div class="col-md-4 text-md-end">
            @auth
                @if($club->members->contains(auth()->id()))
                    <form action="{{ route('clubs.leave', $club) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Quitter le club</button>
                    </form>
                @else
                    <form action="{{ route('clubs.join', $club) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-success" style="background-color: #007A3D; border-color: #007A3D;">Rejoindre le club</button>
                    </form>
                @endif
            @else
                <a href="{{ route('login') }}" class="btn btn-success" style="background-color: #007A3D; border-color: #007A3D;">Connectez-vous pour rejoindre</a>
            @endauth
        </div>
    </div>

    <!-- Club Content -->
    <div class="row">
        <div class="col-md-8">
            <!-- Featured Image -->
            @if($club->image)
                <div class="mb-4">
                    <img src="{{ asset('storage/' . $club->image) }}" 
                         alt="{{ $club->name }}" 
                         class="img-fluid rounded shadow">
                </div>
            @endif

            <!-- Description -->
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Description</h5>
                    <div class="card-text">
                        {!! nl2br(e($club->description)) !!}
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-md-4">
            <!-- Club Info -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Informations</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-calendar-alt" style="color: #007A3D;"></i>
                            <strong>Créé le:</strong> {{ $club->creation_date->format('d/m/Y') }}
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-map-marker-alt" style="color: #007A3D;"></i>
                            <strong>Lieu:</strong> {{ $club->location }}
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-clock" style="color: #007A3D;"></i>
                            <strong>Réunions:</strong> {{ $club->meeting_schedule }}
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Members -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Membres</h5>
                </div>
                <div class="card-body">
                    @if($club->members->count() > 0)
                        <div class="list-group">
                            @foreach($club->members as $member)
                                <div class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        @if($member->avatar)
                                            <img src="{{ asset('storage/' . $member->avatar) }}" 
                                                 alt="{{ $member->name }}" 
                                                 class="rounded-circle me-2" 
                                                 width="40" height="40">
                                        @else
                                            <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center me-2" 
                                                 style="width: 40px; height: 40px;">
                                                {{ strtoupper(substr($member->name, 0, 1)) }}
                                            </div>
                                        @endif
                                        <div>
                                            <h6 class="mb-0">{{ $member->name }} {{ $member->first_name }}</h6>
                                            <small class="text-muted">
                                                Membre depuis {{ $member->pivot->created_at->format('d/m/Y') }}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-muted mb-0">Aucun membre pour le moment.</p>
                    @endif
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