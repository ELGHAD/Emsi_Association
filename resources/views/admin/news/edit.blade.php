@extends('layouts.admin')

@section('content')
<x-admin.form
    :action="route('admin.news.update', $news)"
    method="PUT"
    title="Modifier l'actualité"
    icon="fas fa-newspaper"
    :cancelRoute="route('admin.news.index')"
    :enctype="true"
>
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <label for="title" class="form-label required-field">Titre</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" 
                    id="title" name="title" value="{{ old('title', $news->title) }}" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="content" class="form-label required-field">Contenu</label>
                <textarea class="form-control @error('content') is-invalid @enderror" 
                    id="content" name="content" rows="8" required>{{ old('content', $news->content) }}</textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="category" class="form-label required-field">Catégorie</label>
                <select class="form-select @error('category') is-invalid @enderror" 
                    id="category" name="category" required>
                    <option value="">Sélectionnez une catégorie</option>
                    <option value="general" {{ old('category', $news->category) == 'general' ? 'selected' : '' }}>Général</option>
                    <option value="academique" {{ old('category', $news->category) == 'academique' ? 'selected' : '' }}>Académique</option>
                    <option value="evenements" {{ old('category', $news->category) == 'evenements' ? 'selected' : '' }}>Événements</option>
                    <option value="clubs" {{ old('category', $news->category) == 'clubs' ? 'selected' : '' }}>Clubs</option>
                    <option value="autre" {{ old('category', $news->category) == 'autre' ? 'selected' : '' }}>Autre</option>
                </select>
                @error('category')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" 
                    id="image" name="image" accept="image/*">
                <div class="form-text">
                    Formats acceptés : JPG, JPEG, PNG, GIF. Taille maximale : 2MB
                </div>
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                @if($news->image)
                    <div class="mt-2">
                        <img src="{{ Storage::url($news->image) }}" alt="{{ $news->title }}" class="image-preview">
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="status" class="form-label required-field">Statut</label>
                <select class="form-select @error('status') is-invalid @enderror" 
                    id="status" name="status" required>
                    <option value="draft" {{ old('status', $news->status) == 'draft' ? 'selected' : '' }}>Brouillon</option>
                    <option value="published" {{ old('status', $news->status) == 'published' ? 'selected' : '' }}>Publié</option>
                </select>
                @error('status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
</x-admin.form>
@endsection 