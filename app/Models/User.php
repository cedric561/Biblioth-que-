<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password', 'role'];

    protected $hidden = ['password', 'remember_token'];

    public function notes()
    {
        if($this->role == 'etudiant') {
            return $this->hasMany(Note::class, 'etudiant_id');
        }
        if($this->role == 'professeur') {
            return $this->hasMany(Note::class, 'professeur_id');
        }
        return null;
    }
}
