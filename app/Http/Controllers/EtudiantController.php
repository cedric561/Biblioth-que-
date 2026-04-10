<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Note;
use App\Models\User;

class EtudiantController extends Controller
{
    public function dashboard() {
         return view('etudiant.dashboard');
         }

    public function notes(){
        $notes = Note::with('professeur')->where('etudiant_id', Auth::id())->get();
        return view('etudiant.notes', compact('notes'));
    }

    public function profils(){
        return view('etudiant.profils');
    }
}
