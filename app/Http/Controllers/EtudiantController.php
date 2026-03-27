<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Note;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function dashboard()
    {
        return view('etudiant.dashboard');
    }
   public function notes()
{
    $user = auth()->user();
    $notes = $user->notes;  
    return view('etudiant.notes', compact('notes'));
}
}
