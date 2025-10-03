@extends('layouts.app')

@section('content')
<div class="container py-5 mt-5">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row">
        <!-- Profile Sidebar -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <div class="position-relative d-inline-block mb-3">
                        <img src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('assets/images/default-avatar.png') }}" 
                             class="rounded-circle img-thumbnail" 
                             style="width: 150px; height: 150px; object-fit: cover;"
                             alt="{{ $user->full_name }}">
                        <button class="btn btn-sm btn-primary position-absolute bottom-0 end-0" 
                                data-bs-toggle="modal" 
                                data-bs-target="#editProfileModal">
                            <i class="fas fa-camera"></i>
                        </button>
                    </div>
                    <h4 class="card-title mb-0">{{ $user->full_name }}</h4>
                    <p class="text-muted">{{ $user->email }}</p>
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-primary" 
                                data-bs-toggle="modal" 
                                data-bs-target="#editProfileModal">
                            <i class="fas fa-edit me-2"></i>Modifier le profil
                        </button>
                    </div>
                </div>
            </div>

            <!-- Personal Information Card -->
            <div class="card shadow-sm mt-4">
                <div class="card-body">
                    <h5 class="card-title mb-4">Informations personnelles</h5>
                    <div class="mb-3">
                        <label class="text-muted small">Nom complet</label>
                        <p class="mb-0">{{ $user->full_name }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="text-muted small">Email</label>
                        <p class="mb-0">{{ $user->email }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="text-muted small">Membre depuis</label>
                        <p class="mb-0">{{ $user->created_at->format('d/m/Y') }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="text-muted small">Dernière connexion</label>
                        <p class="mb-0">{{ $user->last_login_at ? $user->last_login_at->format('d/m/Y H:i') : 'Jamais' }}</p>
                    </div>
                </div>
            </div>

            <!-- Interests Card -->
            <div class="card shadow-sm mt-4">
                <div class="card-body">
                    <h5 class="card-title">Centres d'intérêt</h5>
                    <div class="d-flex flex-wrap gap-2">
                        @forelse($user->interests ?? [] as $interest)
                            <span class="badge bg-primary">{{ $interest }}</span>
                        @empty
                            <p class="text-muted mb-0">Aucun centre d'intérêt défini</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <!-- Profile Main Content -->
        <div class="col-md-8">
            <!-- Bio Card -->
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">À propos de moi</h5>
                    <p class="card-text">{{ $user->bio ?? 'Aucune biographie définie' }}</p>
                </div>
            </div>

            <!-- Activities -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-4">Activités récentes</h5>
                    
                    <!-- Events Section -->
                    <div class="mb-4">
                        <h6 class="text-muted mb-3">
                            <i class="fas fa-calendar-alt me-2"></i>Événements à venir
                        </h6>
                        @if($user->participatingEvents && $user->participatingEvents->count() > 0)
                            <div class="list-group">
                                @foreach($user->participatingEvents as $event)
                                    <a href="{{ route('evenements.show', $event) }}" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">{{ $event->title }}</h6>
                                            <small>{{ $event->date ? $event->date->format('d/m/Y') : 'Date non définie' }}</small>
                                        </div>
                                        <p class="mb-1 text-muted">{{ Str::limit($event->description, 100) }}</p>
                                    </a>
                                @endforeach
                            </div>
                        @else
                            <p class="text-muted">Aucun événement à venir</p>
                        @endif
                    </div>

                    <!-- Clubs Section -->
                    <div>
                        <h6 class="text-muted mb-3">
                            <i class="fas fa-users me-2"></i>Clubs
                        </h6>
                        @if($user->clubs && $user->clubs->count() > 0)
                            <div class="list-group">
                                @foreach($user->clubs as $club)
                                    <a href="{{ route('clubs.show', $club) }}" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">{{ $club->name }}</h6>
                                            <small>Membre depuis {{ $club->pivot->created_at->format('d/m/Y') }}</small>
                                        </div>
                                        <p class="mb-1 text-muted">{{ Str::limit($club->description, 100) }}</p>
                                    </a>
                                @endforeach
                            </div>
                        @else
                            <p class="text-muted">Aucune adhésion à un club</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Profile Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProfileModalLabel">Modifier le profil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                               id="name" name="name" value="{{ old('name', $user->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="first_name" class="form-label">Prénom</label>
                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" 
                               id="first_name" name="first_name" value="{{ old('first_name', $user->first_name) }}" required>
                        @error('first_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                               id="email" name="email" value="{{ old('email', $user->email) }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="bio" class="form-label">Bio</label>
                        <textarea class="form-control @error('bio') is-invalid @enderror" 
                                  id="bio" name="bio" rows="3">{{ old('bio', $user->bio) }}</textarea>
                        @error('bio')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Centres d'intérêt</label>
                        <div class="row g-3">
                            @php
                                $interests = ['Technologie', 'Science', 'Art', 'Sport', 'Musique', 'Littérature'];
                                $userInterests = $user->interests ?? [];
                            @endphp
                            @foreach($interests as $interest)
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" 
                                               name="interests[]" value="{{ $interest }}" 
                                               id="interest_{{ $loop->index }}"
                                               {{ in_array($interest, $userInterests) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="interest_{{ $loop->index }}">
                                            {{ $interest }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @error('interests')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="avatar" class="form-label">Photo de profil</label>
                        <input type="file" class="form-control @error('avatar') is-invalid @enderror" 
                               id="avatar" name="avatar" accept="image/*">
                        @error('avatar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Format accepté : JPG, PNG, GIF (max. 1MB)</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection 