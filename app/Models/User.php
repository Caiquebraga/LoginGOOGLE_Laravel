<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'google_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    // Método para buscar usuário por ID do Google
    public static function findByGoogleId($googleId)
    {
        return static::where('google_id', $googleId)->first();
    }
}
