@extends('layouts.student')

@section('student-content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow rounded-4 p-4 text-center" style="background: #fff;">
                <h2 class="fw-bold mb-0" style="color: #007A3D;">
                    <i class="fas fa-calendar-alt me-2" style="color: #007A3D;"></i>Événements à venir
                </h2>
            </div>
        </div>
    </div>
    <div class="row g-4">
        @forelse($events as $event)
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('evenements.show', $event) }}" class="card-link-wrapper">
                    <div class="card h-100 shadow-sm hover-shadow rounded-4 clickable-card">
                        @if($event->image)
                            <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="{{ $event->title }}" style="height: 200px; object-fit: cover;">
                        @endif
                        <div class="card-body h-100 event-card-body">
                            <div class="mb-2">
                                <span class="badge event-type-badge">{{ $event->type }}</span>
                                <small class="text-muted ms-2">
                                    <i class="fas fa-users me-1" style="color: #007A3D;"></i>
                                    {{ $event->participants->count() }} / {{ $event->capacity }} participants
                                </small>
                            </div>
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-text text-muted">{{ Str::limit($event->description, 100) }}</p>
                            <div class="mb-3">
                                <small class="text-muted">
                                    <i class="fas fa-calendar-alt me-1" style="color: #007A3D;"></i>
                                    {{ $event->date ? $event->date->format('d/m/Y H:i') : 'Date non définie' }}
                                </small>
                                <br>
                                <small class="text-muted">
                                    <i class="fas fa-map-marker-alt me-1" style="color: #007A3D;"></i>
                                    {{ $event->location }}
                                </small>
                            </div>
                            @auth
                                <div class="d-flex gap-2">
                                    @if(isset($event->is_participant) && $event->is_participant)
                                        <form action="{{ route('events.cancel', $event) }}" method="POST" class="d-inline w-50" onclick="event.stopPropagation();">
                                            @csrf
                                            <button type="submit" class="btn btn-danger w-100">Quitter</button>
                                        </form>
                                    @else
                                        <form action="{{ route('events.participate', $event) }}" method="POST" class="d-inline w-50" onclick="event.stopPropagation();">
                                            @csrf
                                            <button type="submit" class="btn btn-success w-100" style="background-color: #007A3D; border-color: #007A3D;">Participer</button>
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
                    Aucun événement trouvé.
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
.event-card-body {
    min-height: 320px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
</style>
@endsection 