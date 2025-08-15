<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $casts = [
        'published_at' => 'datetime',
        'status' => 'boolean', // ← booleanにキャスト
    ];
    
    protected $fillable = ['title', 'author', 'published_at', 'isbn', 'status'];
    
    public function getStatusLabelAttribute(): string
    {
        return $this->status ? '在庫' : '貸出中';
    }
}
