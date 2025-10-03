<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'email',
        'sujet',
        'message',
        'statut',
        'date_lecture',
        'date_reponse',
        'reponse',
    ];

    protected $casts = [
        'date_lecture' => 'datetime',
        'date_reponse' => 'datetime',
    ];

    public function markAsRead()
    {
        $this->update([
            'statut' => 'lu',
            'date_lecture' => now(),
        ]);
    }

    public function reply($reponse)
    {
        $this->update([
            'statut' => 'repondu',
            'date_reponse' => now(),
            'reponse' => $reponse,
        ]);
    }
}
