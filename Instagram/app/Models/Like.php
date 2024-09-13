<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $table = 'likes';

    // Relación de Many To One
    public function user() {
        $this->belongsTo('App\User', 'user_id');
    }

    // Relación de Many To One
    public function image() {
        return $this->belongsTo('App\Image', 'image_id');
    }
}
