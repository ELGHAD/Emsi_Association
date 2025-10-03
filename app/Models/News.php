<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
        'category',
        'user_id',
        'is_published',
        'publication_date',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'publication_date' => 'datetime',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true)
            ->where('publication_date', '<=', now());
    }

    public function getExcerptAttribute()
    {
        // Strip HTML tags and get plain text
        $plainText = strip_tags($this->content);
        // Get first few sentences up to 200 characters
        return Str::limit($plainText, 200);
    }
}
