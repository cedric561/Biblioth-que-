<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Note;

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





    public function etudiants(){
        $etudiants = User::where('role','etudiant')->get();
        return view('admin.etudiants', compact('etudiants'));
    }


    public function editEtudiant($id)
    {
        $etudiant =User::findOrFail($id);
        return view('admin.editEtudiant', compact('etudiant'));
    }

    public function updateEtudiant(Request $request, $id)
    {
        $etudiant = User::findOrFail($id);

        $etudiant->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('admin.etudiants')->with('success', 'Étudiant modifié');
    }


    public function deleteEtudiant($id)
    {
        $etudiant = User::findOrFail($id);
        $etudiant->delete();
        return redirect()->back()->with('success', 'Étudiant supprimé avec succès');
    }







    public function notes(){
        $notes = Note::with(['etudiant','professeur'])->get();
        return view('admin.notes', compact('notes'));
    }


    public function editProfesseur($id)
    {
        $professeur = User::findOrFail($id);
        return view('admin.editProfesseur', compact('professeur'));
    }


    public function updateProfesseur(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $professeur = User::findOrFail($id);
        $professeur->name = $request->name;
        $professeur->email = $request->email;
        $professeur->save();

        return redirect()->route('admin.professeurs')->with('success', 'Professeur mis à jour avec succès !');
    }


    public function deleteProfesseur($id)
    {
        $professeur = User::findOrFail($id);
        $professeur->delete();

        return redirect()->route('admin.professeurs')->with('success', 'Professeur supprimé avec succès !');
    }
}

