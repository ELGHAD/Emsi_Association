<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'type',
        'date',
        'location',
        'image',
        'capacity',
        'user_id',
    ];

    protected $casts = [
        'date' => 'datetime:Y-m-d H:i:s',
    ];

    protected $appends = [
        'formatted_date',
    ];

    public function getFormattedDateAttribute()
    {
        return $this->date ? $this->date->format('d/m/Y H:i') : null;
    }

    public function organizer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function participants()
    {
        return $this->belongsToMany(User::class, 'event_participants')
            ->withTimestamps();
    }

    public function scopeUpcoming($query)
    {
        return $query->where('date', '>=', now());
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function isUserParticipant(User $user)
    {
        return $this->participants()->where('user_id', $user->id)->exists();
    }

    public function getUserStatus(User $user)
    {
        $participant = $this->participants()->where('user_id', $user->id)->first();
        return $participant ? $participant->pivot->statut : null;
    }

    public function hasAvailableSpots()
    {
        return !$this->capacity || $this->participants()->count() < $this->capacity;
    }
}
