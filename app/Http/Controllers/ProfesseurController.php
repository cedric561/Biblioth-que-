<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Note;
use App\Models\User;

class ProfesseurController extends Controller
{
    public function dashboard() { return view('professeur.dashboard'); }

    public function notes(){
        $notes = Note::where('professeur_id',Auth::id())->with('etudiant')->get();
        return view('professeur.notes', compact('notes'));
    }

    public function profils(){
        return view('professeur.profils');
    }

    public function createNote(){
        $etudiants = User::where('role','etudiant')->get();
        return view('professeur.createNote', compact('etudiants'));
    }

    public function storeNote(Request $request){
        Note::create([
            'etudiant_id'=>$request->etudiant_id,
            'matiere'=>$request->matiere,
            'note'=>$request->note,
            'professeur_id'=>Auth::id()
        ]);
        return redirect()->back()->with('success','Note ajoutée!');
    }

    public function editNote($id){
        $note = Note::where('professeur_id',Auth::id())->findOrFail($id);
        return view('professeur.editNote', compact('note'));
    }

    public function updateNote(Request $request,$id){
        $note = Note::where('professeur_id',Auth::id())->findOrFail($id);
        $note->update($request->only(['matiere','note']));
        return redirect()->route('professeur.notes')->with('success','Note mise à jour!');
    }

    public function deleteNote($id){
        $note = Note::where('professeur_id',Auth::id())->findOrFail($id);
        $note->delete();
        return redirect()->route('professeur.notes')->with('success','Note supprimée!');
    }
}
