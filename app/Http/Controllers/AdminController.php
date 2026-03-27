<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Hash;
use App\Models\Note;
use App\Models\User;

class AdminController extends Controller
{

    public function dashboard(){
        $nbProfesseurs = User::where('role', 'professeur')->count();
        $nbEtudiants = User::where('role', 'etudiant')->count();
        return view('admin.dashboard', compact('nbProfesseurs', 'nbEtudiants'));
    }


public function professeurs(){
     $professeurs = User::where('role','professeur')->get();
      return view('admin.professeurs', compact('professeurs'));
}
public function createProfesseur(){
     return view('admin.createProfesseur');
 }
public function storeProfesseur(Request $request){
    User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        'role'=>'professeur'
    ]);
    return redirect()->route('admin.professeurs');
}


public function etudiants(){
     $etudiants = User::where('role','etudiant')->get();
      return view('admin.etudiants', compact('etudiants'));
 }
public function createEtudiant(){
     return view('admin.createEtudiant');

}
public function storeEtudiant(Request $request){
    User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        'role'=>'etudiant'
    ]);
    return redirect()->route('admin.etudiants');
}

        // Notes
public function notes()
{
    $notes = Note::with(['etudiant','professeur'])->get();
    return view('admin.notes', compact('notes'));
}

public function createNote(){
    $etudiants = User::where('role','etudiant')->get();
    $professeurs = User::where('role','professeur')->get();
    return view('admin.createNote', compact('etudiants','professeurs'));
}

public function storeNote(Request $request){
    Note::create([
        'etudiant_id' => $request->etudiant_id,
        'professeur_id' => $request->professeur_id,
        'matiere' => $request->matiere,
        'note' => $request->note,
    ]);

    return redirect()->route('admin.notes');
}
}
