@extends('layouts.app')

@section('content')
<div class="container py-5 mt-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <!-- Back Button -->
            <div class="mb-4">
                <a href="{{ route('actualites.index') }}" class="btn btn-outline-primary">
                    <i class="fas fa-arrow-left me-2"></i>Retour aux actualités
                </a>
            </div>

            <!-- Article Header -->
            <div class="mb-4">
                <span class="badge bg-primary mb-2">{{ $news->category }}</span>
                <h1 class="display-4 mb-3">{{ $news->title }}</h1>
                <div class="d-flex align-items-center text-muted mb-4">
                    <div class="me-4">
                        <i class="fas fa-user me-2"></i>
                        {{ $news->author->name }}
                    </div>
                    <div>
                        <i class="fas fa-calendar-alt me-2"></i>
                        {{ $news->publication_date->format('d/m/Y') }}
                    </div>
                </div>
            </div>

            <!-- Featured Image -->
            @if($news->image)
                <div class="mb-4">
                    <img src="{{ asset('storage/' . $news->image) }}" 
                         alt="{{ $news->title }}" 
                         class="img-fluid rounded shadow-sm"
                         style="width: 100%; max-height: 400px; object-fit: cover;">
                </div>
            @endif

            <!-- Article Content -->
            <div class="article-content">
                {!! $news->content !!}
            </div>

            <!-- Article Footer -->
            <div class="mt-5 pt-4 border-top">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="text-muted">
                        <small>
                            <i class="fas fa-clock me-1"></i>
                            Publié le {{ $news->publication_date->format('d/m/Y à H:i') }}
                        </small>
                    </div>
                    <div class="share-buttons">
                        <button class="btn btn-outline-primary btn-sm me-2">
                            <i class="fas fa-share-alt me-1"></i>Partager
                        </button>
                        <button class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-print me-1"></i>Imprimer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.article-content {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #2c3e50;
}

.article-content p {
    margin-bottom: 1.5rem;
}

.article-content img {
    max-width: 100%;
    height: auto;
    border-radius: 0.5rem;
    margin: 2rem 0;
}

.article-content h2, 
.article-content h3, 
.article-content h4 {
    margin: 2rem 0 1rem;
    color: #2c3e50;
}

.article-content blockquote {
    border-left: 4px solid #3498db;
    padding-left: 1rem;
    margin: 2rem 0;
    font-style: italic;
    color: #7f8c8d;
}

.article-content ul, 
.article-content ol {
    margin: 1.5rem 0;
    padding-left: 2rem;
}

.article-content li {
    margin-bottom: 0.5rem;
}

.article-content a {
    color: #3498db;
    text-decoration: none;
}

.article-content a:hover {
    text-decoration: underline;
}
</style>
@endsection 