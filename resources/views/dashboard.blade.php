@extends('layouts.student')

@section('student-content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow rounded-4 p-4 text-center" style="background: #fff;">
                <h2 class="fw-bold mb-0" style="color: #198754;">
                    <i class="fas fa-home me-2"></i>Tableau de bord étudiant
                </h2>
                <p class="mt-2 mb-0 text-muted">Bienvenue, {{ Auth::user()->first_name ?? Auth::user()->name }} !</p>
            </div>
        </div>
    </div>
    <div class="row g-4 mb-4">
        <div class="col-md-6">
            <div class="card shadow rounded-4 p-4 text-center h-100">
                <div class="mb-3">
                    <span class="dashboard-icon bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width:60px;height:60px;font-size:2rem;">
                        <i class="fas fa-calendar-alt"></i>
                    </span>
                </div>
                <h3 class="fw-bold mb-1" style="color: #198754;">{{ Auth::user()->participatingEvents()->count() }}</h3>
                <div class="mb-2 text-muted">Événements</div>
                <a href="{{ url('/evenements') }}" class="btn btn-success w-100">Voir les événements</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow rounded-4 p-4 text-center h-100">
                <div class="mb-3">
                    <span class="dashboard-icon bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width:60px;height:60px;font-size:2rem;">
                        <i class="fas fa-users"></i>
                    </span>
                </div>
                <h3 class="fw-bold mb-1" style="color: #198754;">{{ Auth::user()->clubs()->count() }}</h3>
                <div class="mb-2 text-muted">Clubs</div>
                <a href="{{ url('/clubs') }}" class="btn btn-success w-100">Voir les clubs</a>
            </div>
        </div>
    </div>
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card shadow rounded-4 p-4 h-100">
                <h5 class="fw-bold mb-3" style="color: #198754;">Événements à venir</h5>
                <ul class="list-group list-group-flush">
                    @foreach(Auth::user()->participatingEvents()->take(3)->get() as $event)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <div class="fw-bold">{{ $event->title }}</div>
                                <div class="small text-muted">{{ Str::limit($event->description, 60) }}</div>
                            </div>
                            <span class="badge bg-success">{{ $event->date->format('d/m/Y') }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow rounded-4 p-4 h-100">
                <h5 class="fw-bold mb-3" style="color: #198754;">Mes clubs</h5>
                <ul class="list-group list-group-flush">
                    @foreach(Auth::user()->clubs()->take(3)->get() as $club)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <div class="fw-bold">{{ $club->name }}</div>
                                <div class="small text-muted">{{ Str::limit($club->description, 60) }}</div>
                            </div>
                            <span class="badge bg-success">{{ $club->members->count() }} membres</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
.dashboard-icon {
    box-shadow: 0 2px 8px rgba(25, 135, 84, 0.12);
}
.card {
    border: none;
    border-radius: 1.5rem;
    transition: box-shadow 0.2s;
}
.card:hover {
    box-shadow: 0 8px 24px rgba(25, 135, 84, 0.12);
}
</style>
@endsection
