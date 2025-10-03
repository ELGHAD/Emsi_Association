@csrf
<div class="mb-3">
    <label for="title" class="form-label">Titre</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $event->title ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description" required>{{ old('description', $event->description ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="file" class="form-control" id="image" name="image">
</div>
<div class="mb-3">
    <label for="date" class="form-label">Date</label>
    <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $event->date ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="time" class="form-label">Heure</label>
    <input type="text" class="form-control" id="time" name="time" value="{{ old('time', $event->time ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="location" class="form-label">Lieu</label>
    <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $event->location ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="capacity" class="form-label">Capacité</label>
    <input type="number" class="form-control" id="capacity" name="capacity" value="{{ old('capacity', $event->capacity ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="club_id" class="form-label">Club</label>
    <select class="form-control" id="club_id" name="club_id">
        <option value="">Aucun</option>
        @foreach($clubs as $club)
            <option value="{{ $club->id }}" {{ old('club_id', $event->club_id ?? '') == $club->id ? 'selected' : '' }}>{{ $club->name }}</option>
        @endforeach
    </select>
</div>
<button type="submit" class="btn btn-primary">Enregistrer</button> 