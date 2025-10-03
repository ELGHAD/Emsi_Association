@extends('layouts.admin')

@section('content')
<div class="page-header mb-4">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h1 class="page-title">
                <i class="fas fa-newspaper text-success me-2"></i>
                Gestion des actualités
            </h1>
            <p class="text-muted">Gérez les actualités de l'école</p>
        </div>
        <a href="{{ route('admin.news.create') }}" class="btn btn-success">
            <i class="fas fa-plus me-2"></i>Ajouter une actualité
        </a>
    </div>
</div>

<x-admin.table
    title="Liste des actualités"
    icon="fas fa-list"
    :headers="['Titre', 'Catégorie', 'Date de publication', 'Statut']"
>
    @forelse($news as $article)
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    @if($article->image)
                        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="rounded" width="40" height="40">
                    @else
                        <div class="avatar-placeholder">
                            <i class="fas fa-newspaper"></i>
                        </div>
                    @endif
                    <div class="ms-3">
                        <h6 class="mb-0">{{ $article->title }}</h6>
                        <small class="text-muted">{{ Str::limit($article->content, 50) }}</small>
                    </div>
                </div>
            </td>
            <td>
                <span class="badge badge-success">
                    <i class="fas fa-tag me-1"></i>
                    {{ $article->category }}
                </span>
            </td>
            <td>
                <div class="d-flex align-items-center">
                    <i class="fas fa-calendar-alt text-success me-2"></i>
                    {{ $article->published_at ? $article->published_at->format('d/m/Y') : $article->created_at->format('d/m/Y') }}
                </div>
            </td>
            <td>
                <span class="badge {{ $article->is_published ? 'badge-success' : 'badge-warning' }}">
                    <i class="fas {{ $article->is_published ? 'fa-check-circle' : 'fa-clock' }} me-1"></i>
                    {{ $article->is_published ? 'Publié' : 'Brouillon' }}
                </span>
            </td>
            <td class="text-end">
                <div class="actions">
                    <a href="{{ route('admin.news.edit', $article) }}" class="btn btn-success btn-sm" title="Modifier">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('admin.news.destroy', $article) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette actualité ?')" title="Supprimer">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">
                <div class="empty-message">
                    <i class="fas fa-newspaper"></i>
                    <p>Aucune actualité trouvée</p>
                    <a href="{{ route('admin.news.create') }}" class="btn btn-success mt-3">
                        <i class="fas fa-plus me-2"></i>Ajouter une actualité
                    </a>
                </div>
            </td>
        </tr>
    @endforelse
</x-admin.table>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show position-fixed bottom-0 end-0 m-3" role="alert">
        <i class="fas fa-check-circle me-2"></i>
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<style>
.page-header {
    background: white;
    padding: 1.5rem;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    margin-bottom: 2rem;
}

.page-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: #2c3e50;
    margin: 0;
}

.btn-success {
    background: linear-gradient(45deg, #198754, #146c43);
    border: none;
    color: white;
    font-weight: 500;
    padding: 0.75rem 1.5rem;
    transition: all 0.3s ease;
}

.btn-success:hover {
    background: linear-gradient(45deg, #146c43, #0f5132);
    transform: translateY(-1px);
    box-shadow: 0 4px 6px rgba(25, 135, 84, 0.2);
}

.alert {
    z-index: 1000;
    box-shadow: 0 4px 12px rgba(25, 135, 84, 0.15);
    border: none;
    background: linear-gradient(45deg, #198754, #146c43);
    color: white;
}

.alert .btn-close {
    color: white;
}

.avatar-placeholder {
    width: 40px;
    height: 40px;
    background: linear-gradient(45deg, #198754, #146c43);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
}

.badge {
    padding: 0.5em 1em;
    font-weight: 500;
    border-radius: 5px;
}

.badge-success {
    background: linear-gradient(45deg, #198754, #146c43);
    color: white;
}

.badge-warning {
    background: linear-gradient(45deg, #ffc107, #ffb300);
    color: #000;
}

.text-success {
    color: #198754 !important;
}

.empty-message {
    text-align: center;
    padding: 3rem;
    color: #6c757d;
}

.empty-message i {
    font-size: 3rem;
    margin-bottom: 1rem;
    color: #198754;
}

.empty-message p {
    font-size: 1.1rem;
    margin-bottom: 1.5rem;
}

.empty-message .btn {
    padding: 0.75rem 1.5rem;
    font-weight: 500;
    background: linear-gradient(45deg, #198754, #146c43);
    border: none;
    transition: all 0.3s ease;
}

.empty-message .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(25, 135, 84, 0.2);
}

.actions .btn {
    padding: 0.5rem;
    width: 32px;
    height: 32px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 6px;
    transition: all 0.3s ease;
}

.actions .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.actions .btn-success {
    background: linear-gradient(45deg, #198754, #146c43);
    border: none;
}

.actions .btn-success:hover {
    background: linear-gradient(45deg, #146c43, #0f5132);
}

.actions .btn-danger {
    background: linear-gradient(45deg, #dc3545, #bb2d3b);
    border: none;
}

.actions .btn-danger:hover {
    background: linear-gradient(45deg, #bb2d3b, #a52834);
}
</style>
@endsection 