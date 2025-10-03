@extends('layouts.app')

@section('title', 'Mon profil - EMSI')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Mon profil</h4>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <div class="avatar-circle mb-3">
                            <span class="initials">{{ substr($user->name, 0, 1) }}</span>
                        </div>
                        <h3>{{ $user->first_name }} {{ $user->name }}</h3>
                        <p class="text-muted">{{ $user->email }}</p>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Événements</h5>
                                    <p class="card-text">
                                        <strong>Événements organisés :</strong> {{ $user->organizedEvents->count() }}<br>
                                        <strong>Événements participés :</strong> {{ $user->participatingEvents->count() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Clubs</h5>
                                    <p class="card-text">
                                        <strong>Clubs membres :</strong> {{ $user->clubs->count() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">À propos de moi</h5>
                            @if($user->bio)
                                <p class="card-text">{{ $user->bio }}</p>
                            @else
                                <p class="text-muted">Aucune biographie disponible</p>
                            @endif
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Mes intérêts</h5>
                            @if($user->interests && count($user->interests) > 0)
                                <div class="d-flex flex-wrap gap-2">
                                    @foreach($user->interests as $interest)
                                        <span class="badge bg-primary">{{ $interest }}</span>
                                    @endforeach
                                </div>
                            @else
                                <p class="text-muted">Aucun intérêt spécifié</p>
                            @endif
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Mes activités récentes</h5>
                            <div class="list-group">
                                @if($user->participatingEvents->count() > 0)
                                    <h6 class="mt-3">Événements à venir</h6>
                                    @foreach($user->participatingEvents->where('date', '>=', now())->take(3) as $event)
                                        <a href="{{ route('evenements.show', $event) }}" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1">{{ $event->title }}</h6>
                                                <small>{{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</small>
                                            </div>
                                            <p class="mb-1">{{ Str::limit($event->description, 100) }}</p>
                                        </a>
                                    @endforeach
                                @endif

                                @if($user->clubs->count() > 0)
                                    <h6 class="mt-3">Mes clubs</h6>
                                    @foreach($user->clubs->take(3) as $club)
                                        <a href="{{ route('clubs.show', $club) }}" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1">{{ $club->name }}</h6>
                                                <small>Membre depuis {{ \Carbon\Carbon::parse($club->pivot->date_inscription)->format('d/m/Y') }}</small>
                                            </div>
                                            <p class="mb-1">{{ Str::limit($club->description, 100) }}</p>
                                        </a>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <a href="{{ route('profile.edit') }}" class="btn btn-primary">Modifier mon profil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.avatar-circle {
    width: 100px;
    height: 100px;
    background-color: #009639;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
}

.initials {
    font-size: 40px;
    color: white;
    font-weight: bold;
}

.badge {
    font-size: 0.9rem;
    padding: 0.5rem 1rem;
}
</style>
@endsection 