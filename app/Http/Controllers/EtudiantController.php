<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Note;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function dashboard()
    {
        return view('etudiant.dashboard');
    }
   public function notes(){
        $notes = Note::with(['etudiant','professeur'])
            ->where('etudiant_id',Auth::id())
            ->get();
        return view('etudiant.notes', compact('notes'));
    }
}
