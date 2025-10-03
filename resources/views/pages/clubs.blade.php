@extends('layouts.student')

@section('student-content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow rounded-4 p-4 text-center" style="background: #fff;">
                <h2 class="fw-bold mb-0" style="color: #007A3D;">
                    <i class="fas fa-users me-2" style="color: #007A3D;"></i>Clubs étudiants
                </h2>
            </div>
        </div>
    </div>
    <div class="row g-4">
        @forelse($clubs as $club)
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('clubs.show', $club) }}" class="card-link-wrapper">
                    <div class="card h-100 shadow-sm hover-shadow rounded-4 clickable-card">
                        @if($club->image)
                            <img src="{{ asset('storage/' . $club->image) }}" class="card-img-top" alt="{{ $club->name }}" style="height: 200px; object-fit: cover;">
                        @endif
                        <div class="card-body h-100 club-card-body">
                            <div class="mb-2">
                                <span class="badge event-type-badge">{{ $club->category }}</span>
                                <small class="text-muted ms-2">
                                    <i class="fas fa-users me-1" style="color: #007A3D;"></i>
                                    {{ $club->members->count() }} membres
                                </small>
                            </div>
                            <h5 class="card-title">{{ $club->name }}</h5>
                            <p class="card-text text-muted">{{ Str::limit($club->description, 100) }}</p>
                            <div class="mb-3">
                                <small class="text-muted">
                                    <i class="fas fa-map-marker-alt me-1" style="color: #007A3D;"></i>
                                    {{ $club->location }}
                                </small>
                                <br>
                                <small class="text-muted">
                                    <i class="fas fa-clock me-1" style="color: #007A3D;"></i>
                                    {{ $club->meeting_schedule }}
                                </small>
                            </div>
                            @auth
                                <div class="d-flex gap-2">
                                    @if(isset($club->is_member) && $club->is_member)
                                        <form action="{{ route('clubs.leave', $club) }}" method="POST" class="d-inline w-50" onclick="event.stopPropagation();">
                                            @csrf
                                            <button type="submit" class="btn btn-danger w-100">Quitter</button>
                                        </form>
                                    @else
                                        <form action="{{ route('clubs.join', $club) }}" method="POST" class="d-inline w-50" onclick="event.stopPropagation();">
                                            @csrf
                                            <button type="submit" class="btn btn-success w-100" style="background-color: #007A3D; border-color: #007A3D;">Rejoindre</button>
                                        </form>
                                    @endif
                                </div>
                            @endauth
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">
                    Aucun club trouvé.
                </div>
            </div>
        @endforelse
    </div>
</div>

<style>
.card {
    border: none;
    border-radius: 1.5rem;
    transition: box-shadow 0.2s;
}
.card:hover {
    box-shadow: 0 8px 24px rgba(0, 122, 61, 0.12);
}
.btn-success {
    background-color: #007A3D;
    border-color: #007A3D;
}
.btn-success:hover {
    background-color: #005c2e;
    border-color: #005c2e;
}
.event-type-badge {
    background-color: #007A3D !important;
    color: #fff !important;
    font-weight: 500;
    border-radius: 0.75rem;
    padding: 0.5em 1em;
    font-size: 1em;
}
.d-flex.gap-2 > * {
    margin-bottom: 0 !important;
}
.card-link-wrapper {
    text-decoration: none;
    color: inherit;
    display: block;
}
.clickable-card {
    cursor: pointer;
    transition: box-shadow 0.2s, transform 0.2s;
}
.clickable-card:hover {
    box-shadow: 0 12px 32px rgba(0, 122, 61, 0.18);
    transform: translateY(-4px) scale(1.02);
}
.club-card-body {
    min-height: 320px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
</style>
@endsection 