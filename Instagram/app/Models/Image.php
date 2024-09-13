<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    
    protected $table = 'images';

    // Relación One To Many 
    public function commnents() {
        return $this->hasMany('App\Comment');
    }


    // Relación One To Many 
    public function likes() {
        return $this->hasMany('App\Like');
    }


    // Relación de Many To One
    public function user() {
        $this->belongsTo('App\User', 'user_id');
    }
}
