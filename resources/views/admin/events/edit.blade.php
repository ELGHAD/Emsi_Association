@extends('layouts.admin')

@section('content')
<x-admin.form
    :action="route('admin.events.update', $event)"
    method="PUT"
    title="Modifier l'événement"
    icon="fas fa-calendar-edit"
    :cancelRoute="route('admin.events.index')"
    :enctype="true"
>
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <label for="title" class="form-label required-field">Titre</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" 
                    id="title" name="title" value="{{ old('title', $event->title) }}" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description" class="form-label required-field">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" 
                    id="description" name="description" rows="4" required>{{ old('description', $event->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date" class="form-label required-field">Date</label>
                        <input type="datetime-local" class="form-control @error('date') is-invalid @enderror" 
                            id="date" name="date" value="{{ old('date', $event->date->format('Y-m-d\TH:i')) }}" required>
                        @error('date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="location" class="form-label required-field">Lieu</label>
                        <input type="text" class="form-control @error('location') is-invalid @enderror" 
                            id="location" name="location" value="{{ old('location', $event->location) }}" required>
                        @error('location')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="time" class="form-label required-field">Heure</label>
                        <input type="text" class="form-control @error('time') is-invalid @enderror" 
                            id="time" name="time" value="{{ old('time', $event->time) }}" required>
                        @error('time')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="capacity" class="form-label required-field">Capacité</label>
                        <input type="number" class="form-control @error('capacity') is-invalid @enderror" 
                            id="capacity" name="capacity" value="{{ old('capacity', $event->capacity) }}" min="1" required>
                        @error('capacity')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="type" class="form-label required-field">Type d'événement</label>
                <select class="form-select @error('type') is-invalid @enderror" 
                    id="type" name="type" required>
                    <option value="">Sélectionnez un type</option>
                    <option value="conference" {{ old('type', $event->type) == 'conference' ? 'selected' : '' }}>Conférence</option>
                    <option value="workshop" {{ old('type', $event->type) == 'workshop' ? 'selected' : '' }}>Atelier</option>
                    <option value="competition" {{ old('type', $event->type) == 'competition' ? 'selected' : '' }}>Compétition</option>
                    <option value="social" {{ old('type', $event->type) == 'social' ? 'selected' : '' }}>Événement social</option>
                    <option value="autre" {{ old('type', $event->type) == 'autre' ? 'selected' : '' }}>Autre</option>
                </select>
                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="club_id" class="form-label">Club organisateur</label>
                <select class="form-select @error('club_id') is-invalid @enderror" 
                    id="club_id" name="club_id">
                    <option value="">Aucun club</option>
                    @foreach($clubs as $club)
                        <option value="{{ $club->id }}" {{ old('club_id', $event->club_id) == $club->id ? 'selected' : '' }}>
                            {{ $club->name }}
                        </option>
                    @endforeach
                </select>
                @error('club_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="image" class="form-label">Image de l'événement</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" 
                    id="image" name="image" accept="image/*">
                <div class="form-text">
                    Formats acceptés : JPG, JPEG, PNG, GIF. Taille maximale : 2MB
                </div>
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                @if($event->image)
                    <div class="mt-2">
                        <img src="{{ Storage::url($event->image) }}" alt="{{ $event->title }}" class="image-preview">
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-admin.form>
@endsection 