@extends('layouts.app')

@section('content')
<h2>Ajouter un étudiant</h2>

<form method="POST" action="{{ route('admin.storeEtudiant') }}">
    @csrf

    <div class="mb-3">
        <input type="text" name="name" placeholder="Nom" class="form-control" required>
    </div>

    <div class="mb-3">
        <input type="email" name="email" placeholder="Email" class="form-control" required>
    </div>

    <div class="mb-3">
        <input type="password" name="password" placeholder="Mot de passe" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Ajouter</button>
        <a href="{{ route('admin.etudiants') }}" class="btn btn-secondary">
         <i class="bi bi-arrow-left me-2"></i> Retour
    </a>
</form>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

@endsection
