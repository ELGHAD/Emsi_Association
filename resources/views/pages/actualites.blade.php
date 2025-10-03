@extends('layouts.app')

@section('content')
<div class="container py-5 mt-5">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="display-4 mb-3">Actualités</h1>
            <p class="lead text-muted">Restez informé des dernières nouvelles de l'EMSI</p>
        </div>
    </div>

    <!-- Search and Filter Section -->
    <div class="row mb-4">
        <div class="col-md-8">
            <form action="{{ route('actualites.index') }}" method="GET" class="d-flex gap-2">
                <div class="flex-grow-1">
                    <input type="text" name="search" class="form-control" 
                           placeholder="Rechercher une actualité..." 
                           value="{{ request('search') }}">
                </div>
                <div class="col-auto">
                    <select name="category" class="form-select">
                        <option value="">Toutes les catégories</option>
                        <option value="academic" {{ request('category') == 'academic' ? 'selected' : '' }}>Académique</option>
                        <option value="campus" {{ request('category') == 'campus' ? 'selected' : '' }}>Campus</option>
                        <option value="student" {{ request('category') == 'student' ? 'selected' : '' }}>Vie étudiante</option>
                        <option value="research" {{ request('category') == 'research' ? 'selected' : '' }}>Recherche</option>
                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- News Grid -->
    <div class="row g-4">
        @forelse($news as $article)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm hover-shadow">
                    @if($article->image)
                        <img src="{{ asset('storage/' . $article->image) }}" 
                             class="card-img-top" 
                             alt="{{ $article->title }}"
                             style="height: 200px; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <div class="mb-2">
                            <span class="badge bg-primary">{{ $article->category }}</span>
                            <small class="text-muted ms-2">
                                <i class="fas fa-calendar-alt me-1"></i>
                                {{ $article->publication_date->format('d/m/Y') }}
                            </small>
                        </div>
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text text-muted">{{ Str::limit($article->excerpt, 100) }}</p>
                        
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <a href="{{ route('actualites.show', $article) }}" class="btn btn-outline-primary">
                                Lire la suite
                            </a>
                            <small class="text-muted">
                                <i class="fas fa-user me-1"></i>
                                {{ $article->author ? $article->author->name : 'Auteur inconnu' }}
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">
                    Aucune actualité trouvée.
                </div>
            </div>
        @endforelse
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

.card-img-top {
    border-top-left-radius: calc(0.25rem - 1px);
    border-top-right-radius: calc(0.25rem - 1px);
}

.pagination {
    margin-bottom: 0;
}
</style>
@endsection 