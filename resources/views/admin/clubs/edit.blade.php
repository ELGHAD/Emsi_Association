@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="form-container">
        <div class="form-card">
            <div class="card-header">
                <h5><i class="fas fa-users-cog me-2"></i>Modifier le club</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.clubs.update', $club) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="name" class="form-label required-field">Nom du club</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                    id="name" name="name" value="{{ old('name', $club->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description" class="form-label required-field">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" 
                                    id="description" name="description" rows="4" required>{{ old('description', $club->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="category" class="form-label required-field">Catégorie</label>
                                <select class="form-select @error('category') is-invalid @enderror" 
                                    id="category" name="category" required>
                                    <option value="">Sélectionnez une catégorie</option>
                                    <option value="sport" {{ old('category', $club->category) == 'sport' ? 'selected' : '' }}>Sport</option>
                                    <option value="culture" {{ old('category', $club->category) == 'culture' ? 'selected' : '' }}>Culture</option>
                                    <option value="technologie" {{ old('category', $club->category) == 'technologie' ? 'selected' : '' }}>Technologie</option>
                                    <option value="académique" {{ old('category', $club->category) == 'académique' ? 'selected' : '' }}>Académique</option>
                                    <option value="autre" {{ old('category', $club->category) == 'autre' ? 'selected' : '' }}>Autre</option>
                                </select>
                                @error('category')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="location" class="form-label required-field">Lieu</label>
                                <input type="text" class="form-control @error('location') is-invalid @enderror" 
                                    id="location" name="location" value="{{ old('location', $club->location) }}" required>
                                @error('location')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="meeting_schedule" class="form-label required-field">Horaire des réunions</label>
                                <input type="text" class="form-control @error('meeting_schedule') is-invalid @enderror" 
                                    id="meeting_schedule" name="meeting_schedule" 
                                    placeholder="Ex: Tous les mardis de 14h à 16h" 
                                    value="{{ old('meeting_schedule', $club->meeting_schedule) }}" required>
                                @error('meeting_schedule')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="image" class="form-label">Logo du club</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                    id="image" name="image" accept="image/*">
                                <div class="form-text">
                                    Formats acceptés : JPG, JPEG, PNG, GIF. Taille maximale : 2MB
                                </div>
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                @if($club->image)
                                    <div class="mt-2">
                                        <img src="{{ Storage::url($club->image) }}" alt="{{ $club->name }}" class="image-preview">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <a href="{{ route('admin.clubs.index') }}" class="btn btn-cancel btn-form">
                            <i class="fas fa-times me-2"></i>Annuler
                        </a>
                        <button type="submit" class="btn btn-success btn-form">
                            <i class="fas fa-save me-2"></i>Enregistrer les modifications
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Form validation
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
@endpush
@endsection 