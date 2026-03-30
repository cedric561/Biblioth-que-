<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Note;


class ProfesseurController extends Controller
{
    public function dashboard()
    {
        return view('professeur.dashboard');
    }

    public function notes()
    {
         $notes = Note::where('professeur_id', Auth::id())
                 ->with('etudiant')
                 ->orderBy('id', 'asc')
                 ->get();
        return view('professeur.notes', compact('notes'));
    }

    
    public function deletenotes($id){
        $del = Note::findOrFail($id);
        $del ->delete();
        return redirect()->back()
            ->with('supprime','Note supprimer avec succès!');
    }


}
