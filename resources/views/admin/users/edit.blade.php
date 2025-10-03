@extends('layouts.admin')

@section('content')
<x-admin.form
    :action="route('admin.users.update', $user)"
    method="PUT"
    title="Modifier l'utilisateur"
    icon="fas fa-user-edit"
    :cancelRoute="route('admin.users.index')"
>
    <div class="form-group">
        <label for="name" class="form-label required-field">Nom</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" 
            id="name" name="name" value="{{ old('name', $user->name) }}" required>
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="first_name" class="form-label required-field">Prénom</label>
        <input type="text" class="form-control @error('first_name') is-invalid @enderror" 
            id="first_name" name="first_name" value="{{ old('first_name', $user->first_name) }}" required>
        @error('first_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="email" class="form-label required-field">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" 
            id="email" name="email" value="{{ old('email', $user->email) }}" required>
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" 
            id="password" name="password">
        <div class="form-text">Laisser vide pour ne pas changer</div>
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
        <input type="password" class="form-control" 
            id="password_confirmation" name="password_confirmation">
    </div>

    <div class="form-group">
        <label for="role" class="form-label required-field">Rôle</label>
        <select class="form-select @error('role') is-invalid @enderror" 
            id="role" name="role" required>
            <option value="student" {{ old('role', $user->role) == 'student' ? 'selected' : '' }}>Étudiant</option>
            <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Administrateur</option>
        </select>
        @error('role')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</x-admin.form>
@endsection 