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
</form>
@endsection
