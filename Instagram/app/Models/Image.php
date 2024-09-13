<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory;
    
    protected $table = 'images';

    // Relación One To Many 
    public function comments() {
        return $this->hasMany(Comment::class);
    }


    // Relación One To Many 
    public function likes() {
        return $this->hasMany(Like::class);
    }


    // Relación de Many To One
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
