<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category',
        'image',
        'location',
        'meeting_schedule',
        'members_count',
        'creation_date',
    ];

    protected $casts = [
        'creation_date' => 'date',
    ];

    public function members()
    {
        return $this->belongsToMany(User::class, 'club_members')
            ->withPivot('role', 'date_inscription')
            ->withTimestamps();
    }

    public function isUserMember(User $user)
    {
        return $this->members()->where('user_id', $user->id)->exists();
    }

    public function getUserRole(User $user)
    {
        $member = $this->members()->where('user_id', $user->id)->first();
        return $member ? $member->pivot->role : null;
    }
}
