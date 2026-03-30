@extends('layouts.app')

@section('content')
<h2>Ajouter une note</h2>

<form method="POST" action="{{ route('admin.storeNote') }}">
    @csrf

    <div class="mb-3">
        <label>Étudiant</label>
        <select name="etudiant_id" class="form-control">
            @foreach($etudiants as $etudiant)
                <option value="{{ $etudiant->id }}">{{ $etudiant->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Professeur</label>
        <select name="professeur_id" class="form-control">
            @foreach($professeurs as $prof)
                <option value="{{ $prof->id }}">{{ $prof->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <input type="text" name="matiere" placeholder="Matière" class="form-control" required>
    </div>

    <div class="mb-3">
        <input type="number" name="note" placeholder="Note" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Ajouter</button>
    <a href="{{ route('admin.notes') }}" class="btn btn-secondary">
         <i class="bi bi-arrow-left me-2"></i> Retour
    </a>
</form>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

@endsection
