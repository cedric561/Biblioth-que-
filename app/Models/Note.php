<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['etudiant_id', 'professeur_id', 'matiere', 'note'];

    public function etudiant() {
        return $this->belongsTo(User::class, 'etudiant_id');
    }

    public function professeur() {
        return $this->belongsTo(User::class, 'professeur_id');
    }
}
